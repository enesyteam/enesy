<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\Http\Models\Category;
use App\Http\Requests;
use Config;
use DB;
use Helper;


class CategoryController extends Controller
{
	//
   

    //
    function __construct() {
    	
    }

    
    function getAllCategory() {        
          
        $title = '';
        
        $start_date = '';
        $end_date = '';
        $status = '';
        
        if (Input::has('title')) {
            $title = Input::get('title', '');
        }
        if (Input::has('createDate')) {
            $start_date = Input::get('createDate', '');
        }
        if (Input::has('endCreateDate')) {
            $end_date = Input::get('endCreateDate', '');
        }
        if (Input::has('status')) {
            $status = Input::get('status', '3');
        }
        $all_category = Category::title($title)
                                ->createDate(CategoryController::getDateToNumber($start_date), CategoryController::getDateToNumber($end_date))
                                ->status($status)
                                ->orderBy('id', 'DESC')
                                ->paginate(Config::get('params.row_page'));
        $data = array(
            'all_category' => $all_category,
          
            'title' => $title,
            'create_date' => $start_date,
            'end_create_date' => $end_date,
            'status' => $status);
        $custom_link_render = array();
        if (!empty(trim(Input::get('search')))) {
             $custom_link_render['search'] = true;
        }      
        
        if (!empty(trim($title))) {
            $custom_link_render['title'] = $title;
        }
         if (!empty(trim($start_date))) {
            $custom_link_render['createDate'] = $start_date;
        }
         if (!empty(trim($end_date))) {
            $custom_link_render['endCreateDate'] = $end_date;
        }
         if (!empty(trim($status))) {
            $custom_link_render['status'] = $status;
        }
        $all_category->appends($custom_link_render);

        //for Add category
        $query  = DB::table('tbl_categories')
        ->orderBy('id', 'desc')
        ->select('id','title');  
        $query   = $query->where('parent_id', '=', 0);
        $parents = $query->get();

    	return view('backend.category.list', $data)->withParents($parents);
    }

    function add() {

        $query  = DB::table('tbl_categories')
        ->orderBy('id', 'desc')
        ->select('id','title');  
        $query   = $query->where('parent_id', '=', 0);
        $parents = $query->get();
    	
    	return view('backend.category.add', array('parents' => $parents));
        return \Redirect::route('allCategory');
    }

    function executeAdd(Request $req) {
    	$v = CategoryController::checkValidate($req);
        if ($v->fails()) {
            return \Redirect::back()->withInput($req->all())->withErrors($v);
        }
    	$cate = new Category;    	
    	
    	$cate->title     = $req->title;
        $cate->alias     = Helper::generateSlug($req->title);   
        $cate->parent_id = $req->parent_id;
    	$cate->description = $req->description;
    	$date = date('Y').date('m').date('d');	
    	$cate->create_date = $date;
    	if (isset($req->status)) {
    		$cate->status = $req->status;
    	} 
    
        $user = \Auth::user();
        $cate->create_user = $user->email;
    	
    	$img_url = CategoryController::getImageUrl($req);
        if (!is_null($img_url)) {
            $cate->picture = $img_url;
        } else {
           $cate->picture = ''; 
        }       
    	$cate->save();
    	
    	//return \Redirect::route('addCategory')->with('status', 'successed');
        return \Redirect::route('allCategory')->with('status', 'successed');
    }

    function edit($id) {

    	$cate = Category::find($id);    	

    	if ($cate != null) {
            $query  = DB::table('tbl_categories')
            ->orderBy('id', 'desc')
            ->select('id','title');  
            $query   = $query->where('parent_id', '=', 0);
            $parents = $query->get();    	
        	return view('backend.category.edit', array('category'=>$cate,'parents'=>$parents));
        }
    	return \Redirect::route('allCategory');
    }

     function executeEdit(Request $req) {        
         
        if (!CategoryController::checkValidate($req)) {
            return \Redirect::back();
        }        
        $id = $req->id;
    	$cate = Category::find($id);
    	
    	$cate->title = $req->title;
        $cate->alias     = Helper::generateSlug($req->title);   
    	$cate->description = $req->description;
    	$date = date('Y').date('m').date('d');	
    	$cate->create_date = $date;
    	if (isset($req->status)) {
    		$cate->status = $req->status;
    	} else {
    		$cate->status = 0;
    	}	
    	
    	
    	
    	$img_url = CategoryController::getImageUrl($req);
        if (!is_null($img_url)) {
            $cate->picture = $img_url;
        }       
    	$cate->save();

    	return \Redirect::route('allCategory');    	
    }

     function delete($id) {

    	$cate = Category::find($id);
    	$all_category = Category::get(array('id', 'parent_id', 'title'));   
    	if ($cate != null) {
    		$cate2 = Category::find($cate->parent_id);
    		
    		return view('backend.category.delete', array('category'=>$cate, 'parents'=>$all_category));
    	}
    	return \Redirect::route('allCategory');
    }

     function executeDelete($id) {
        
    	$cate = Category::find($id);    
        if ($cate != null) {
            Category::where('parent_id', '=', $id)->delete();
          $cate->delete();
        }	
    	return \Redirect::route('allCategory');    	
    }

    
   
    
    function updateCategory () {
    	$id  = $_GET['id'];
    	$cate = Category::find($id);
    	if ($cate != null) {
    		if ($cate->status == 1) {
    			$cate->status = 0;
    		} else {
    			$cate->status = 1;
    		}
    		$cate->save();
    	}
      return response()->json(array('status'=> "updated", 'id'=> $id));
    }


    function getDate($date) {
    	return ['day' => date('d', strtotime($date)), 'month' => date('m', strtotime($date)), 'year' => date('Y', strtotime($date))];
    }

    function deleteAllCheck() {
  
        foreach ($_GET['data'] as $key => $value) {
            $cate = Category::find($value);
           if ($cate != null) {
            $cate->delete();
            $id = $value;
           }
        }
        return response()->json(array('status'=> "deleted"));
    }


     function getDateToNumber($date) {
        if (isset($date) && !empty($date)) {
            $a = date('Y', strtotime($date)).date('m', strtotime($date)).date('d', strtotime($date));
            return $a;
        }
        return '';
    }


    function checkValidate(Request $Request) {

        $rules = [  'title' => 'required|max:255|regex:/^\w[-$#@]*/',];
        $errors = ['title.required' => 'Field is required',
                    'title.max' => 'Max length 255',
                    ];
        $v = \Validator::make($Request->all(), $rules, $errors);

        return $v;
    }

   
    

    function getImageUrl (Request $req) {

        if (!empty($_FILES['mediaFile']['name'])) {
                $image_name = $req->file('mediaFile')->getClientOriginalName();
                $req->file('mediaFile')->getClientOriginalExtension();
                $year = date('Y');
                $month = date('m');
                $day = date('d');
                $image_folder = Config::get('params.folder_upload').'/'.$year.'/'.$month.'/'.$day.'/';
                $url_image = Config::get('params.url_upload').'/'.$year.'/'.$month.'/'.$day.'/'.$image_name;
                if (!file_exists($url_image)) {
                    $req->file('mediaFile')->move(
                    $image_folder, $image_name);
                }       
                return '/'.$year.'/'.$month.'/'.$day.'/'.$image_name;                  
        }
        return null;
    }
   
 

}
