<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');
Route::post('/course', [App\Http\Controllers\CourseController::class, 'upload'])->name('course');
Route::put('/course/edit/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('course');
Route::delete('/course/delete/{id}', [App\Http\Controllers\CourseController::class, 'delete'])->name('course');

// routes/api.php

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::post('/users', [App\Http\Controllers\UserController::class, 'upload'])->name('users');
Route::put('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users');
Route::delete('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users');

// routes/api.php

use App\Http\Controllers\Api\QuestionController;

Route::apiResource('questions', QuestionController::class);

use App\Http\Controllers\Api\AnswerController;

Route::apiResource('answers', AnswerController::class);
