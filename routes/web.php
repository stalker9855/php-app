<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about', ['name' => 'HELLO']);
});

Route::get('/profile', function () {
    return view('profile');
});

