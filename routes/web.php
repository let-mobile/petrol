<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;

//---------------------signup/login------------------------
Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('/',[AuthController::class,'create'])->name('signup');
Route::post('user/register',[AuthController::class,'update']);
Route::post('user/auth',[AuthController::class,'store']);
Route::post('logout',[AuthController::class,'destroy'])->name('logout');

//---------------------password-reset----------------------
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
