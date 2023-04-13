<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Production

class ProductionController extends Controller
{
    public function all(){
        return view('production.all');
    }

    public function add(){
        return view('production.add');
    }
}