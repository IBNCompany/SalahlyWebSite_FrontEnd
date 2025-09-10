<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSection;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function __invoke(Request $request)
    {
        $urls = [];

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

        foreach (BlogSection::active()->get() as $section) {
            $urls[] = [
                'loc' => route('sections.show', $section->slug),
                'lastmod' => $section->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ];
        }

        foreach (Blog::active()->get() as $blog) {
            $urls[] = [
                'loc' => route('show_a_blog', $blog->slug),
                'lastmod' => $blog->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($urls as $url) {
            $xml .= "    <url>" . PHP_EOL;
            $xml .= "        <loc>" . htmlspecialchars($url['loc']) . "</loc>" . PHP_EOL;
            $xml .= "        <lastmod>" . $url['lastmod'] . "</lastmod>" . PHP_EOL;
            $xml .= "        <changefreq>" . $url['changefreq'] . "</changefreq>" . PHP_EOL;
            $xml .= "        <priority>" . $url['priority'] . "</priority>" . PHP_EOL;
            $xml .= "    </url>" . PHP_EOL;
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}