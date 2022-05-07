<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Mail;

class SuperAdmin_Controller extends Controller
{
    //SHOW'S
    public function showHome()
    {
        $admin_data = User::where('role' , 'admin')->get();

        return view('backend.superadmin.home' , compact('admin_data'));
    }
    public function showAdmins()
    {
        $admin_data = User::where('role', 'admin')->get();

        return view('backend.superadmin.admins', compact('admin_data'));
    }
    public function showCreateAdmin()
    {
        return view('backend.superadmin.create_admin');
    }
    //DO'S
    public function doLogout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function doSaveAdmin(Request $request)
    {
        $rules = ['firstname' => 'required' ,
                    'middlename' => 'required' ,
                    'lastname' => 'required' ,
                    'phone_number' => 'required|unique:users' ,
                    'email' => 'required|unique:users' ,
                    'password' => 'required' ,
                    'confirm_password' => 'required|same:password' ,];
        $validator = Validator::make($request->all() , $rules);
        if ($validator->fails()) {
            // code...
            return back()->withErrors($validator);
        }
        else
        {
            $admin_data = $request->all();
            $admin_data['status'] = 0;
            $admin_data['role'] = 'admin';
            $admin_data['password'] = bcrypt($request->password);
            User::create($admin_data);

            $admin_number = User::where('phone_number', $request->phone_number)->first();
            $admin_email = $admin_number->email;
            // mail para sa admin
            Mail::send('email.message_admin', ['user' => $admin_number], function($message) use($admin_email)
            {
                $message->from('brgy.sangabriellaguna@test.com');
                $message->to($admin_email);
                $message->subject('Email Verification');
            });
            $request->session()->flash('success' , 'Please advise that the new admin needs to verify his/her email to proceed');
            return redirect('admins/');

        }
    }
}
