<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use Validator;
use Auth;

class GuestController extends Controller
{
    //SHOW'S
    public function showGuide()
    {
        return view('guide');
    }
    public function showLogin()
    {
        // bawal pumunta sa login form kapag meron nang nkalogin na user
        if (Auth::check()) {
            // kapag ang nkalog in ay user puntang frontend home
            if (Auth::user()->role == 'user') {
                // code...
                return redirect('home');
            }
             // kapag ang nkalog in ay superadmin puntang backend home
            if (Auth::user()->role == 'superadmin') {
                // code...
                return redirect('superadmin/');
            }
            
        }
        else
        {
            return view('auth.login');
        }
    }
    public function showRegister()
    {
        // bawal pumunta sa register form kapag meron nang nkalogin na user
        if (Auth::check()) {
             // kapag ang nkalog in ay user puntang frontend home
            if (Auth::user()->role == 'user') {
                // code...
                return redirect('home');
            }
             // kapag ang nkalog in ay superadmin puntang backend home
            if (Auth::user()->role == 'superadmin') {
                // code...
                return redirect('superadmin/');
            }
        }
        else
        {
         return view('auth.register');   
        }
        
    }
    public function doverify(Request $request , $user_id)
    {
        $user_data = User::find($user_id);

        $user_data->status = 1;
        $user_data->email_verified_at = date('Y-m-d');
        $user_data->save();

        $request->session()->flash('success' , 'Your email has been verified! You can now login');
        return redirect('login');
    }
    public function gotoEmail()
    {
        return view('email.goto_email');
    }

////DO'S/////////////////////////////////////////////////////////////////////////

    public function doRegister(Request $request)
    {
        $rules = ['firstname' => 'required',
                    'middlename' => 'required',
                    'lastname' => 'required', 
                    'phone_number' => 'required|unique:users',
                    'email' => 'required|unique:users',
                    'password' => 'required',
                    'confirm_password' => 'required|same:password'];
        $validator = Validator::make($request->all() , $rules);
        if ($validator->fails()) {
            // code...
            return back()->withErrors($validator);
        }
        else
        {

            $user_data = $request->all();
            $user_data['status'] = 0;
            $user_data['role'] = 'user';
            $user_data['password'] = bcrypt($request->password);
            User::create($user_data);
            // $request->session()->flash('success' , 'User successfully registered!');
            // return redirect('login');


            $user_number = User::where('phone_number', $request->phone_number)->first();
            $user_email = $user_number->email;
            Mail::send('email.message', ['user' => $user_number] , function($message) use($user_email)
            {
                $message->from('Brgy.SanGabriel.Laguna@test.com');
                $message->to($user_email);
                $message->subject('Email Verification');

            });
            return redirect('goto_email');

        }
    }
}
