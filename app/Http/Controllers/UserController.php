<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function all(){
        $Users = User::orderBy('created_at', 'asc')->paginate(20);
           
        return view('user.all',compact('Users'));
    }

    public function edit(){
        return view('user.add');
    }


}