<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/about', function () {
    return view('about');
})->name('about');


// User authentication routes
Route::get('/login', function () {
    return view('login');
})->name('login');
