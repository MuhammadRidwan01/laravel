<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'author', 'body'];

    public static function find($slug)
    {
    $post = Arr::first(self::all(), fn($article) => $article['slug'] == $slug);
    if (!$post) {
        abort(404); 
    }

    return $post;
    }
}
