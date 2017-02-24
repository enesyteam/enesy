<?php

namespace App\Http\Controllers\frontend;

use Request;
use App\Http\Models\User;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Member;
use Session;
use Captcha;

class UserController extends Controller
{
    public function login(){
        if ( Auth::guard('frontend')->check() ){
            return Redirect::route('home');
        }
    	return view('frontend.login');
    }

    //
    public function refreshCaptcha(){
        $captcha = Captcha::src();
        sleep(5);
        return response()->json($captcha);
    }

    //doLogin post
    public function doLogin(){
        $postInput = Input::all();
        $validator = User::validatordoLogin($postInput);
        if ( $validator->fails() ){
            return Redirect::route('user.login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }

        $userdata = array(
            'username'     => Input::get('username'),
            'password'  => Input::get('password')
        );

        // attempt to do the login
        if ( Auth::guard('frontend')->attempt($userdata) ){
            return Redirect::route('home');
        }else{
            Session::flash('message_error', 'Login Failed'); 
            return Redirect::route('user.login');
        }
    }

    public function doLogout(){
        Auth::guard('frontend')->logout();
        return Redirect::route('home');
    }

    //Register
    public function register()
    {
        if ( Auth::guard('frontend')->check() ){
            return Redirect::route('home');
        }
        return view('frontend.register');
    }

    public function doRegister( Request $request )
    {
        $data_return = [];

        $data = Request::only('email' , 'password' , 'username', 'first_name' , 'last_name' , 'middle_name' , 'confirm-password');

        $userdata = array(
            'username'     => Input::get('username'),
            'password'  => Input::get('password')
        );
        $validator = Member::validatordoRegister($data);

        if($validator->fails()){
            return Redirect::route('user.register')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }

        $data['password'] = Hash::make($data['password']);
        try{
            $checkStatus = Member::create($data);

        }catch (Exception $e){
            return Redirect::route('user.register')
                            ->withInput()
                            ->with('message', 'Register Failed');
        }

        if( $checkStatus ){
            if ( Auth::guard('frontend')->attempt($userdata) ){
                return Redirect::route('home');
            }else{
                Session::flash('message_error', 'Login Failed');
                return Redirect::route('user.login');
            }
        }else{
            return Redirect::route('user.login');
        }

    }

    /*Author*/
    public function profileLecturers(){
        return view('frontend.author.public-profile');
    }

    public function doUpdateProfile(){
        $data_return = [];
        $data = Request::only(
                    'sex' , 'dob' , 'social',
                    'first_name' , 'last_name' ,
                    'middle_name' , 'address',
                    'phone' , 'skype','facebook','path_small');
        $validator = Member::validatorEditProfile($data);

        if($validator->fails()) {
            return Redirect::route('user.author_public_profile')
                ->withErrors($validator);
        }
        try{

            $member = Member::find(Auth::guard('frontend')->user()->id);
            $member->sex = $data['sex'];
            $member->dob = strtotime($data['dob']);
            $member->social = $data['social'];
            $member->first_name = $data['first_name'];
            $member->last_name = $data['last_name'];
            $member->middle_name = $data['middle_name'];
            $member->address = $data['address'];
            $member->phone = $data['phone'];
            $member->skype = $data['skype'];
            $member->facebook = $data['facebook'];
            $member->avatar = $data['path_small'];
            $member->save();

        }catch (Exception $e){
            return Redirect::route('user.author_public_profile')
                ->withInput()
                ->with('message_error', 'Update Profile Fail! (Sorry) ');
        }

        return Redirect::route('user.author_public_profile')
                            ->with('message_error','Update Success!');

    }

    //Đổi mật khẩu
    public function author_account(){
        return view('frontend.author.account');
    }

    public function doChangePass(){

        $data = Request::only('old_pass','new_pass','new_pass_confirm');
        $validator = Member::validatorChangePass($data);
        if($validator->fails()) {
            return Redirect::route('user.author_account')
                ->withErrors($validator);
        }
        try{

            $member = Member::find(Auth::guard('frontend')->user()->id);
            $member->password = bcrypt($data['new_pass']);
            $member->save();

        }catch (Exception $e){
            return Redirect::route('user.author_account')
                ->withInput()
                ->with('message_error', 'Update Profile Fail! (Sorry) ');
        }

        return Redirect::route('user.author_account')
            ->with('message_error','Update Success!');

    }


    public function author(){
    	return view('frontend.author.index');
    }
    public function author_enrollers(){
        //for testing
        $enrollers = Member::orderBy('id', 'DESC')->paginate(16);
        return view('frontend.author.enrollers')->withEnrollers($enrollers);
    }
    public function author_enrollers_list(){
        //for testing
        $enrollers = Member::orderBy('id', 'DESC')->paginate(16);
        return view('frontend.author.enrollers-list')->withEnrollers($enrollers);
    }
    public function author_courses(){
        return view('frontend.author.courses');
    }
    public function author_courses_create(){
        return view('frontend.author.courses-create');
    }


    public function author_email(){
        return view('frontend.author.email');
    }
    public function author_bill(){
        return view('frontend.author.bill');
    }
    public function author_notifications(){
        return view('frontend.author.notifications');
    }
    
}
