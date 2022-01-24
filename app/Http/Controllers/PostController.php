<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
      public function PostView($slug)
    {
        $post = Post::findBySlug($slug);
        return view('dinamic', compact('post'));
    }
}
