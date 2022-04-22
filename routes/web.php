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
});
//GUESTCONTROLLER
Route::get('/' , 'GuestController@showLogin')->name('login');
Route::get('login' , 'GuestController@showLogin');
Route::get('register' , 'GuestController@showRegister');
Route::get('goto_email' , 'GuestController@gotoEmail');
Route::get('verify/email/{user_id}' , 'GuestController@doVerify');

Route::post('register/user' , 'GuestController@doRegister');
//USERCONTROLLER
Route::get('home' , 'UserController@showHome');
Route::get('logout' , 'UserController@doLogout');

Route::post('login' ,  'UserController@doLogin');
