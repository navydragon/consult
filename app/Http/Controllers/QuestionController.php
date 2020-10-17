<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{
    public function add_question(Request $request )
    {
        $q_d = $request->question_data;
        $n_q = new Question;
        $n_q->fullname = $q_d["fullname"];
        $n_q->email = $q_d["email"];
        $n_q->region = $q_d["region"];
        $n_q->company = $q_d["company"];
        $n_q->title = $q_d["title"];
        $n_q->text = $q_d["text"];
        $n_q->is_answered = false;
        $n_q->save();
        return "OK";
    }
}
