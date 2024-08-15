<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;


Route::get('/about', function () {
    return view('about',['tilte' => 'about']);
});

Route::get('/', function () {
    return view('home', ['tilte' => 'Home']);
});


Route::get('/posts', function () {
    return view('posts', ['tilte' => 'blog', 'posts'=>[
        [
            'id' => 1,
            'slug' => 'rpl',
            'title' => 'Rekayasa Perangkat Lunak (RPL)',
            'author' => 'Ridwan',
            'body' => 'Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan dalam bidang teknologi informasi yang fokus pada pengembangan, perancangan, dan pemeliharaan perangkat lunak. Siswa jurusan ini belajar tentang pemrograman, desain aplikasi, basis data, dan manajemen proyek perangkat lunak.'
        ],
        [
            'id' => 2,
            'slug' => 'dkv',
            'title' => 'Desain Komunikasi Visual (DKV)',
            'author' => 'Mochi',
            'body' => 'Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari tentang cara menyampaikan pesan melalui elemen visual seperti gambar, teks, dan ilustrasi. Siswa jurusan DKV dilatih untuk menjadi desainer grafis yang kreatif dengan kemampuan dalam membuat desain untuk media cetak dan digital.'
        ],
        [
            'id' => 3,
            'slug' => 'tkj',
            'title' => 'Teknik Komputer dan Jaringan (TKJ)',
            'author' => 'Ridwan',
            'body' => 'Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang berfokus pada pembelajaran tentang jaringan komputer, konfigurasi perangkat keras, serta pengelolaan dan pemeliharaan sistem jaringan. Siswa TKJ mempelajari bagaimana membangun dan mengelola jaringan komputer baik skala kecil maupun besar.'
        ],
    ]
    ]);
}
);

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'rpl',
            'title' => 'Rekayasa Perangkat Lunak (RPL)',
            'author' => 'Ridwan',
            'body' => 'Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan dalam bidang teknologi informasi yang fokus pada pengembangan, perancangan, dan pemeliharaan perangkat lunak. Siswa jurusan ini belajar tentang pemrograman, desain aplikasi, basis data, dan manajemen proyek perangkat lunak.'
        ],
        [
            'id' => 2,
            'slug' => 'dkv',
            'title' => 'Desain Komunikasi Visual (DKV)',
            'author' => 'Mochi',
            'body' => 'Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari tentang cara menyampaikan pesan melalui elemen visual seperti gambar, teks, dan ilustrasi. Siswa jurusan DKV dilatih untuk menjadi desainer grafis yang kreatif dengan kemampuan dalam membuat desain untuk media cetak dan digital.'
        ],
        [
            'id' => 3,
            'slug' => 'tkj',
            'title' => 'Teknik Komputer dan Jaringan (TKJ)',
            'author' => 'Ridwan',
            'body' => 'Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang berfokus pada pembelajaran tentang jaringan komputer, konfigurasi perangkat keras, serta pengelolaan dan pemeliharaan sistem jaringan. Siswa TKJ mempelajari bagaimana membangun dan mengelola jaringan komputer baik skala kecil maupun besar.'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['tilte' => $_SERVER['REQUEST_URI'], 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['tilte' => 'contact']);
});