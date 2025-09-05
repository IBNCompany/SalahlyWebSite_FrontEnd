@extends('admin.layout')

@section('title', 'الصفحة الرئيسية - لوحة التحكم')
@section('page-title', 'الصفحة الرئيسية')
@section('page-description', 'نظرة عامة على إحصائيات الموقع والأنشطة الأخيرة')

@section('content')
<div class="space-y-8">
    
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
        <!-- Total Blog Posts -->
        <div class="stats-card rounded-2xl p-6 text-white relative overflow-hidden animate-bounce-in">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-newspaper text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-2">{{ $blogsCount }}</h3>
                <p class="text-white/90 text-sm">إجمالي المقالات</p>
            </div>
        </div>

        <!-- Total Blog Sections -->
        <div class="stats-card rounded-2xl p-6 text-white relative overflow-hidden animate-bounce-in" style="animation-delay: 0.1s; background: linear-gradient(135deg, #088b6b, #070a7f);">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-folder-open text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-2">{{ $sectionsCount }}</h3>
                <p class="text-white/90 text-sm">أقسام المقالات</p>
            </div>
        </div>

        <!-- Monthly Views -->
        <div class="stats-card rounded-2xl p-6 text-white relative overflow-hidden animate-bounce-in" style="animation-delay: 0.2s;">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-2">{{ $totalViews }}
                <p class="text-white/90 text-sm">زيارات المقالات</p>
            </div>
        </div>
    </div>

    <!-- Recent Activity & Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Recent Articles -->
        <div class="lg:col-span-2">
            <div class="card-gradient rounded-2xl p-6 shadow-xl animate-slide-up">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-clock mr-3 ml-3 text-seeker-primary"></i>
                        المقالات الحديثة
                    </h2>
                    @if($blogsCount > 3)
                    <a href="" class="text-sm text-seeker-primary hover:text-seeker-accent transition-colors">
                        عرض الكل
                        <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                    @else
                    @endif
                </div>
                
                <div class="overflow-hidden rounded-lg border border-gray-100">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-seeker-primary/10 to-provider-primary/10">
                            <tr>
                                <th class="text-right p-4 text-sm font-semibold text-gray-700">العنوان</th>
                                <th class="text-right p-4 text-sm font-semibold text-gray-700">القسم</th>
                                <th class="text-right p-4 text-sm font-semibold text-gray-700">تاريخ الإنشاء</th>
                                <th class="text-center p-4 text-sm font-semibold text-gray-700">الحالة</th>
                            </tr>
                        </thead>
                        @forelse($latestBlogs as $blog)
                        <tbody class="divide-y divide-gray-50">
                            <tr class="table-hover">
                                <td class="p-4">
                                    <div>
                                        <h4 class="font-medium text-gray-800">{{ $blog->title }}</h4>
                                        <p class="text-sm text-gray-500">{{ $blog->slug }}</p>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-seeker-light text-seeker-primary">
                                        {{ Str::limit($blog->section->title ?? '-' , limit: 5) }}
                                    </span>
                                </td>
                                <td class="p-4 text-sm text-gray-600">{{ $blog->created_at->format('Y/m/d') }}</td>
                                <td class="p-4 text-center">
                                @if($blog->status === 'published')
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full ml-1"></div>
                                        منشور
                                    </span>
                                @elseif($blog->status === 'draft')
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <div class="w-1.5 h-1.5 bg-yellow-500 rounded-full ml-1"></div>
                                        مسودة
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        <div class="w-1.5 h-1.5 bg-red-500 rounded-full ml-1"></div>
                                        مؤرشف
                                    </span>
                                @endif
                                </td>
                            </tr>
                        </tbody>
                        @empty
                        <p class="text-gray-700 text-center p-4">لا يوجد مقالات حتي الآن</p>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="space-y-6">
            <!-- New Article -->
            <div class="card-gradient rounded-2xl p-6 shadow-xl animate-slide-up" style="animation-delay: 0.2s;">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-plus-circle mr-2 ml-2 text-seeker-primary"></i>
                    إجراءات سريعة
                </h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.blogs.create') }}" class="group w-full bg-gradient-to-r from-seeker-primary to-provider-primary text-white p-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:scale-[1.02] flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-pen-alt text-lg ml-3"></i>
                            <span>إضافة مقال جديد</span>
                        </div>
                        <i class="fas fa-arrow-left transition-transform duration-300 group-hover:-translate-x-1"></i>
                    </a>
                    
                    <a href="{{ route('admin.blog-sections.create') }}" class="group w-full border-2 border-seeker-primary text-seeker-primary p-4 rounded-lg font-medium transition-all duration-300 hover:bg-seeker-primary hover:text-white flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-folder-plus text-lg ml-3"></i>
                            <span>إضافة قسم جديد</span>
                        </div>
                        <i class="fas fa-arrow-left transition-transform duration-300 group-hover:-translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
