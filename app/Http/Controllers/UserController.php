<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard(){
        return view('User.user_dashboard');
    }
}
