<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cow;

class CowController extends Controller
{
    public function all(){
        //get all the cows
        $cows = Cow::orderBy('created_at', 'asc')->paginate(20);
        return view('cow.all',compact('cows'));    
    }

    public function add(){
        return view('cow.add');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'dob'=>'required',
            'gender' => 'required',
            'breed'=>'required',
            'parent_tag'=>'required',
            'currentState'=>'required',
            
            
        ]);
      $nextID;
        if(empty(Cow::query()->orderByDesc('tag')->first())){
            $lastID = 9999;
            $nextID = $lastID;
                }else{
            $lastID = Cow::query()->orderByDesc('tag')->first();
            $nextID = ($lastID->tag)+1;
        }
        
        $request->request->add(['tag' => $nextID]);
        $data = $request->all();
        $check = $this->create($data);
        $cows=$data;
        return redirect ('cows');    
    }

   private function create(array $data){
    return Cow::create([
        'name' => $data['name'],
        'tag'=> $data['tag'],
        'dob'=>$data['dob'],
        'gender'=>$data['gender'],
        'breed' => $data['breed'],
        ]);
   }
   public function delete($id){
       Cow::find($id)->delete();
       return redirect('cows');
   }


}