@extends('layouts.main')
@section('title','examens')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <p>Examens Programmation web</p>
             <hr>

        <embed src="/images/HTMLexam.pdf" type="application/pdf" style="margin-top:30px;margin-bottom:30px;" class="mt-8" width="100%" height="500px" />
        <p>Examens  Génie Logiciel</p>
        <hr>

        <embed src="/images/GLexam.pdf" type="application/pdf" style="margin-top:30px;" class="mt-8" width="100%" height="600px" />

        </div>
    </div>
</div>
<style>
     p{
            font-size: 20px;
        font-weight: 500;
          border-right: 4px solid #000;
                color: #FFD93D; 
        text-align:center     ;
    margin:10px   }
hr{
    width:10%;
    align:center;
    border-width:5px;
    border-color:#FFD93D;
 }
</style>
@endsection