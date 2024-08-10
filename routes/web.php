<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',['nama' => 'about', 'tilte' => 'about']);
});

Route::get('/home', function () {
    return view('home', ['nama' => 'Home', 'tilte' => 'Home']);
});


Route::get('/profile', function () {
    return view('profile', ['nama' => 'Profile', 'tilte' => 'Profile']);
});