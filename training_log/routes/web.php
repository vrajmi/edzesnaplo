<?php

use App\Http\Controllers\Workout;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('workout', Workout::class);