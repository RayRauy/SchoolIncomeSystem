<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    if (Auth::check())
        return view('home');
    else
        return view('not-logged-in');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
