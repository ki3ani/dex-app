<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CowController extends Controller
{
    public function all(){
        //get all the cows
        $cows = Cow::all();
        return view('cows.all');
    }

    public function add(){
        return view('cows.add');
    }



   public function delete($id){
       Cow::find($id)->delete();
       return redirect('cows');
   }


}