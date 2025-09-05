<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSection;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $urls = [];

        // Static pages
        $staticPages = [
            route('home'),
            url('terms'),
            url('about'),
            url('privacy'),
            url('provider/terms'),
            url('provider/about'),
            url('provider/privacy'),
        ];

        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => $page,
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ];
        }

        // Blog Sections
        foreach (BlogSection::active()->get() as $section) {
            $urls[] = [
                'loc' => route('sections.show', $section->slug),
                'lastmod' => $section->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ];
        }

        // Blogs
        foreach (Blog::active()->get() as $blog) {
            $urls[] = [
                'loc' => route('show_a_blog', $blog->slug),
                'lastmod' => $blog->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ];
        }

        return response()->view('sitemap', compact('urls'), 200)
            ->header('Content-Type', 'application/xml');
    }
}