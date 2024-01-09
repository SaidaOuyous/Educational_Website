<!-- resources/views/quizzes.blade.php -->
@extends('layouts.main')
@section('title', 'quizzes')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($questions as $question)
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $question->question }}</h5>
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item">{{ $answer->answer_text }}</li>
                                @endforeach
                            </ul>
                            <button style=" background-color:#FFD93D;padding:13px;font-weight:600;
color:black;border-color:#FFD93D;

" class="btn btn-primary mt-3 toggle-answer">Show Answer</button>
                            <p class="correct-answer hidden">
                                @if($question->answers->where('is_correct', 1)->isNotEmpty())
                                    Correct Answer: {{ $question->answers->where('is_correct', 1)->first()->answer_text }}
                                @else
                                    No correct answer
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        var toggleButtons = document.querySelectorAll('.toggle-answer');
        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var answerCell = this.nextElementSibling;
                answerCell.classList.toggle('hidden');
            });
        });
    </script>
@endsection

<style>
    .hidden {
        display: none;
    }
   
</style>
