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

    public function register(Request $request){
        
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'level' => 'required',
            
        ]);
       
        $data = $request->all();
        $check = $this->create($data);
        $cows=$data;
        return redirect ('role');    
    }

   private function create(array $data){
    return Cow::create([
        'name' => $data['name'],
        'description'=> $data['description'],
        'level'=>$data['level']
        ]);
   }
}