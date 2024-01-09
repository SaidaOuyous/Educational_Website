<?php
// app/Http/Controllers/Api/AnswerController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();
        return response()->json(['answers' => $answers]);
    }

    public function show($id)
    {
        $answer = Answer::find($id);

        if (!$answer) {
            return response()->json(['message' => 'Answer not found'], 404);
        }

        return response()->json(['answer' => $answer]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_text' => 'required|string',
            'is_correct' => 'boolean',
        ]);

        $answer = Answer::create([
            'question_id' => $request->input('question_id'),
            'answer_text' => $request->input('answer_text'),
            'is_correct' => $request->input('is_correct', false),
        ]);

        return response()->json(['message' => 'Answer created successfully', 'answer' => $answer]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'answer_text' => 'required|string',
            'is_correct' => 'boolean',
        ]);

        $answer = Answer::find($id);

        if (!$answer) {
            return response()->json(['message' => 'Answer not found'], 404);
        }

        $answer->update([
            'answer_text' => $request->input('answer_text'),
            'is_correct' => $request->input('is_correct', false),
        ]);

        return response()->json(['message' => 'Answer updated successfully', 'answer' => $answer]);
    }

    public function destroy($id)
    {
        $answer = Answer::find($id);

        if (!$answer) {
            return response()->json(['message' => 'Answer not found'], 404);
        }

        $answer->delete();

        return response()->json(['message' => 'Answer deleted successfully']);
    }
}
