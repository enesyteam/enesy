<?php
/**
 * Created by PhpStorm.
 * User: Dungtd
 * Date: 6/30/2016
 * Time: 10:00 AM
 */

namespace App\Http\Controllers\backend;

use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Config;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Utilities\Common;
class UserController extends Controller
{
    //get list admin
    public function getAllAdminUser(){

        // CACHE SORTING INPUTS
        $fieldSort = array ( 'username' , 'email' , 'full_name' );
        $sort = in_array(Input::get('sort') , $fieldSort) ? Input::get('sort') : 'id';
        $order = Input::get('order') === 'asc' ? 'asc' : 'desc';

        $adminUser = User::orderBy($sort, $order);

        // SEARCH
        $name = ( Input::get('name') != null ) ? Input::get('name') : '' ;
        $email = ( Input::get('email') != null ) ? Input::get('email') : '' ;
        $startdate = ( Input::get('startdate') != null ) ? Input::get('startdate') : '' ;
        $enddate = ( Input::get('enddate') != null ) ? Input::get('enddate') : '' ;

        $nameParam =null;
        $emailParam=null;
        $startdateParam = null;
        $enddateParam = null;

        // SEARCH USERNAME FULL NAME
        if ( Input::has('name') ){
            $adminUser = $adminUser->where( function ( $query ){
                $query->where( 'username' , 'like' ,'%'.Input::get('name').'%'  )
                    ->orWhere( 'full_name' , 'like' ,'%'.Input::get('name').'%'.')' );
            } );
            $nameParam = "&name=".Input::get('name');
        }
        //SEARCH EMAIL
        if ( Input::has('email') ){
            $adminUser = $adminUser->where( 'email' , 'like' ,'%'.Input::get('email').'%' );
            $emailParam = "&email=".Input::get('email');
        }
        //SEARCH START DATE
        if ( Input::has('startdate') ){
            $adminUser = $adminUser->where( 'create_date' , '>=' , Input::get('startdate') );
            $startdateParam = "&startdate=".Input::get('startdate');
        }
        //SEARCH END DATE
        if ( Input::has('enddate') ){
            $adminUser = $adminUser->where( 'create_date' , '<=' , Input::get('enddate') );
            $enddateParam = "&enddate=".Input::get('enddate');
        }

        //Filter
        $listAdmin = $adminUser->paginate(5);

        $pagination = $listAdmin->appends( array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'startdate' => Input::get('startdate'),
            'enddate' => Input::get('enddate '),
            'sort'      => Input::get('sort'),
            'order'     => Input::get('order')
        ))->links();
        return view('backend.user.list')->with( array(
            'name' => $name,
            'email' => $email,
            'startdate' => $startdate,
            'enddate' => $enddate,
            'listAdmin'       => $listAdmin,
            'sort'      => $sort,
            'order'     => $order,
            'pagination'    => $pagination,
            'url'      => '&order='.(Input::get('order') == 'asc' || null ? 'desc' : 'asc').$nameParam.$emailParam.$startdateParam.$enddateParam
        ));
    }

    //add admin type get
    /**
     * @return string
     */
    public function addUserAdmin()
    {
        $this->layout->meta_title = "Add Admin";

        $this->layout->content = View::make('backend.user.add',array('page' => ''));
    }

    public function insertAdmin( Request $request)
    {
        $validator = User::validatorCreate( $request->all());
        if ( $validator->fails() ){
            return Redirect::to('/admin/addUserAdmin')->withErrors($validator->errors())->withInput();
        }

        $data = new User($request->all());
        $data->password = bcrypt($request->input('password'));
        $data->create_date = date("Y-m-d H:i:s").time();
        $data->create_user = Auth::user()->username;
        $data->modify_date = date("Y-m-d H:i:s").time();
        $data->modify_user = Auth::user()->username;
        $data->active = 1;
        $data->save();
        return Redirect::to('/admin/adminManager');
    }

    /*
     * Edit user
     * */
    public function getEditUser( Request $request ){
        $this->layout->meta_title = "Edit User";
        $user = null;
        if ( Input::has ( 'id' ) ){
            $user = User::find( Input::get('id') );
        }else{
            return Redirect::to('/admin/adminManager');
        }
        $this->layout->content = View::make('backend.user.edit',array(
            'user' => $user
        ));
    }

    public function postEditUser( Request $request ){
        $validator = User::validatorEdit( $request->all());
        if ( $validator->fails() ){
            return Redirect::to('/admin/editUser?id='.$request->id)->withErrors($validator->errors())->withInput();
        }
        $foderYear = date('Y');
        $folderMonth = date('m');
        $folderDay = date('d');

        // CREATE FOLDER UPLOAD FILE
        $data = new User($request->all());
        
        if ( $request->file('avatar') != NULL ) {
            $pathFolderUpload = Config::get('params.folder_upload') . "/" . $foderYear . "/" . $folderMonth . "/" . $folderDay;
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            // MOVE FILE TO SERVER
            if (Common::createFolder($pathFolderUpload) !== false) {
                if ($file->isValid()) {
                    $file->move($pathFolderUpload, $fileName);
                }
            }
            $data->avatar = $foderYear."/".$folderMonth."/".$folderDay."/".$file->getClientOriginalName();
        }
        // UPDATE INFORMATION USER
        $data->modify_date = date("Y-m-d H:i:s").time();
        $data->modify_user = Auth::user()->username;

        User::where('id' , $request->input('id') )->update($data['attributes']);

        return Redirect::to('/admin/adminManager');
    }

    // DELETE USER
    public function getDeleteUser( Request $request ){
        if ( Input::has ( 'id' ) ){
            User::where('id' , $request->input('id') )->update(['active' => 0]);
        }
        return Redirect::to('/admin/adminManager');
    }

    // GET CHANGE PASS
    public function getChangePass(){
        $this->layout->meta_title = "Change Pass";
        $user = null;
        if ( Input::has ( 'id' ) ){
            $user = User::find( Input::get('id') );
        }else{
            return Redirect::to('/admin/adminManager');
        }
        $this->layout->content = View::make( 'backend.user.changePass' , array(
            'user' => $user
        ) );
    }

    // POST CHANGE PASS
    public function postChangePass( Request $request ){
        $validator = User::validatorChangePass( $request->all() );
        if ( $validator->fails() ){
            return Redirect::to('/admin/changePassUser?id='.$request->id)->withErrors($validator->errors())->withInput();
        }
        User::where('id' , $request->input('id') )->update( ['password' => bcrypt($request->password)] );
        return Redirect::to('/admin/adminManager');
    }

    // GET USER PROFILE
    public function getUserProfile(){
        $this->layout->meta_title = "User Profile ".Auth::user()->username;
        $user = null;
        if ( Input::has ( 'id' ) ){
            $user = User::find( Input::get('id') );
        }else{
            return Redirect::to('/admin/adminManager');
        }
        $this->layout->content = View::make( 'backend.user.profile' , array(
            'user' => $user
        ) );
    }

    // POST USER PROFILE
    public function postUserProfile( Request $request ){
        $validator = User::validatorEdit( $request->all());
        if ( $validator->fails() ){
            return Redirect::to('/admin/userProfile?id='.$request->id)->withErrors($validator->errors())->withInput();
        }
        $foderYear = date('Y');
        $folderMonth = date('m');
        $folderDay = date('d');

        $data = new User($request->all());

        if ( $request->file('avatar') != NULL ){
            // CREATE FOLDER UPLOAD FILE
            $pathFolderUpload = Config::get('params.folder_upload')."/".$foderYear."/".$folderMonth."/".$folderDay;
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            // MOVE FILE TO SERVER
            if(Common::createFolder($pathFolderUpload) !== false) {
                if ($file->isValid()){
                    $file->move($pathFolderUpload, $fileName);
                }
            }
            $data->avatar = $foderYear."/".$folderMonth."/".$folderDay."/".$file->getClientOriginalName();
        }
        // UPDATE INFORMATION USER

        $data->modify_date = date("Y-m-d H:i:s").time();
        $data->modify_user = Auth::user()->username;
        User::where('id' , $request->input('id') )->update($data['attributes']);

        return Redirect::to('/admin/adminManager');
    }

}