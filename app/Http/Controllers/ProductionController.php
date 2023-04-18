<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\User;
use App\Models\Cow;
use Illuminate\Support\Str;

class ProductionController extends Controller
{
    public function all(){
        
        return view('production.all');
    }

    public function add(){
        $cows=Cow::where('currentState', 'Active Production')->get();

        return view('production.add',compact('cows'));
    }
    public function register(Request $request){
       

        $request->validate([
            'tag'=>'required',
            'production_date'=>'required',
            'production_period'=>'required',
            'amount'=>'required',
            'user_id'=>'required'       
        ]);
        $request->request->add(['production_id'=>Str::random(12)]);

        
        $data = $request->all();
        
        $check = $this->create($data);
        $cows=$data;
        return redirect ('production');    
    }

   private function create(array $data){
        $date = str_replace('/', '-', $data['production_date']);
        $newDate = date("Y-m-d", strtotime($date));
        $data['production_date']=$newDate;
    
        return Production::create([
            'production_id' => $data['production_id'],
            'tag'=> $data['tag'],
            'production_date'=>$data['production_date'],
            'production_period'=>$data['production_period'],
            'amount' => $data['amount'],
            'user_id'=>$data['user_id']
        ]);
   }
}