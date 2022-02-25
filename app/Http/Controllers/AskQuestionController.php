<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AskQuestionController extends Controller
{
    public function ask_question(){
        return view('forum.ask_question.index');
    }
}
