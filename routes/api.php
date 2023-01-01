<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get a random word
Route::get('/words', [\App\Http\Controllers\WordController::class, 'index']);
Route::post('/check-answer', [\App\Http\Controllers\AnswerController::class,"checkAnswer"]);
Route::post('/counter', [\App\Http\Controllers\CounterController::class,"storeCounter"]);
