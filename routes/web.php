<?php

use Illuminate\Support\Facades\Route;
//Frontend Routes
Route::get('/', function () {
    return view('frontend.layouts.website');
})->name('website');

//Backend Routes
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
