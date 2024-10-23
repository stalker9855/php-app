<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/main', [PagesController::class, 'main']);
    Route::get('/profile', [PagesController::class, 'profile']);
    Route::get('/services', [PagesController::class, 'services']);
    Route::get('/service/{id}', ServiceController::class);
    Route::get('/about', [PagesController::class, 'about']);
    Route::get('/contacts', [PagesController::class, 'contacts']);
    Route::resource('books', BookController::class);
});


// Temporary
Route::get('/', function () {
    if (auth()->guard()->check()) {
        return redirect('/main');
    } else {
        return redirect('/login');
    }
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
