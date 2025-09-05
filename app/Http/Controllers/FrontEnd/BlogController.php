<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Blog $blog)
    {
        $blog->load('section');
        $blog->increment('views');
        return view('blog', compact('blog'));
    }
}
