<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogSection;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogsCount = Blog::count();
        $sectionsCount = BlogSection::count();
        $totalViews = Blog::sum('views');
        $latestBlogs  = Blog::latest()->take(3)->get();

        return view('admin.home', compact(
            'blogsCount',
            'sectionsCount',
            'totalViews',
            'latestBlogs'
        ));
    }
}
