<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view('forum.home');
   }
   public function first_index(){
      return view('forum.presentation');
     }
}
