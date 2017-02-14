<?php
/**
 * Created by PhpStorm.
 * User: Dungtd
 * Date: 6/30/2016
 * Time: 10:00 AM
 */

namespace App\Http\Controllers\backend;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{

    //Validation
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:0',
        ]);
    }

    //Get Login
    public function getLogin(){
        return view("backend\login.login");
    }

    //post Login
    public function postLogin( Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $validator = $this->validator($request->all());

        if ( $validator->fails() ){
            return Redirect::to('/admin/login')->withInput()->withErrors($validator);
        }
        if ( Auth::attempt(['email' => $email, 'password' => $password]) ){
            return redirect()->intended('/admin');
        }else{
            return Redirect::to('/admin/login')->withInput()->withErrors("Login Fail !");
        }
        return back()->withInput();
    }

    //Logout
    public function getLogout(){
        if( Auth::logout() ){
            return redirect('auth/login');
        };
        return redirect('admin/');
    }
}