<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
class PagesController extends Controller
{
    public function index(){
    	$listCourse = Course::orderBy('id', 'DESC')
    					->orderBy('love','DESC')
    					->orderBy('number_of_learn')
    					->paginate(Course::PAGE_SIZE);
    	return view('frontend.index',['listCourse'=>$listCourse]);
    }
}
