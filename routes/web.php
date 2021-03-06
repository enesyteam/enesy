<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin','middleware' => 'guest'], function () {
	
    Route::get('/login', 'backend\LoginController@getLogin');
    Route::post('/postLogin' ,[
    	'as'	=>	'admin.login',
    	'uses'	=>	'backend\LoginController@postLogin'
    	]);

});

Route::group(array('namespace' => 'backend', 'prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::get('/logout' , 'LoginController@getLogout');
    Route::get('/' ,[
    	'as'	=>	'home.admin',
		'uses'  =>	'HomeController@index']);

    //List User
    Route::get('/adminManager',[
    	'as'	=>	'admin.list-admin',
   	 	'uses'		=>	'UserController@getAllAdminUser']);
    Route::post('/getListAdmin','UserController@getListAdmin');


    Route::get('/addUserAdmin',[
    	'as'	=>	'admin.add',
    	'uses'		=>	'UserController@addUserAdmin']);
    Route::post('/insertAdmin',[
    	'as'	=>	'excuteAddNewAdmin',
    	'uses'	=>	'UserController@insertAdmin']);

    Route::post('ajax/changeStatus','UserAjaxController@changeStatusActive');

    Route::get('/editUser' , 'UserController@getEditUser');
    Route::post('/postEditUser' , 'UserController@postEditUser');

    Route::get('/deleteUser' , 'UserController@getDeleteUser');

    Route::get('/changePassUser' , 'UserController@getChangePass');

    Route::post('/postChangePass' , 'UserController@postChangePass');

    Route::get('/userProfile' , 'UserController@getUserProfile');

    Route::post('/postUserProfile' , 'UserController@postUserProfile');
   


    // Category
  
    Route::get('/category/all',['as' => 'allCategory', 'uses' => 'CategoryController@getAllCategory']); 
      
    Route::get('/category/add', ['as' => 'addCategory', 'uses' => 'CategoryController@add']);

    Route::post('/category/add/execute', ['as' => 'executeAddCategory', 'uses' => 'CategoryController@executeAdd']);

    Route::get('/category/edit/{id}',[ 'as' => 'editCategory', 'uses' => 'CategoryController@edit']);

    Route::post('/category/edit/{id}/execute', [ 'as' => 'executeEditCategory','uses' => 'CategoryController@executeEdit']);

    Route::get('/category/delete/{id}',[ 'as' => 'deleteCategory','uses' => 'CategoryController@delete']);
      
    Route::post('/category/delete/{id}/execute', [ 'as' => 'executeDeleteCategory','uses' => 'CategoryController@executeDelete']);

    Route::get('/category/update', ['as' => 'updateCategory','uses' => 'CategoryController@updateCategory']);

    Route::get('/category/delete/all/execute', ['as' => 'deleteAllCategory', 'uses' => 'CategoryController@deleteAllCheck']);  

     
    // member
    Route::get('/member', ['as' => 'memberIndex', 'uses' => 'MemberController@index']);

    //cong
    Route::post('/member/add/execute', ['as' => 'executeAddMember', 'uses' => 'MemberController@executeAdd']);

    Route::get('/member/delete', ['as' => 'memberDeleteById', 'uses' => 'MemberController@deleteById']);

    Route::get('/member/delete/all', ['as' => 'memberDeleteAllCheck', 'uses' => 'MemberController@deleteAllCheck']);

    Route::get('/member/active', ['as' => 'memberChageActive', 'uses' => 'MemberController@changeActive']);

    Route::get('/member/edit', [ 'as' => 'memberEdit', 'uses' => 'MemberController@edit']);
    Route::post('/member/postEdit', [ 'as' => 'postEditMember', 'uses' => 'MemberController@postEdit']);
    Route::get('/member/changeIsTeacher', ['as' => 'changeIsTeacher','uses' => 'MemberController@changeIsTeacher']);


    // Course
    Route::get('/course' ,[ 'as' => 'course', 'uses' => 'CourseController@index']);
    Route::match(['get', 'post'],'/course/add' ,  [ 'as' => 'course/add', 'uses' => 'CourseController@add']);
    Route::match(['get', 'post'],'/course/edit/{id}', [ 'as' => 'course/edit','uses' => 'CourseController@edit']);
    Route::get('/course/delete', ['as' => '/course/delete', 'uses' => 'CourseController@deleteById']);
    Route::get('/course/deleteAll', ['as' => '/course/deleteAll', 'uses' => 'CourseController@deleteAll']);    

    Route::match(['get'],'/course/list-lesson/{eId}', [ 'as' => 'course/list-lesson','uses' => 'CourseController@listLesson']);
    Route::match(['get', 'post'],'/course/create-lesson/{eId}', [ 'as' => 'course/create-lesson','uses' => 'CourseController@createLesson']);
    Route::match(['get', 'post'],'/course/edit-lesson/{id}', [ 'as' => 'course/edit-lesson','uses' => 'CourseController@editLesson']);
    Route::get('/course/deleteLesson', ['as' => '/course/deleteLesson', 'uses' => 'CourseController@deleteLessonById']);
    Route::get('/course/deleteAllLesson', ['as' => '/course/deleteAllLesson', 'uses' => 'CourseController@deleteAllLesson']);   

    // end course
});



