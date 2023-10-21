<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard(){
        $data = User::all();
        return view('Admin.admin_dashboard',compact('data'));
    }

    public function showUser(){
        $userTable = User::all();
        return view('Admin.user',compact('userTable'));
    }

    public function add(){
        return view('Admin.add');
    }

    public function insert(Request $request){
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role = 'manager';
        $user->save();

        return redirect('Admin.user')->back();
    }

    public function edit(){
        $userTable = User::all();
        return view('Admin.edit',compact('userTable'));
    }
}
