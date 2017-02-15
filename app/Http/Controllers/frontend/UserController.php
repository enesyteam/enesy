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

class UserController extends Controller
{
    public function login(){
        if ( Auth::check() ){
            return Redirect::route('home');
        }
    	return view('frontend.login');
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
        if ( Auth::attempt($userdata) ){
            return Redirect::route('home');
        }
        return Redirect::route('user.login')
                    ->withInput()
                    ->with('message', 'Login Failed');;
    }

    public function doLogout(){
        Auth::logout();
        return Redirect::route('home');
    }

    //Register
    public function register()
    {
        if ( Auth::check() ){
            return Redirect::route('home');
        }
        return view('frontend.register');
    }

    public function doRegister( Request $request )
    {
        $data_return = [];

        $data = Request::only('email' , 'password' , 'username', 'first_name' , 'last_name' , 'middle_name');

        $data['password'] = Hash::make($data['password']);

        try{
            $checkStatus = Member::create($data);

        }catch (Exception $e){
            return response()->json([
                'error' => 'User already exists.'
            ], HttpResponse::HTTP_CONFLICT);
        }

        $token = JWTAuth::fromUser($checkStatus);

        $information_status = MemberOther::where('email' , $data['email'])->value('information_status');
        $user = MemberOther::where('email' , $data['email'])->first();

        $data_return = [
            'token' => $token,
            'information_status' => $information_status,
            'user' => $user
        ];
        return response()->json($data_return);
    }

    public function author(){
    	return view('frontend.author.index');
    }
}
