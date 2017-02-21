<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
use App\Http\Models\Category;
use DB;

class CourseController extends Controller
{
    public function index(){
    	return view('frontend.course.index');
    }
    public function detail($alias,$id){
        $course_detail = Course::where('id',$id)->where('status',1)->first();
        if($course_detail){
         $cat = Category::where('id',$course_detail->cat_id)->where('status',1)->first();
         $parent_cat = $cat;
         if($course_detail->cat_id!=$course_detail->parent_cat_id){
            $parent_cat = Category::where('id',$course_detail->parent_cat_id)->where('status',1)->first(); 
         }
    	  return view('frontend.course.course-detail',['course_detail'=>$course_detail, 'cat'=>$cat, 'parent_cat'=>$parent_cat]);
        } else {
            return redirect()->route('error');
        }
    }
    public function preview(){
		return view('frontend.course.course-preview');
    }
    public function view(){
        return view('frontend.course.course-view');
    }
    public function share(){
    	return view('frontend.course.course-share');
    }
    public function listByCategory($alias, $id) {
        $cat = Category::where('id',$id)->where('status',1)->first();
        if(!empty($cat)) {
            $listCourse = Course::select('tbl_course.*'
                ,'tbl_member.first_name'
                ,'tbl_member.last_name'
                ,'tbl_member.middle_name'
                ,'cat1.title as cat_title1'
                ,'cat1.alias as cat_alias1'
                ,'cat2.title as cat_title2'
                ,'cat1.alias as cat_alias2'
                )
                ->leftJoin('tbl_member','tbl_member.id','=','tbl_course.mentor_id')
                ->leftJoin('tbl_categories as cat1','cat1.id','=','tbl_course.parent_cat_id')
                ->leftJoin('tbl_categories as cat2','cat2.id','=','tbl_course.cat_id');
            if($cat->parent_id == 0) {
                $listCourse->where('parent_cat_id', $id);
            } else {
                $listCourse->where('cat_id', $id);
            }
            $listCourse = $listCourse->orderBy('tbl_course.id', 'DESC')
                ->orderBy('tbl_course.love','DESC')
                ->orderBy('tbl_course.num_of_learn','DESC')  
                ->paginate(Course::PAGE_SIZE);
            return view('frontend.course.course-by-cat',['listCourse'=>$listCourse, 'cat'=>$cat]);
        } else {
            return redirect()->route('error');
        }
    }
    public function search_result(){
        return view('frontend.course.course-search-result');
    }
}
