<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forumController extends Controller
{
    public function accueil(){
        return view('forum.index');
    }
}
