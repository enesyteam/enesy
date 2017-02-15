<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('frontend.course.courses-list');
    }
}
