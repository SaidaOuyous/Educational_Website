<!-- resources/views/questions/index.blade.php -->
@extends('layouts.main')
@section('title', 'examens')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Examens</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answers</th>
                            <th>Correct Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>
                                    <ul>
                                        @foreach($question->answers as $answer)
                                            <li>{{ $answer->answer_text }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    {{ $question->answers->where('is_correct', true)->first()->answer_text }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
