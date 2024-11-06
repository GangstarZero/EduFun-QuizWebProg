<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PopularController extends Controller
{
    public function index()
    {
        $posts = Post::with('writer', 'category')->inRandomOrder()->paginate(3);
        return view('popular', compact('posts'));
    }
}
