@extends('admin.layout')

@section('title', 'عرض المقال - لوحة التحكم')
@section('page-title', 'عرض تفاصيل المقال')
@section('page-description', 'عرض التفاصيل الكاملة للمقال وإدارته')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center space-x-4 space-x-reverse">
            <div class="w-12 h-12 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center">
                <i class="fas fa-newspaper text-white text-xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $blog->title }}</h1>
                <p class="text-gray-600">تفاصيل المقال وإدارته</p>
            </div>
        </div>
        <div class="flex items-center space-x-3 space-x-reverse">
            <a href="{{ route('admin.blogs.edit', $blog) }}" 
               class="group px-4 py-2 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                <i class="fas fa-edit ml-2"></i> تعديل المقال
            </a>
            <a href="{{ route('admin.blogs.index') }}" 
               class="group px-4 py-2 bg-gray-200 text-gray-800 rounded-lg font-medium hover:bg-gray-300 hover:shadow-lg transition-all duration-300">
                <i class="fas fa-arrow-right ml-2"></i> العودة إلى المقالات
            </a>
        </div>
    </div>

    <!-- Blog Details -->
<!-- Blog Details Card -->
<div class="bg-white shadow rounded-lg p-6 space-y-6">
    <div class="border-b pb-4">
        <h2 class="text-lg font-semibold text-gray-800 mb-3">
            <i class="fa-solid fa-tags text-seeker-primary ml-2"></i>
            البيانات الوصفية (Meta)
        </h2>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <p class="text-sm text-gray-500">Meta Title</p>
                <p class="font-medium text-gray-800">{{ $blog->meta_title ?? '-' }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Meta Description</p>
                <p class="font-medium text-gray-800">{{ $blog->meta_description ?? '-' }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Meta Keywords</p>
                <p class="font-medium text-gray-800">{{ $blog->meta_keywords ?? '-' }}</p>
            </div>
        </div>
    </div>

    {{-- Blog Status & Views --}}
    <div class="border-b pb-4">
        <h2 class="text-lg font-semibold text-gray-800 mb-3">
            <i class="fa-solid fa-chart-bar text-seeker-primary ml-2"></i>
            الحالة والإحصائيات
        </h2>
        <div class="flex flex-wrap items-center gap-3">
            {{-- Status Badge --}}
            <span class="px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1
                {{ $blog->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                <i class="fa-solid {{ $blog->status === 'published' ? 'fa-circle-check' : 'fa-pencil' }}"></i>
                {{ $blog->status === 'published' ? 'منشور' : 'مسودة' }}
            </span>

            {{-- Views Badge --}}
            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold flex items-center gap-1">
                <i class="fa-solid fa-eye"></i>
                {{ $blog->views }} مشاهدة
            </span>

            {{-- Published Date --}}
            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs font-semibold flex items-center gap-1">
                <i class="fa-solid fa-calendar-days"></i>
                {{ $blog->published_at ? $blog->published_at->format('Y/m/d H:i') : 'غير منشور' }}
            </span>
        </div>
    </div>

    {{-- Blog Content --}}
    <div>
        <h2 class="text-lg font-semibold text-gray-800 mb-3">
            <i class="fa-solid fa-book-open text-seeker-primary ml-2"></i>
            محتوى المقال
        </h2>
        <div class="prose max-w-none">
            {!! $blog->content !!}
        </div>
    </div>
</div>

</div>
@endsection
