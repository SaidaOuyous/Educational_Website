@extends('layouts.main')
@section('title', 'Statistiques')
@section('content')
<div class="container">

   <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card bg-FFF2CC border-F4CE14 shadow-lg rounded-lg" style="background-color:#FFF2CC; border-color:#F4CE14">
                <div class="card-body d-flex align-items-center">
                    <p class="ml-5 " style="font-size:30px"><span style="color:#000; font-size:32px"> Bienvenue   </span> <strong style="color:#FFD93D;">@auth      {{auth()->user()->name}}  @endauth</strong></p>
                    <img src="/images/edu.png" alt="Image" class=" img-fluid rounded-circle" style="margin-left:30%;width: 100px; height: 80px;">

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
    <div class="col-md-3">
        <div class="card text-dark bg-FBF6EE border-F4CE14 shadow mb-3" style="max-width: 18rem; background-color:#FFE05D">
            <div class="card-body " style="color:#000;">
                <h5 class="card-title" style="color: #fff;text-align:center">
               <img src="/images/ebook.png" alt="Icon 1" style="width: 40px;margin-left:0px; height: 35px; margin-bottom: 5px;"> <br><br>
        Numéro Courses
                </h5>
                <p class="card-text" style="color: #fff; font-size:40px; text-align:center">5</p>
            </div>
        </div>
    </div>
        <div class="col-md-3">
            <div class="card text-white bg-FBF6EE border-F4CE14 shadow mb-3" style="max-width: 18rem; background-color:#FFE05D" >
                <div class="card-body">
                    <h5 style="text-align:center">
                <img src="/images/reference.png" alt="Icon 1" style="width: 40px;margin-left:0px; height: 35px; margin-bottom: 5px;"> <br><br>
               Numéro Exercises</h5>
                    <p class="card-text" style="color: #fff;font-size:40px; text-align:center">10</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-FBF6EE border-F4CE14 shadow mb-3" style="max-width: 18rem;  background-color:#FFE05D">
                <div class="card-body"><h5 style="text-align:center">
                <img src="/images/online-course.png" alt="Icon 1" style="width: 40px;margin-left:0px; height: 35px; margin-bottom: 5px;"> <br><br>
                    Numéro Exams</h5>
                    <p class="card-text" style="color: #fff;font-size:40px; text-align:center">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-FBF6EE border-F4CE14 shadow mb-3" style="max-width: 18rem;background-color:#FFE05D">
                <div class="card-body"><h5 style="text-align:center">
                <img src="/images/reference.png" alt="Icon 1" style="width: 40px;margin-left:0px; height: 35px; margin-bottom: 5px;"> <br><br>
                    Numéro  Quizzes</h5>
                    <p class="card-text" style="color: #fff;font-size:40px; text-align:center">7</p>
                </div>
            </div>
        </div>
    </div>






    <div class="row mt-4 ml-5 justify-content-between">
    <div class="card" style="width: 40%;height:10%">
  <img src="\images\mot2.jpg" class="card-img-top" alt="...">

  <div class="card-body">
    <p class="card-text">You are capable of achieving great things! Keep pushing forward and stay motivated.</p>
  </div>
</div>
   
<div class="card mr-5" style="width: 40%;height: 30%">
  <img src="\images\mot1.jpg" class="card-img-top" alt="...">

  <div class="card-body">
    <p class="card-text">One day, all your hard work will pay off.</p>
  </div>
</div>
</div>
@endsection
