<?php

use App\Question\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('questions', [QuestionController::class, 'index']);
Route::put('questions', [QuestionController::class, 'update']);
