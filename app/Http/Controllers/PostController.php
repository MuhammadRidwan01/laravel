<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%")->orWhere('body', 'like', "%{$search}%");
        }

        $posts = $query->paginate(6)->withQueryString();
        // untuk handel ajax
        if ($request->header('HX-Request')) {
            return view('partials.posts', compact('posts'));
        }

        return view('posts', [
            'title' => 'Blog','posts' => $posts,
        ]);
    }
    
}
