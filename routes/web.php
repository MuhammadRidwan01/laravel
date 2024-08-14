<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',['tilte' => 'about']);
});

Route::get('/home', function () {
    return view('home', ['tilte' => 'Home']);
});


Route::get('/posts', function () {
    return view('posts', ['tilte' => 'blog', 'posts'=>[
        [
            'title' => 'artikel 1',
            'slug'=> 'artikel-1',
            'author' => 'Ridwan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, 
             ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue
             , euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.'
        ],
        [
            'title' => 'artikel 2',
            'slug'=> 'artikel-2',
            'author' => 'Mochi',
            'body' => 'elementum ultrices diam. Maecenas ligula massa, varius a, semper congue
             , euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, 
             ultricies sed, dolor. Cras'
        ]],
    ]);
}
);

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug'=> 'artikel-1',
            'title' => 'artikel 1',
            'author' => 'Ridwan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
             ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue
             , euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.'
        ],
        [
            'id' => 2,
            'title' => 'artikel 2',
            'slug'=> 'artikel-2',
            'author' => 'Mochi',
            'body' => 'elementum ultrices diam. Maecenas ligula massa, varius a, semper congue
             , euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, 
             non fermentum diam nisl sit amet erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['tilte' => 'Detail Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['tilte' => 'contact']);
});