<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{
    public function showHome()
    {
        
            return view('frontend.home');

    }

    //DO"S//////////////////////////////////////////////////////////////////////////
    public function doLogin(Request $request)
    {
        //FOR USER'S
        if (Auth::attempt(['status' => 1 , 'role' => 'user' , 'email' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'You have successfully logged in!');
            return redirect('home');
        }
        if (Auth::attempt(['status' => 1 , 'role' => 'user' , 'phone_number' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'You have successfully logged in!');
            return redirect('home');
        }
// FOR SUPERADMIN
        if (Auth::attempt(['status' => 1 , 'role' => 'superadmin' , 'email' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'Welcome back Super Admin');
            return redirect('superadmin/');
        }
        if (Auth::attempt(['status' => 1 , 'role' => 'superadmin' , 'phone_number' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'Welcome back Super Admin');
            return redirect('superadmin/');
        }
//FOR ADMIN'S
        if (Auth::attempt(['status' => 1 , 'role' => 'admin' , 'email' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'You have successfully logged in!');
            return redirect('admin/');
        }
        if (Auth::attempt(['status' => 1 , 'role' => 'admin' , 'phone_number' => $request->email_phone , 'password' => $request->password])) {
            // code...
            // puntang home
            $request->session()->flash('success' , 'You have successfully logged in!');
            return redirect('admin/');
        }


        else
        {
            $rules = ['email_phone' => 'required|same:users',
                        'password' => 'required|same:users'];
            $validator = Validator::make($request->all() , $rules);
            $validator->fails();
            return back()->withErrors($validator);
        }
    }
    public function doLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
