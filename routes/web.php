<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('home', function () {
    return view('dashboard');
});

//Auth Routes
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'Login'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Role Routes
//Route::get('roles','RoleController@all');
//Route::get('role/add','RoleController@add');

//Route::get('Role',[RoleController::class, 'Role']);
Route::get('Role/add','app/Http/Controllers/RoleController@add');




//User Routes
Route::get('users','UserController@all');
Route::get('user/add','app/Http/Controllers/UserController@add');

//Cow Routes
Route::get('cows','CowController@all');
Route::get('cow/add','app/Http/Controllers/CowController@add');

//Produce Routes
Route::get('produce','ProduceController@all');
Route::get('produce/add','app/Http/Controllers/ProduceController@add');