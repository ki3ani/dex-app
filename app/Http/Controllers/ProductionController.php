<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
       $timeofday=(date('H'));
       $production_time;
       switch($timeofday){
        case $timeofday < 10:
            $production_time="Morning";
            break;
        case $timeofday>10 && $timeofday<15:
            $production_time="Mid Day";
            break;
        case $timeofday>15:
            $production_time="Evening";
            break;
       }
        $cows=DB::select('select tag,name from Cow WHERE currentState="Active Production" AND NOT EXISTS ( Select Tag from Production where production_date="'.date('Y-m-d').'" AND production_period="'.$production_time.'" AND Cow.tag=Production.tag )');
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