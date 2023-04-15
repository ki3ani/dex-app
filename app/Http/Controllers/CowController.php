<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cow;

class CowController extends Controller
{
    public function all(){
        //get all the cows
        $cows = Cow::all();
        return view('cow.all');
    }

    public function add(){
        return view('cow.add');
    }
    public function register(Request $request){
        dd($request);
        return view('cow.all');
    }


   public function delete($id){
       Cow::find($id)->delete();
       return redirect('cows');
   }


}