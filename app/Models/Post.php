<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// imposrt model untuk bisa menggunakan method dari Model seperti:
// - all() untuk mengambil semua data
// - Paginate() untuk membagi data menjadi halaman
use Illuminate\Support\Arr;

class Post extends Model
{   
    protected $fillable = ['slug', 'title', 'author', 'body'];

    public static function find($slug)
    {
    $post = Arr::first(self::all(), fn($article) => $article['slug'] == $slug) ?? abort(404);
    return $post;
    }
}
