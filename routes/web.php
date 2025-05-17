<?php

use App\Http\Controllers\AdmissionController;
use App\Models\Admission;
use Illuminate\Support\Facades\Route;
//Frontend Routes
Route::get('/', function () {
    return view('frontend.layouts.website');
})->name('website');

//Backend Routes
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::resources([
    'admissions' => AdmissionController::class,
]);

route::get('/Admission', [AdmissionController::class, 'index'])->name('admissions.index');