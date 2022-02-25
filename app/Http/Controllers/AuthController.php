<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_index(){
        return view('forum.auth.login');
    }
    public function register_index(){
        return view('forum.auth.register');
    }
    public function forget_password(){
        return view('forum.auth.forget');
    }
}
