<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function all(){
        return view('roles.all');
    }

    public function add(){
        return view('roles.add');
    }
}