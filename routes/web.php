<?php

use App\Http\Controllers\QuestionController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

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

Route::any("answer", function(){
    return view('answer');
});

Route::any("start", function(){
    return view('start');
});

Route::any("finish", function(){
    return view('finish');
});

Route::get('/add', [QuestionController::class, 'add']);

Route::get('/update', [QuestionController::class, 'update']);

Route::get('/delete', [QuestionController::class, 'delete']);

Route::get('/questions', [QuestionController::class, 'show']);
