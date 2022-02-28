<?php

use App\Http\Controllers\AskQuestionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('home',[HomeController::class,'index'])->name('home');
// Route::get('/',[HomeController::class,'first_index']);
Route::get('login',[AuthController::class,'login_index'])->name('login');
Route::get('register',[AuthController::class,'register_index'])->name('register');
Route::get('forget_password',[AuthController::class,'forget_password'])->name('forget_password');
Route::get('ask_question',[AskQuestionController::class,'ask_question'])->name('ask_question');
