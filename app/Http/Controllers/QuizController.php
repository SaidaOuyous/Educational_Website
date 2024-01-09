<?php

// app/Http/Controllers/QuizController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = [
            ['text' => ' Programmation web', 'url' => '/quizes'],
            ['text' => ' Génie logiciel', 'url' => '/quizes1'],
            ['text' => ' Statistique inferetielles', 'url' => '/quizes2'],
            ['text' => ' Système d\'Information Décisionnelle', 'url' => '/quizes3'],
            ['text' => 'Réseaux Informatiques', 'url' => '/quizes4'],
            ['text' => 'Probabilité et Statistiques Descriptives', 'url' => '/quizes5'],
            // Add more quizzes as needed
        ];

        return view('programmationwebquiz', ['quizzes' => $quizzes]);
    }
}
