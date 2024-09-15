<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'main']);
Route::get('/profile', [PagesController::class, 'profile']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/service/{id}', ServiceController::class);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contacts', [PagesController::class, 'contacts']);

