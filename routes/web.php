<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('/',[AuthController::class,'create'])->name('signup');
Route::post('user/register',[AuthController::class,'update']);
Route::post('user/auth',[AuthController::class,'store']);
Route::post('logout',[AuthController::class,'destroy'])->name('logout');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

//......... Role.......//

Route::post('store',[RoleController::class,'store']);
Route::get('add_role',[RoleController::class,'index'])->name('add_role');
Route::get('delete/{id}',[RoleController::class,'destroy']);
Route::get('edit/{id}',[RoleController::class,'edit']);
Route::post('update/{id}',[RoleController::class,'update']);

//.......User.......//
Route::get('create_user',[UserController::class,'create'])->name('add_user');
Route::post('store',[UserController::class,'store']);
