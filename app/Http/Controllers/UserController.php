<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
    	return view('frontend.login');
    }
    public function register(){
		return view('frontend.register');
    }
    public function author(){
    	return view('frontend.author.index');
    }
}
