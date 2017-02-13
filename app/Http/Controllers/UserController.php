<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
    	return view('templates.default.login');
    }
    public function register(){
		return view('templates.default.register');
    }
    public function author(){
    	return view('templates.default.author.index');
    }
}
