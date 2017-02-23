<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\Http\Models\Category;
use App\Http\Models\Member;
use Illuminate\Support\Facades\View;
use App\Http\Models\Course;
use App\Http\Models\Lesson;
use App\Http\Models\LessonDoc;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cache;
use Config;
use Helper;


class CourseController extends Controller
{
	
    function index() {   
 
        $this->layout->meta_title='Course List';
        $custom_link = array();
        
        
        $title      = Input::get('title', '');
        $start_date = Input::get('start_date', '');
        $end_date   = Input::get('end_date', '');

        $query  = DB::table('tbl_course')
        ->orderBy('id', 'desc')
        ->select('id','title','cat_id','create_date','introtext');
              
        if($title){
             $custom_link['title'] = $title;
             $query = $query->where('title', 'like', '%'.$title.'%');
         }
         if($start_date){
             $custom_link['start_date'] = $start_date;
             $query = $query->where('create_date', '>', strtotime(\DateTime::createFromFormat('d/m/Y', $start_date)->format('Y-m-d')));
         }
         if($end_date){
             $custom_link['end_date'] = $end_date;
             $query = $query->where('create_date', '<', strtotime(\DateTime::createFromFormat('d/m/Y', $end_date)->format('Y-m-d')));
         }

         $all_data = $query->paginate(Config::get('params.row_page'));

         $data = array(     
                    'all_data'=>$all_data,             
                    'title' => $title,
                    'create_date' => $start_date,
                    'end_create_date' => $end_date
                    );               
        $all_data->appends($custom_link);  

        return view('backend.course.list',$data);
                
            }

    function add(Request $request) {

        $this->layout->meta_title='Add New Course';
        /*get list category*/
        $all_category = Category::where('status', 1)->orderBy('parent_id','ASC')->orderBy('id','DESC')->get(); 
        $listCat = array();
        foreach ($all_category as $cat) {
            if($cat->parent_id == 0) {
                $listCat[$cat->id]["title"] = $cat->title;
                $listCat[$cat->id]['data'] = array();
            } else {
                $listCat[$cat->parent_id]['data'][] = $cat;
            }
            
        }
        /*get list teacher*/
        $listTeacher = Member::select('id','last_name','first_name','middle_name')
                        ->where('status',1)
                        ->where('is_teaching',1)
                        ->orderBy('id','ASC')
                        ->get();

       if($request->isMethod('post')){
            $data                     = $request->all();
            $cat                      = explode("-",$data['category']);
            $course                   = new Course(); 
            $course->title            = $data["title"];   
            $course->alias            = Helper::generateSlug($data["title"]);     
            $course->parent_cat_id    = $cat[0];  
            $course->cat_id           = $cat[1];
            $course->mentor_id        = $data['mentor_id'];       
            $course->introtext        = $data["introtext"];      
            $course->content          = $data["content"];
            $course->love             = 0;
            $course->picture          = $data["picture"];
            $course->video            = $data["file"];
            $course->num_of_learn     = 0;
            $course->create_date      = time();
            $course->updated_at       = time();
        
            $course->save(['timestamps' => false]);
            return Redirect::to('/admin/course');

       }

        $this->layout->content = View::make('backend.course.add',array('listCat' => $listCat, 'listTeacher'=>$listTeacher));
    }

     function edit($id,Request $request) {
        $data = array();
        /*get list category*/
        $all_category = Category::where('status', 1)->orderBy('parent_id','ASC')->orderBy('id','DESC')->get(); 
        $listCat = array();
        foreach ($all_category as $cat) {
            if($cat->parent_id == 0) {
                $listCat[$cat->id]["title"] = $cat->title;
                $listCat[$cat->id]['data'] = array();
            } else {
                $listCat[$cat->parent_id]['data'][] = $cat;
            }
            
        }
        /*get list teacher*/
        $listTeacher = Member::select('id','last_name','first_name','middle_name')
                        ->where('status',1)
                        ->where('is_teaching',1)
                        ->orderBy('id','ASC')
                        ->get();
        $course = Course::find($id);
        if(!$course){
            echo "Not found Record!!";
            exit();
        }        

        if($request->isMethod('post')){
            $data                     = $request->all();
            $cat                      = explode("-",$data['category']);
            $course->title            = $data["title"]; 
            $course->alias            = Helper::generateSlug($data["title"]);       
            $course->parent_cat_id    = $cat[0];  
            $course->cat_id           = $cat[1];
            $course->mentor_id        = $data['mentor_id'];       
            $course->introtext        = $data["introtext"];      
            $course->content          = $data["content"];
            $course->picture          = $data["picture"];
            $course->video            = $data["file"];            
            $course->updated_at       = time();
            $course->save(['timestamps' => false]);
            return Redirect::to('/admin/course');
       }
        $this->layout->meta_title='Edit Course';
        $this->layout->content = View::make('backend.course.edit',['listCat'=>$listCat,'listTeacher'=>$listTeacher,'course'=>$course]);
    }   

    function deleteById() {
        $id = $_GET['id'];
        if (isset($id)) {
            $course = Course::find($id);
            if ($course != null) {
               $course->delete();
            }
        }
    }

    function deleteAll() {
        foreach ($_GET['data'] as $value) {
            if (isset($value)) {
                $e = Course::find($value);
                if ($e != null) {
                    $e->delete();
                }
            }
        }
    }




