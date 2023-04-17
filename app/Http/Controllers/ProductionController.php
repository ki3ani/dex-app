<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\User;
use App\Models\Cow;

class ProductionController extends Controller
{
    public function all(){
        $cows=Cow::where('currentState', 'Active Production')->get();
        
        return view('production.all',compact('cows'));
    }

    public function add(){
        return view('production.add');
    }
    public function register(Request $request){

        $request->validate([
            'production_id'=>Str::random(12),
            'cow_id'=>'required',
            'production_date'=>'required',
            'production_period'=>'required',
            'amount'=>'required',
            'user_id'=>'required'       
        ]);

       
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
}