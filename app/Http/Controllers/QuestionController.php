<?php

// app/Http/Controllers/QuestionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('quizes', compact('questions'));
    }
}
