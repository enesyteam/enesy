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
Route::get('dang-nhap',[
	'as'	=>	'user.login',
	'uses'	=>	'UserController@login'
	]);

