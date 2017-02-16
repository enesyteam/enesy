<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
class PagesController extends Controller
{
    public function index(){
    	$listCourse = Course::select('tbl_course.*','tbl_member.first_name','tbl_member.last_name','tbl_member.middle_name','cat1.title as cat_title1','cat2.title as cat_title2')
    					->leftJoin('tbl_member','tbl_member.id','=','tbl_course.mentor_id')
    					->leftJoin('tbl_categories as cat1','cat1.id','=','tbl_course.parent_cat_id')
    					->leftJoin('tbl_categories as cat2','cat2.id','=','tbl_course.cat_id')
    					->orderBy('tbl_course.id', 'DESC')
    					->orderBy('tbl_course.love','DESC')
    					->orderBy('tbl_course.num_of_learn','DESC')
    					->paginate(Course::PAGE_SIZE);
    	/*echo "<pre>";
    	print_r($listCourse);
    	echo "</pre>"; die();*/
    	return view('frontend.course.courses-list',['listCourse'=>$listCourse]);
    }
}
