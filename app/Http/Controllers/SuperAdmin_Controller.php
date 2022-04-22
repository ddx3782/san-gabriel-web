<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SuperAdmin_Controller extends Controller
{
    //
    public function showHome()
    {
        return view('backend.home');
    }
    //DO'S
    public function doLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
