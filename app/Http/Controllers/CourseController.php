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
}