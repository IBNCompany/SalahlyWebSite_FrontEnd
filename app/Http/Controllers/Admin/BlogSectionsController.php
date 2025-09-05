<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = BlogSection::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('slug', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        switch ($request->input('sort')) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'name':
                $query->orderBy('name', 'asc');
                break;
            case 'articles_count':
                $query->withCount('articles')->orderBy('articles_count', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $sections = $query->withCount('blogs')->paginate(10)->appends($request->query());

        return view('admin.blog-sections.index', compact('sections'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_sections,slug',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']);
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        BlogSection::create($data);

        return redirect()
            ->route('admin.blog-sections.index')
            ->with('success', 'تم إضافة القسم بنجاح');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $section = BlogSection::find($id);

        return view('admin.blog-sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section = BlogSection::find($id);

        return view('admin.blog-sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $section)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_sections,slug,' . $section,
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $section = BlogSection::find($section);

        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']);
        }

        if ($request->hasFile('thumbnail')) {
            if ($section->thumbnail) {
                \Storage::disk('public')->delete($section->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        } else {
            $data['thumbnail'] = $section->thumbnail;
        }

        $section->update($data);

        return redirect()
            ->route('admin.blog-sections.index')
            ->with('success', 'تم تعديل القسم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogSection::find($id)->delete();

        return back()->with('success', 'تم حذف القسم بنجاح');
    }
}
