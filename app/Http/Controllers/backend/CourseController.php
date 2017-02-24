<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\Http\Models\Category;
use App\Http\Models\Member;
use Illuminate\Support\Facades\View;
use App\Http\Models\Course;
use App\Http\Models\Lesson;
use App\Http\Models\Section;
use App\Http\Models\CourseBenefit;
use App\Http\Models\CourseRequirement;
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

            $benefit            = isset($data["benefit"])     ? $data["benefit"]: array();
            $requirement        = isset($data["requirement"]) ? $data["requirement"]: array();


            if($benefit){
                $data_insert = array();
                foreach ($benefit as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$value
                                        ,"course_id"=>$course->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                DB::table('tbl_course_benefit')->insert($data_insert); // Query Builder
            }
            if($requirement){
                $data_insert = array();
                foreach ($requirement as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$value
                                        ,"course_id"=>$course->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                DB::table('tbl_course_requirement')->insert($data_insert); // Query Builder
            }            

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

            if($benefit){
                $data_insert = array();
                foreach ($benefit as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$value
                                        ,"course_id"=>$course->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                CourseBenefit::where('course_id', '=',$course->id )->delete();
                DB::table('tbl_course_benefit')->insert($data_insert); // Query Builder
            }
            if($requirement){
                $data_insert = array();
                foreach ($requirement as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$value
                                        ,"course_id"=>$course->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                CourseRequirement::where('course_id', '=',$course->id )->delete();
                DB::table('tbl_course_requirement')->insert($data_insert); // Query Builder
            }              
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
 
        $this->layout->meta_title='Section List';
        $custom_link = array();

        
        $title = Input::get('title', '');
     
        $start_date = Input::get('start_date', '');
        $end_date   = Input::get('end_date', '');

        $course                 = Course::find($cId);

        $query = DB::table('tbl_section')
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
        $data['listCat']        = $listCat;
        $data['all_category']   = $all_category;
        $course                 = Course::find($cId);
        $data['course'] = $course;         

        if($request->isMethod('post')){
            $data                  = $request->all();
            $cat                   = explode("-",$data['category']);
            $section               = new Section(); 
            $section->title        = $data["title"];      
            $section->parent_cat_id    = $cat[0];  
            $section->cat_id           = $cat[1];
            $section->course_id    = $cId;
            $section->create_date  = time();
            $section->updated_at   = time();
            $section->save(['timestamps' => false]);

            
            $file_title         = isset($data["file_title"])   ? $data["file_title"]: array();
            $file_introtext     = isset($data["file_introtext"]) ? $data["file_introtext"]: array();
            $file_path          = isset($data["file_path"])    ? $data["file_path"]: array();
            $file_type          = isset($data["file_type"])    ? $data["file_type"]: array();
            $file_size          = isset($data["file_size"])    ? $data["file_size"]: array();
            $duration           = isset($data["duration"])    ? $data["duration"]: array();

            if($file_path){
                $data_insert = array();
                foreach ($file_path as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$file_title[$key]
                                        ,'introtext' =>$file_introtext[$key]
                                        ,'path' =>$value
                                        ,'file_type' =>$file_type[$key]
                                        ,"file_size"=>$file_size[$key]
                                        ,"duration"=>$duration[$key]
                                        ,"cat_id"=>$section->cat_id 
                                        ,"course_id"=>$section->course_id
                                        ,'section_id'=>$section->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                DB::table('tbl_lesson')->insert($data_insert); // Query Builder

            }
            return Redirect::to('/admin/course/list-lesson/'.$cId);
       }

        $this->layout->meta_title='Add New Section';
        
        $this->layout->content = View::make('backend.course.add-lesson',$data);
    }


    function editLesson($id,Request $request) {
        $data = array();
        $category     = new Category;
         /*get list category*/
        $all_category = Category::where('status', 1)->orderBy('parent_id','ASC')->orderBy('id','DESC')->get(); 
        $listCat      = array();
        foreach ($all_category as $cat) {
            if($cat->parent_id == 0) {
                $listCat[$cat->id]["title"] = $cat->title;
                $listCat[$cat->id]['data'] = array();
            } else {
                $listCat[$cat->parent_id]['data'][] = $cat;
            }
            
        }
        $data['all_category'] = $all_category;
        $data['listCat']      = $listCat;
        $section              = Section::find($id);
        $data['section']      = $section;        

        $list_data_doc = DB::table('tbl_lesson')     
        ->select('*')
        ->orderBy('id', 'asc')
        ->where([
                ['section_id', '=', $id]
           ])
        ->get();

        $data['list_data_doc'] = $list_data_doc;

  
        
        if($request->isMethod('post')){
            $data                = $request->all();
            $cat                 = explode("-",$data['category']);
            $section->id         = $data["id"];   
            $section->title      = $data["title"];      
            $section->parent_cat_id    = $cat[0];  
            $section->cat_id           = $cat[1];
            $section->save(['timestamps' => false]);

            $file_title         = isset($data["file_title"])   ? $data["file_title"]: array();
            $file_introtext     = isset($data["file_introtext"]) ? $data["file_introtext"]: array();
            $file_path          = isset($data["file_path"])    ? $data["file_path"]: array();
            $file_type          = isset($data["file_type"])    ? $data["file_type"]: array();
            $file_size          = isset($data["file_size"])    ? $data["file_size"]: array();
            $duration           = isset($data["duration"])    ? $data["duration"]: array();

            if($file_path){
                $data_insert = array();
                foreach ($file_path as $key => $value) {
                                      
                   $data_insert[] = array('title' =>$file_title[$key]
                                        ,'introtext' =>$file_introtext[$key]
                                        ,'path' =>$value
                                        ,'file_type' =>$file_type[$key]
                                        ,"file_size"=>$file_size[$key]
                                        ,"duration"=>$duration[$key]
                                        ,"cat_id"=>$section->cat_id 
                                        ,"course_id"=>$section->course_id
                                        ,'section_id'=>$section->id
                                        ,'create_date'=>time()
                                        ,'updated_at'=>time() 
                                        ); 
                }
                Lesson::where('section_id', '=',$section->id )->delete();
                DB::table('tbl_lesson')->insert($data_insert); // Query Builder

            }          
            
             return Redirect::to('/admin/course/list-lesson/'.$section["course_id"]);
       }

        $this->layout->meta_title='Edit Section'; 
        $this->layout->content = View::make('backend.course.edit-lesson',$data);
    }

    function deleteLessonById() {
        $id = $_GET['id'];
        if (isset($id)) {
            $course = Section::find($id);
            if ($course != null) {
               $course->delete();
            }
        }
    }

    function deleteAllSection() {
        foreach ($_GET['data'] as $value) {
            if (isset($value)) {
                $e = Section::find($value);
                if ($e != null) {
                    $e->delete();
                }
            }
        }
    }

}
