<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Cow;
use App\Models\Production;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function userRegistration(Request $request)
    {  

       // dd($request);
        $request->validate([
            'name' => 'required',
            'national_id'=>'required|unique:User',
            'dob'=>'required',
            'email' => 'required|email|unique:User',
            'phone'=>'required|min:10|max:11',
            'password' => 'required|min:8'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'national_id'=> $data['national_id'],
        'dob'=>$data['dob'],
        'phone'=>$data['phone'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        $timeofday=(date('H'));
       $production_time;
       switch($timeofday){
        case $timeofday < 10:
            $production_time="Morning";
            break;
        case $timeofday>=10 && $timeofday<15:
            $production_time="Mid Day";
            break;
        case $timeofday>=15:
            $production_time="Evening";
            break;
       }
        
        if(Auth::check()){
           $production=DB::select('Select sum(amount) as sum from Production where production_date="'.date('Y-m-d').'" AND production_period="'.$production_time.'"');
           $daysproduction = DB::select('Select sum(amount) as sum from Production where production_date="'.date('Y-m-d').'"');
           $herd=Cow::all()->count();
           $users=User::all()->count();
           $productionlist=Production::all();
           dd($productionlist['production_date']->values());
            return view('dashboard',compact('production','daysproduction','production_time','herd','users'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
