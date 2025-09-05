@extends('admin.layout')

@section('title', 'عرض القسم - لوحة التحكم')
@section('page-title', 'عرض تفاصيل القسم')
@section('page-description', 'عرض التفاصيل الكاملة لقسم المقالات وإدارتها')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center space-x-4 space-x-reverse">
            <div class="w-12 h-12 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center">
                <i class="fas fa-folder-open text-white text-xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $section->title }}</h1>
                <p class="text-gray-600">تفاصيل القسم وإدارة المقالات المرتبطة</p>
            </div>
        </div>
        <div class="flex items-center space-x-3 space-x-reverse">
            <a href="{{ route('admin.blog-sections.edit', $section) }}" 
               class="group px-4 py-2 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                <i class="fas fa-edit ml-2"></i> تعديل القسم
            </a>
            <a href="{{ route('admin.blog-sections.index') }}" 
               class="group px-4 py-2 bg-gray-200 text-gray-800 rounded-lg font-medium hover:bg-gray-300 hover:shadow-lg transition-all duration-300">
                <i class="fas fa-arrow-right ml-2"></i> العودة إلى الأقسام
            </a>
        </div>
    </div>

    <!-- Section Details -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left: Image and Basic Info -->
            <div>
                <div class="mb-6">
                    <img src="{{ $section->thumbnail_url }}" 
                         class="w-full h-64 object-cover rounded-lg shadow-md"
                         alt="{{ $section->title }}">
                </div>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">عنوان القسم</h3>
                        <p class="text-gray-600">{{ $section->title }}</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">المعرف (Slug)</h3>
                        <p class="text-gray-600">{{ $section->slug }}</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">الحالة</h3>
                        @if($section->status === 'active')
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <div class="w-1.5 h-1.5 bg-green-500 rounded-full ml-1"></div>
                                نشط
                            </span>
                        @else
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <div class="w-1.5 h-1.5 bg-red-500 rounded-full ml-1"></div>
                                غير نشط
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Right: Description and Metadata -->
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">الوصف</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $section->description }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">عدد المقالات</h3>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-seeker-light text-seeker-primary">
                        <i class="fas fa-newspaper text-xs ml-1"></i>
                        {{ $section->blogs_count ?? 0 }} مقال
                    </span>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">تاريخ الإنشاء</h3>
                    <p class="text-gray-600">{{ $section->created_at->format('Y/m/d H:i') }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">آخر تحديث</h3>
                    <p class="text-gray-600">{{ $section->updated_at->format('Y/m/d H:i') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Blogs -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-slide-up">
        <div class="flex items-center space-x-4 space-x-reverse mb-6">
            <div class="w-10 h-10 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center">
                <i class="fas fa-newspaper text-white text-lg"></i>
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">المقالات المرتبطة</h2>
                <p class="text-gray-600">{{ $section->blogs->count() }} مقال في هذا القسم</p>
            </div>
        </div>
        @if($section->blogs && $section->blogs->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($section->blogs as $blog)
                    <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-all duration-300 animate-fade-in">
                        <img src="{{ $blog->thumbnail_url ?? asset('images/default-blog.jpg') }}" 
                             class="w-full h-40 object-cover rounded-lg mb-4" 
                             alt="{{ $blog->title }}">
                        <h3 class="text-lg font-semibold text-gray-800 line-clamp-2">{{ $blog->title }}</h3>
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">{{ Str::limit($blog->excerpt ?? $blog->content, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">{{ $blog->created_at->format('Y/m/d') }}</span>
                            <a href="{{ route('admin.blogs.show', $blog) }}" 
                               class="text-seeker-primary hover:underline text-sm font-medium">
                                عرض التفاصيل
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-gray-500 py-6">
                لا توجد مقالات مرتبطة بهذا القسم حتى الآن.
            </div>
        @endif
    </div>
</div>
@endsection