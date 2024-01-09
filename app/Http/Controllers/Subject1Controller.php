<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Subject1Controller.php

use App\Models\Subject1Question;
use App\Models\Subject1Answer;

class Subject1Controller extends Controller
{
    public function index()
    {
        // Fetch questions with answers for the "quizz1" subject
        $questions = Subject1Question::with('answers')->get();

        return view('quizes1', compact('questions'));
    }

    
   
}

