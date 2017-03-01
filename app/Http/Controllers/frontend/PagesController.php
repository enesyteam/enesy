<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Models\Course;
use View;
class PagesController extends Controller
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

      $listCourse->where('tbl_course.status',1);         		
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
       
      // end seo
    	return view('frontend.course.courses-list',['listCourse'=>$listCourse, "sort"=>$sort]);
    }
    //demo gridview
    public function indexByGrid(Request $request){
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
       
      // end seo
      return view('frontend.course.courses-grid',['listCourse'=>$listCourse, "sort"=>$sort]);
    }
    //end demo

    public function about(){
          View::share ( 'meta_title','Enesy | Giới thiệu về Enesy' );
          View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
    	return view('frontend.about');
    }
    public function become_instructor(){
          View::share ( 'meta_title','Hợp tác giảng dạy | Enesy' );
          View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
        return view('frontend.become-instructor');
    }
    public function terms(){
          View::share ( 'meta_title','Enesy | Điều khoản sử dụng' );
          View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
        return view('frontend.terms');
    }
    public function privacy_policy(){
          View::share ( 'meta_title','Enesy | Chính sách bảo mật' );
          View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
        return view('frontend.privacy-policy');
    }

    public function error(){
          View::share ( 'meta_title','Enesy | Not found!' );
          View::share ( 'meta_des','Đào tạo Kỹ sư chuyên nghiệp' );
        return view('frontend.error');
    }
}
