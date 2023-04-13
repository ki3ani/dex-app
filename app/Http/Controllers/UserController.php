<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function all(){
        return view('user.all');
    }

    public function add(){
        return view('user.add');
    }


}