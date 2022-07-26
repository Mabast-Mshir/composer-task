<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
// UserController

Route::Resource('users', welcomeController::class);
Route::Resource('student', studentController::class);
Route::get('student1/{name}/{age}', [studentController::class,'custom_aa']);
Route::post('student2', [studentController::class,'post_s']);

