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
    Route::post('/postLogin' , 'backend\LoginController@postLogin');

});

Route::group(array('namespace' => 'backend', 'prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::get('/logout' , 'LoginController@getLogout');
    Route::get('/' , 'HomeController@index');

    //List User
    Route::get('/adminManager','UserController@getAllAdminUser');
    Route::post('/getListAdmin','UserController@getListAdmin');


    Route::get('/addUserAdmin','UserController@addUserAdmin');
    Route::post('/insertAdmin','UserController@insertAdmin');

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

    Route::get('/member/delete', ['as' => 'memberDeleteById', 'uses' => 'MemberController@deleteById']);

    Route::get('/member/delete/all', ['as' => 'memberDeleteAllCheck', 'uses' => 'MemberController@deleteAllCheck']);

    Route::get('/member/active', ['as' => 'memberChageActive', 'uses' => 'MemberController@changeActive']);

    Route::get('/member/edit', [ 'as' => 'memberEdit', 'uses' => 'MemberController@edit']);
    Route::post('/member/postEdit', [ 'as' => 'postEditMember', 'uses' => 'MemberController@postEdit']);


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

Route::group(array('namespace' => 'frontend' , 'middleware' => 'web|auth'), function () {

});

Route::group(array('namespace' => 'frontend' , 'middleware' => 'frontend.auth'), function () {
	Route::get('/', [
		'as'	=>	'home',
		'uses'	=>	'PagesController@index'
		]);

	/*Courses*/
	Route::get('khoa-hoc',[
		'as' 	=>	'courses.index',
		'uses'	=>	'CourseController@index'
		]);
	Route::get('chi-tiet-khoa-hoc',[
		'as' 	=>	'course.detail',
		'uses'	=>	'CourseController@detail'
		]);
	Route::get('xem',[
		'as' 	=>	'course.view',
		'uses'	=>	'CourseController@view'
		]);
	Route::get('xem-truoc-khoa-hoc',[
		'as' 	=>	'course.preview',
		'uses'	=>	'CourseController@preview'
		]);
	Route::get('danh-muc/{id}',[
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
	Route::get('giang-vien/khoa-hoc',[
		'as'	=>	'user.author_courses',
		'uses'	=>	'UserController@author_courses'
		]);
	Route::get('giang-vien/khoa-hoc/tao-khoa-hoc',[
		'as'	=>	'user.author_courses_create',
		'uses'	=>	'UserController@author_courses_create'
		]);

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
	});
	




