<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use Illuminate\Http\Request;

class BlogSectionsController extends Controller
{
    public function index()
    {
        $sections = BlogSection::active()->withCount('blogs')->paginate(12);

        return view('sections.index', compact('sections'));
    }

    public function show(BlogSection $section)
    {
        $section->loadCount('blogs');

        $blogs = $section->blogs()->latest()->active()->paginate(9);

        return view('sections.show', compact('section', 'blogs'));
    }
}
