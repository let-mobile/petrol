<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

//---------------------signup/login------------------------
Route::group(['prefix' => 'auth'], function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    Route::post('user/auth',[AuthController::class,'store']);
});
    Route::post('logout',[AuthController::class,'destroy'])->name('logout');

    Route::get('/',[AuthController::class,'create'])->name('signup');
    Route::post('user/register',[AuthController::class,'update']);
//---------------------password-reset----------------------

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

//......... Role.......//
Route::resource('roles',App\Http\Controllers\RoleController::class);

//.......User.......//
Route::resource('users',App\Http\Controllers\UserController::class);

//.......Unit.......//\


Route::resource('units',App\Http\Controllers\UnitController::class);




// Route::get('units',[UnitController::class,'create'])->name('units');

// Route::get('all-units',[UnitController::class,'index'])->name('all-units');
// Route::post('store_unit',[UnitController::class,'store'])->name('store_unit');
// Route::get('unit/edit/{id}',[UnitController::class,'edit'])->name('unit/edit');
// Route::post('unit/update/{id}',[UnitController::class,'update'])->name('unit/update/{id}');
// Route::get('unit/destroy/{id}',[UnitController::class,'destroy'])->name('unit/destroy/{id}');













