<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //
    public function showHome()
    {
        return view('backend.admin.home');
    }
    //
    public function doLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
