<?php

// app/Http/Controllers/Api/QuestionController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return response()->json(['questions' => $questions]);
    }

    public function show($id)
    {
        $question = Question::with('answers')->find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        return response()->json(['question' => $question]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'question' => 'required|string',
        ]);

        // Create a new question
        $question = Question::create([
            'question' => $request->input('question'),
        ]);

        return response()->json(['message' => 'Question created successfully', 'question' => $question]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'question' => 'required|string',
        ]);

        // Find the question
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        // Update the question
        $question->update([
            'question' => $request->input('question'),
        ]);

        return response()->json(['message' => 'Question updated successfully', 'question' => $question]);
    }

    public function destroy($id)
    {
        // Find the question
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        // Delete the question
        $question->delete();

        return response()->json(['message' => 'Question deleted successfully']);
    }
}

