<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function all(){
        $roles = Role::orderBy('created_at', 'asc')->paginate(20);
        return view('role.all',compact('roles'));  
    }

    public function add(){
        return view('role.add');
    }

    public function register(Request $request){
        //dd($request);
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'level' => 'required',
            
        ]);
        $nextID;
        if(empty(Role::query()->orderByDesc('role_id')->first())){
            $nextID = 100;
        }else{
            $lastID = Role::query()->orderByDesc('role_id')->first();
            $nextID = ($lastID->role_id)+1;
        }
        $request->request->add(['role_id' => $nextID]);
        $data = $request->all();
        $check = $this->create($data);
        $cows = $data;
        return redirect ('roles');    
    }

   private function create(array $data){
    return Role::create([
        'role_id' => $data['role_id'],
        'name' => $data['name'],
        'description'=> $data['description'],
        'level'=>$data['level'],
        'assigned'=>0 //initialy no one will be assigned to the role. to be updated by administrator on registration
        ]);
   }
}