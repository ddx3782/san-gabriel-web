<?php

use Illuminate\Support\Facades\Route;

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

Route::get('guide', 'GuestController@showGuide');
///////////////////////////////////////////////////////
//SUPER ADMIN CONTROLLER
Route::group(['middleware' => ['auth', 'super_admin_only']], function()
{
	Route::get('superadmin/' , 'SuperAdmin_Controller@showHome');
	Route::get('superadmin/logout/' , 'SuperAdmin_Controller@doLogout');
	Route::get('admins/' , 'SuperAdmin_Controller@showAdmins');
	Route::get('create/admin/' , 'SuperAdmin_Controller@showCreateAdmin');

	Route::post('save/admin' , 'SuperAdmin_Controller@doSaveAdmin');
});
//ADMIN ONLY
Route::group(['middleware' => ['auth' , 'admin_only']], function()
{
	Route::get('admin/' , 'AdminController@showHome');
	Route::get('admin/logout/' , 'AdminController@doLogout');
});
//GUESTCONTROLLER

Route::get('login' , 'GuestController@showLogin')->name('login');
Route::get('register' , 'GuestController@showRegister');
Route::get('verification/' , 'GuestController@showVerification');

Route::post('verify/' , 'GuestController@doVerify');
Route::post('register/user' , 'GuestController@doRegister');
//USERCONTROLLER
Route::get('/' , 'UserController@showHome');
Route::get('home' , 'UserController@showHome');
Route::get('logout' , 'UserController@doLogout');

Route::post('login' ,  'UserController@doLogin');
