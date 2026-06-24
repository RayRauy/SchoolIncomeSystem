<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\UserSearch;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    if (Auth::check())
        return view('home');
    else
        return view('not-logged-in');
});

Auth::routes();

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login')->middleware('throttle:login');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/not-logged-in', [GuestController::class, 'index'])->name('not-logged-in')->middleware('throttle:strict');

Route::get('/user-with-package', [HomeController::class, 'showuser'])->name('users');

Route::get('/users-no-package', [UserController::class, 'index'])->name('users.index');
Route::get('/users-no-package/search', [UserController::class, 'search'])->name('users.search');
Route::get('/users-no-package/{user}', [UserController::class, 'show'])->name('users.show');