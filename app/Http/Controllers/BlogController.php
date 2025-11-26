<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class BlogController extends Controller
{



    public function index()
    {
         $blogs = Post::with(['author', 'category'])
                ->where('status','published')   
                ->orderBy('created_at', 'desc')
                ->get();
        return view('blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Post::with(['author', 'category'])
            ->where('slug', $slug)
            ->firstOrFail(); // 404 if not found

        return view('blogs.show', compact('blog'));
    }
}
