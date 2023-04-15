<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CowController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RoleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('home', function () {
  return view('dashboard');
});
*/

//Auth Routes
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'Login'])->name('login'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('registration', [AuthController::class, 'userRegistration'])->name('register'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Role Routes
Route::get('role',[RoleController::class, 'all']);
Route::get('role/add',[RoleController::class,'add']);

//User Routes
Route::get('users',[UserController::class,'all']);
Route::get('user/add',[UserController::class,'add']);

//Cow Routes
Route::get('cows',[CowController::class,'all']);
Route::get('cow/add',[CowController::class,'add']);
Route::post('cow/new',[CowController::class,'register'])->name('newcow');

//Produce Routes
Route::get('production',[ProductionController::class,'all']);
Route::get('production/add',[ProductionController::class, 'add']);