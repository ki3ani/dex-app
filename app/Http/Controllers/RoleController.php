<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function all(){
        return view('role.all');
    }

    public function add(){
        return view('role.add');
    }
}