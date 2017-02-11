<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
    	return view('templates.default.course.index');
    }
    public function detail(){
    	return view('templates.default.course.course-detail');
    }
    public function preview(){
		return view('templates.default.course.course-preview');
    }
    public function share(){
    	return view('templates.default.course.course-share');
    }
}