Route::group(array('namespace' => 'frontend'), function () {

    Route::get('refresh/captcha' , 'UserController@refreshCaptcha');

	Route::get('/', [
		'as'	=>	'home',
		'uses'	=>	'PagesController@index'
		]);
// test
	Route::get('/1', [
		'as'	=>	'newhome',
		'uses'	=>	'PagesController@newhome'
		]);

	/*Courses*/
	Route::get('khoa-hoc',[
		'as' 	=>	'courses.index',
		'uses'	=>	'CourseController@index'
		]);
	//demo
	Route::get('khoa-hoc/grid-view',[
		'as' 	=>	'home.gridview',
		'uses'	=>	'PagesController@indexByGrid'
		]);
	//demo
	Route::get('khoa-hoc/{alias}/{id}',[
		'as' 	=>	'course.detail',
		'uses'	=>	'CourseController@detail'
		]);
	Route::get('xem',[
		'as' 	=>	'course.view',
		'uses'	=>	'CourseController@view'
		]);
	Route::get('xem-truoc-khoa-hoc/{id}',[
		'as' 	=>	'course.preview',
		'uses'	=>	'CourseController@preview'
		]);
	Route::get('khoa-hoc/ket-qua-tim-kiem',[
		'as' 	=>	'course.search_result',
	'uses'	=>	'CourseController@search_result'
		]);
	Route::get('chu-de/{alias}/{id}',[
		'as' 	=>	'course.listByCat',
		'uses'	=>	'CourseController@listByCategory'
		]);

	/*share*/
	Route::get('chia-se',[
		'as'	=>	'course.share',
		'uses'	=>	'CourseController@share'
		]);

	/*Help*/
	Route::get('tro-giup-hoc-vien',[
		'as'	=>	'help.enrollers',
		'uses'	=>	'HelpController@enrollers'
		]);
	Route::get('tro-giup-giang-vien',[
		'as'	=>	'help.authors',
		'uses'	=>	'HelpController@authors'
		]);

	/*User*/
	Route::get('doLogin',[
		'as'	=>	'user.login',
		'uses'	=>	'UserController@login'
		]);

	Route::get('doLogout',[
		'as'	=>	'user.logout',
		'uses'	=>	'UserController@doLogout'
		]);

	Route::post('doLogin',[
		'as'	=>	'user.login',
		'uses'	=>	'UserController@doLogin'
		]);

	Route::get('dang-ky',[
		'as'	=>	'user.register',
		'uses'	=>	'UserController@register'
		]);

	Route::post('doRegister',[
		'as'	=>	'user.doregister',
		'uses'	=>	'UserController@doRegister'
		]);

	/*Author*/
	Route::get('giang-vien',[
		'as'	=>	'user.author',
		'uses'	=>	'UserController@author'
		]);
	Route::get('giang-vien/hoc-vien',[
		'as'	=>	'user.author_enrollers',
		'uses'	=>	'UserController@author_enrollers'
		]);
	Route::get('giang-vien/hoc-vien/list-view',[
		'as'	=>	'user.author_enrollers_list',
		'uses'	=>	'UserController@author_enrollers_list'
		]);
	Route::get('giang-vien/khoa-hoc',[
		'as'	=>	'user.author_courses',
		'uses'	=>	'UserController@author_courses'
		]);
	Route::get('giang-vien/khoa-hoc/tao-khoa-hoc',[
		'as'	=>	'user.author_courses_create',
		'uses'	=>	'UserController@author_courses_create'
		]);

	//Profile giảng viên
	Route::get('lecturers/profile',[
		'as'	=>	'user.author_public_profile',
		'uses'	=>	'UserController@profileLecturers'
		]);
	Route::post('lecturers/doUpdateProfile',[
		'as'	=>	'user.author_public_profile_post',
		'uses'	=>	'UserController@doUpdateProfile'
		]);


	Route::get('lecturers/account',[
		'as'	=>	'user.author_account',
		'uses'	=>	'UserController@author_account'
		]);

	Route::post('lecturers/doChangePass',[
		'as'	=>	'user.author_account_post',
		'uses'	=>	'UserController@doChangePass'
		]);

	Route::get('giang-vien/tai-khoan/email',[
		'as'	=>	'user.author_email',
		'uses'	=>	'UserController@author_email'
		]);
	Route::get('giang-vien/thanh-toan',[
		'as'	=>	'user.author_bill',
		'uses'	=>	'UserController@author_bill'
		]);
	Route::get('giang-vien/thong-bao',[
		'as'	=>	'user.author_notifications',
		'uses'	=>	'UserController@author_notifications'
		]);
	// cong test
	Route::get('giang-vien/course/add/section/{s}',[
		'as'	=>	'author.add_section',
		function($s) {
    	return  View::make('frontend.course.create.section',['s'=>$s])->render();
		}]);
	// /cong test

	/*about*/
	Route::get('gioi-thieu-enesy',[
		'as'	=>	'home.about',
		'uses'	=>	'PagesController@about'
		]);
	/*Become Instructor*/
	Route::get('hop-tac-giang-day',[
		'as'	=>	'home.become_instructor',
		'uses'	=>	'PagesController@become_instructor'
		]);
	/*terms of use*/
	Route::get('dieu-khoan-su-dung',[
		'as'	=>	'home.terms',
		'uses'	=>	'PagesController@terms'
		]);
	/*Privacy policy*/
	Route::get('chinh-sach-bao-mat',[
		'as'	=>	'home.privacy_policy',
		'uses'	=>	'PagesController@privacy_policy'
		]);
	/*Error page*/
	Route::get('error',[
		'as'	=>	'error',
		'uses'	=>	'PagesController@error'
		]);
	});
	




