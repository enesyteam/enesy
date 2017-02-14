<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
    	return view('frontend.course.index');
    }
    public function detail(){
    	return view('frontend.course.course-detail');
    }
    public function preview(){
		return view('frontend.course.course-preview');
    }
    public function share(){
    	return view('frontend.course.course-share');
    }
}
