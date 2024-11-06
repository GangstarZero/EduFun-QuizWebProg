<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WritersController extends Controller
{
    public function index()
    {
        $writer = Writer::get();
        return view('writer', compact('writer'));
    }

    public function writerPost($userId)
    {
        $posts = Post::with('writer')
            ->whereHas('writer', function ($query) use ($userId) {
                $query->where('id', $userId);
            })
            ->get();

        $writer = Writer::where('id', $userId)->first();
        return view('writerPost', compact('posts','writer'));
    }
}
