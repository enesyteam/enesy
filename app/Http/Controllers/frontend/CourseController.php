<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
use App\Http\Models\Category;
use App\Http\Models\CourseBenefit;
use App\Http\Models\CourseRequirement;
use App\Http\Models\CourseHit;
use App\Http\Models\Member;
use App\Http\Models\Section;
use App\Http\Models\Lesson;
use Illuminate\Support\Facades\Input as Input;
use DB;
use View;

class CourseController extends Controller
{
    public function index(){
    	return view('frontend.course.index');
    }
    // chi tiết khóa học
    public function detail($alias,$id){
        $course_detail = Course::where('id',$id)->where('status',1)->first();
        if($course_detail){
         $cat = Category::where('id',$course_detail->cat_id)->where('status',1)->first();
         $parent_cat = $cat;
         if($course_detail->cat_id!=$course_detail->parent_cat_id){
            $parent_cat = Category::where('id',$course_detail->parent_cat_id)->where('status',1)->first(); 
         }
         $course_benefit     = CourseBenefit::where('course_id',$id)->get();
         $course_requirement = CourseRequirement::where('course_id',$id)->get();
         $course_hit         = CourseHit::where('course_id',$id)->first();
         $mentor             = Member::where('id',$course_detail->mentor_id)->first();
         $section            = Section::where('course_id',$id)->get();
         $lesson_temp        = Lesson::where('course_id',$id)->get();
         $course_of_mentor   = Course::where('mentor_id',$course_detail->mentor_id)->get();

         $lesson = array();

         foreach ($lesson_temp as $row){
            $lesson[$row->section_id][] = $row;
         }
         if(!$lesson){
           $lesson = $lesson_temp ;
         }

         $data = array();
         $data['course_detail']      = $course_detail;
         $data['cat']                = $cat;
         $data['parent_cat']         = $parent_cat;
         $data['course_benefit']     = $course_benefit;
         $data['course_requirement'] = $course_requirement;
         $data['course_hit']         = $course_hit;
         $data['mentor']             = $mentor;
         $data['section']            = $section;
         $data['lesson']             = $lesson;
         $data['course_of_mentor']   = $course_of_mentor;

          // seo
          View::share ( 'meta_title',$course_detail->title );
          View::share ( 'meta_des',$course_detail->introtext );
          // end seo
    	  return view('frontend.course.course-detail',$data);
        } else {
            return redirect()->route('error');
        }
    }
    public function preview($id){
        $course_detail = Course::where('id',$id)->where('status',1)->first();
		return view('frontend.course.course-preview',['course_detail'=>$course_detail]);
    }
    // học bài
    public function view(){
        $id        = Input::get('id');
        $lesson_id = Input::get('lesson_id');
        $course_detail = Course::where('id',$id)->where('status',1)->first();
        $lesson_detail = array(); 
        if($lesson_id>0){
            $lesson_detail = Lesson::where('id',$lesson_id)->first();
        }
        
        if($course_detail){
         $mentor             = Member::where('id',$course_detail->mentor_id)->first();
         $lesson             = Lesson::where('course_id',$id)->get();
         if(!$lesson_detail){
           $lesson_detail = $lesson->first(); 
         }
         $course_of_mentor   = Course::where('mentor_id',$course_detail->mentor_id)->get();

         $data = array();
         $data['course_detail']      = $course_detail;
         $data['mentor']             = $mentor;
         $data['lesson']             = $lesson;
         $data['course_of_mentor']   = $course_of_mentor; 
         $data['lesson_detail']      = $lesson_detail;             
          // seo
          View::share ( 'meta_title',$course_detail->title );
          View::share ( 'meta_des',$course_detail->introtext );
          // end seo
           return view('frontend.course.course-view',$data);
        } else {
            return redirect()->route('error');
        }
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
            $listCourse->where('tbl_course.status',1);   
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
