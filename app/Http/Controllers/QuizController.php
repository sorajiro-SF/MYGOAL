<?php

namespace App\Http\Controllers;
use App\Models\Relation;
use App\Models\From;
use App\Models\Mprofile;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function QuizSelect(Mprofile $pro) 
    {
        return view('Quiz.select')->with(['profile' => $pro->getPaginateByLimit(4)] );
    }

    public function QuizQuestion(Mprofile $pro, Relation $relation, From $from) 
    {
        return view('Quiz.question')->with(['pro' => $pro,'relation' => $relation->get(), 'from'=> $from->get()]);
    }
    
    //こっから先がNewになる
    public function NewQuizSelect(Mprofile $pro) 
    {
        return view('NewQuiz.select')->with(['profile' => $pro->getPaginateByLimit(4)] );
    }

}

