<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/students',StudentController::class);
Route::get('/students/{id}/delete',[StudentController::class,'destroy']);