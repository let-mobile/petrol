<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Middleware\Admin;

//---------------------signup/login------------------------
Route::group(['prefix' => 'auth'], function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    Route::post('user/auth',[AuthController::class,'store']);
});

Route::get('auth/register',[AuthController::class,'create'])->name('signup');
Route::post('user/register',[AuthController::class,'update']);

Route::group(['middleware' => 'auth'], function(){
    Route::post('logout',[AuthController::class,'destroy'])->name('logout');
    //---------------------Dashboard----------------------
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    //......... Role.......//
    Route::resource('roles',App\Http\Controllers\RoleController::class);

     //......... Role.......//
     Route::resource('users',App\Http\Controllers\UserController::class);

    //......... Unit.......//
    Route::resource('units',App\Http\Controllers\UnitController::class);
});