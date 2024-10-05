<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.Website');
})->name('Website');

//message
Route::get('/message', function () {
    return view('frontend.message');
})->name('message');