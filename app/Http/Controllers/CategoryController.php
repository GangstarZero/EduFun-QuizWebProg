<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category)
    {
        $posts = Post::with('category')
            ->whereHas('category', function ($query) use($category) {
                $query->where('name', $category);
            })
            ->get();
            return view('category', compact('posts', 'category'));
    }
}
