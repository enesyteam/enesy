<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
use App\Http\Models\Category;
use DB;
use View;

class CourseController extends Controller
{
    public function index(Request $request){
      $dataRequest = $request->all();
      $sort = isset($dataRequest['sort'])?$dataRequest['sort']:"";
        $listCourse = Course::select('tbl_course.*'
            ,'tbl_member.first_name'
            ,'tbl_member.last_name'
            ,'tbl_member.middle_name'
            ,'cat1.title as cat_title1'
            ,'cat1.alias as cat_alias1'
            ,'cat2.title as cat_title2'
            ,'cat1.alias as cat_alias2')
                        ->leftJoin('tbl_member','tbl_member.id','=','tbl_course.mentor_id')
                        ->leftJoin('tbl_categories as cat1','cat1.id','=','tbl_course.parent_cat_id')
                        ->leftJoin('tbl_categories as cat2','cat2.id','=','tbl_course.cat_id');             
      if($sort != '') {
        $dataSort = explode("-", $sort);
        if(count($sort) >1) {
          $listCourse->orderBy('tbl_course.'.$dataSort[0],$dataSort[1]);
        } else {
          $listCourse->orderBy('tbl_course.'.$dataSort[0],'DESC');
        }
      } else {
        $listCourse->orderBy('tbl_course.id', 'DESC')->orderBy('tbl_course.love','DESC')->orderBy('tbl_course.num_of_learn','DESC');
      }
      $listCourse = $listCourse->paginate(Course::PAGE_SIZE);
      // seo
     
      View::share ( 'meta_title','Enesy | Đào tạo Kỹ sư chuyên nghiệp' );
      View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
       
        return view('frontend.themes.default.pages.course.index',['listCourse'=>$listCourse, "sort"=>$sort]);
    }

    public function detail($alias,$id){
        $course_detail = Course::where('id',$id)->where('status',1)->first();
        if($course_detail){
         $cat = Category::where('id',$course_detail->cat_id)->where('status',1)->first();
         $parent_cat = $cat;
         if($course_detail->cat_id!=$course_detail->parent_cat_id){
            $parent_cat = Category::where('id',$course_detail->parent_cat_id)->where('status',1)->first(); 
         }
          // seo
          View::share ( 'meta_title',$course_detail->title );
          View::share ( 'meta_des',$course_detail->introtext );
          // end seo
    	  return view('frontend.course.course-detail',['course_detail'=>$course_detail, 'cat'=>$cat, 'parent_cat'=>$parent_cat]);
        } else {
            return redirect()->route('error');
        }
    }
    public function preview($id){
        $course_detail = Course::where('id',$id)->where('status',1)->first();
		return view('frontend.course.course-preview',['course_detail'=>$course_detail]);
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
            return view('frontend.themes.default.pages.course.by-cat',['listCourse'=>$listCourse, 'cat'=>$cat]);
        } else {
            return redirect()->route('error');
        }
    }
    public function search_result(){
        return view('frontend.course.course-search-result');
    }
}
