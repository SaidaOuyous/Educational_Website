<!-- resources/views/quizzes.blade.php -->
@extends('layouts.main')
@section('title', 'Components page')
@section('content')
    <div>
        <p>Passer Quiz </p>
        <hr>
    </div>
    <div id="app">
        <take :quizzes="{{ json_encode($quizzes) }}"></take>
        <script src="{{ mix('js/app.js') }}"></script>
    </div>
    <style>
        p{
            font-size: 70px;
        font-weight: 500;
          border-right: 4px solid #000;
                color: #FFD93D; 
        text-align:center        }
hr{
    width:10%;
    align:center;
    border-width:5px;
    border-color:#FFD93D;
 }
    </style>
@endsection
