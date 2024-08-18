<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about',['tilte' => 'about']);
});

Route::get('/', function () {
    return view('home', ['tilte' => 'Home']);
});


Route::get('/posts', function () {
    return view('posts', ['tilte' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', ['tilte' => 'Blog', 'post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['tilte' => 'contact']);
});