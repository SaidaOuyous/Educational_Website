<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ids_dashboard', function () {
    return view('ids_dashboard');
})->name('ids_dashboard');

Route::get('/si_dashboard', function () {
    return view('si_dashboard');
})->name('si_dashboard');

Route::get('/erp_dashboard', function () {
    return view('erp_dashboard');
})->name('erp_dashboard');

Route::get('/exercices', function () {
    return view('exercices');
});
Route::get('/examens', function () {
    return view('examens');
});
  
Route::get('/static', function () {
    return view('static');
});
Route::get('/programmationweb', function () {
    return view('programmationweb');
});
Route::get('/overview', function () {
    return view('overview');
});
Route::get('/page', function () {
    return view('page');
});
Route::get('/pageJS', function () {
    return view('pageJS');
});
Route::get('/php1', function () {
    return view('php1');
});
Route::get('/bootstrapExample', function () {
    return view('bootstrapExample');
});

  
Route::get('/quizes2', function () {
    return view('quizes2');
});
Route::get('/quizes3', function () {
    return view('quizes3');
});
Route::get('/quizes4', function () {
    return view('quizes4');
});
Route::get('/quizes5', function () {
    return view('quizes5');
});


// routes/web.php
// web.php or routes file
use App\Http\Controllers\Subject1Controller;

Route::get('/quizes1', [Subject1Controller::class, 'index']);

Route::get('/quizes', [QuestionController::class, 'index']);

Route::get('/programmationwebquiz', [QuizController::class, 'index']);

// routes/web.php




Route::get('/index', function () {
    return view('index');
})->name('index');


Route::get('/Uform/{id?}', function ($id = null) {
    return view('Uform', ['id' => $id]);
})->name('Uform');

Route::get('/indexQuiz', function () {
    return view('indexQuiz');
});
Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});
Route::get('/L1', function () {
    return view('L1');
});

Route::get('/exercicesprogrammationweb', function () {
    return view('exercicesprogrammationweb');
});

Route::get('/cssexercices', function () {
    return view('cssexercices');
});

Route::get('/jsexercices', function () {
    return view('jsexercices');
});

Route::get('/phpexercices', function () {
    return view('phpexercices');
});