    function listLesson($cId) {   
 
        $this->layout->meta_title='Lesson List';
        $custom_link = array();

        
        $title = Input::get('title', '');
     
        $start_date = Input::get('start_date', '');
        $end_date   = Input::get('end_date', '');


         

        $course                 = Course::find($cId);

        $query = DB::table('tbl_lesson')
        ->orderBy('id', 'desc')
        ->select('id','title','cat_id','create_date')
        ->where('course_id', '=', $cId);

        if($title){
             $custom_link['title'] = $title;
             $query = $query->where('title', 'like', '%'.$title.'%');
         }
         if($start_date){
             $custom_link['start_date'] = $start_date;
             $query = $query->where('create_date', '>', strtotime(\DateTime::createFromFormat('d/m/Y', $start_date)->format('Y-m-d')));
         }
         if($end_date){
             $custom_link['end_date'] = $end_date;
             $query = $query->where('create_date', '<', strtotime(\DateTime::createFromFormat('d/m/Y', $end_date)->format('Y-m-d')));
         }


        $all_data = $query->paginate(Config::get('params.row_page'));


         $data = array(     
                    'course'=>$course,   
                    'all_data'=>$all_data,          
                    'title' => $title,
                    'create_date' => $start_date,
                    'end_create_date' => $end_date
                    );               
        $all_data->appends($custom_link);           
        $this->layout->content = View::make('backend.course.list-lesson',$data);
                
            }


    function createLesson($cId,Request $request) {
        $data = array();
        $category               = new Category;
        $all_category           = $category->getCategories(); 
        $data['all_category']   = $all_category;
        $course                 = Course::find($cId);

        $data['exam'] = $course;         

        if($request->isMethod('post')){
            $data                 = $request->all();
            $lesson               = new Lesson(); 
            $lesson->title        = $data["title"];      
            $lesson->cat_id       = $data["category"];
            $lesson->course_id      = $cId;
            $lesson->create_date  = time();
            $lesson->updated_at  = time();
            $lesson->save(['timestamps' => false]);

            
            $file_str           = isset($data["file"]) ? $data["file"]: array();
            $file_type_str      = isset($data["file_type"]) ? $data["file_type"]: array();
            $file_size_str      = isset($data["file_size"]) ? $data["file_size"]: array();

            if($file_str){
                $file      = explode(";", $file_str);
                $file_type = explode(";", $file_type_str);
                $file_size = explode(";", $file_size_str);

                $data_insert = array();
                foreach ($file as $key => $value) {
                                      
                   $data_insert[] = array('title' =>'','path' =>$value,'file_type' =>$file_type[$key],"file_size"=>$file_size[$key],"cat_id"=>$lesson->cat_id ,"course_id"=>$lesson->course_id,'lesson_id'=>$lesson->id,'create_date'=>time(),'updated_at'=>time() ); 
                }
                DB::table('tbl_lesson_doc')->insert($data_insert); // Query Builder

            }
            return Redirect::to('/admin/course/list-lesson/'.$cId);
       }

        $this->layout->meta_title='Add New Lesson';
        
        $this->layout->content = View::make('backend.course.add-lesson',$data);
    }


    function editLesson($id,Request $request) {
        $data = array();
        $category     = new Category;
        $all_category = $category->getCategories(); 
        $data['all_category'] = $all_category;
        $lesson        = Lesson::find($id);
        $data['lesson'] = $lesson;        

        $list_data_doc = DB::table('tbl_lesson_doc')     
        ->select('id','cat_id','course_id','lesson_id','title','path','file_type','file_size')
        ->orderBy('id', 'desc')
        ->where([
                ['lesson_id', '=', $id]
           ])
        ->get();

        $data['list_data_doc'] = $list_data_doc;

        $file_name_ ='';
        $file_size_ ='';
        $file_type_ ='';

        foreach ($list_data_doc as $key => $value) {
           if($value->path){
                $file_name_ .= $value->path.";";
                $file_size_ .= $value->file_size.";";
                $file_type_ .= $value->file_type.";";
            }
        }

        $data["file_name_"] = $file_name_;
        $data["file_size_"] = $file_size_;
        $data["file_type_"] = $file_type_;
        
        if($request->isMethod('post')){
            $data                      = $request->all();
            $lesson->id         = $data["id"];   
            $lesson->title      = $data["title"];      
            $lesson->cat_id     = $data["category"];
            $lesson->save(['timestamps' => false]);

            $file_str           = isset($data["file"]) ? $data["file"]: array();
            $file_type_str      = isset($data["file_type"]) ? $data["file_type"]: array();
            $file_size_str      = isset($data["file_size"]) ? $data["file_size"]: array();

            if($file_str){
                $file      = explode(";", $file_str);
                $file_type = explode(";", $file_type_str);
                $file_size = explode(";", $file_size_str);

                $data_insert = array();
                foreach ($file as $key => $value) {
                                      
                   $data_insert[] = array('title' =>'','path' =>$value,'file_type' =>$file_type[$key],"file_size"=>$file_size[$key],"cat_id"=>$lesson->cat_id ,"course_id"=>$lesson->course_id,'lesson_id'=>$lesson->id,'create_date'=>time(),'updated_at'=>time() ); 
                }
                LessonDoc::where('lesson_id', '=',$lesson->id )->delete();
                DB::table('tbl_lesson_doc')->insert($data_insert); // Query Builder

            }          
            
             return Redirect::to('/admin/course/list-lesson/'.$lesson["course_id"]);
       }

        $this->layout->meta_title='Edit Lesson'; 
        $this->layout->content = View::make('backend.course.edit-lesson',$data);
    }

    function deleteLessonById() {
        $id = $_GET['id'];
        if (isset($id)) {
            $course = Lesson::find($id);
            if ($course != null) {
               $course->delete();
            }
        }
    }

    function deleteAllLesson() {
        foreach ($_GET['data'] as $value) {
            if (isset($value)) {
                $e = Lesson::find($value);
                if ($e != null) {
                    $e->delete();
                }
            }
        }
    }

}
