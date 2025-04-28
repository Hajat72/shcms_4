<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.dashboard');
})->name('dashboard');
