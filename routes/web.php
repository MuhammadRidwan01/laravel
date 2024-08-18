<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about',['title' => 'about']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/posts', function () {
        //panination Model::paginate(yang di tampilkan dalam satu halaman)
    return view('posts', ['title' => 'Blog', 'posts' => Post::Paginate(6)]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', ['title' => 'Blog', 'post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});