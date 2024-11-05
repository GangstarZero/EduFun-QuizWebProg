<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($postId){
        $post = Post::with('category', 'writer')->where('id', $postId)->first();

        return view('post', compact('post'));
    }
}
