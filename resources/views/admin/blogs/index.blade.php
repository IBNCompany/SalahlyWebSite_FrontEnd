@extends('admin.layout')

@section('title', 'المقالات - لوحة التحكم')
@section('page-title', 'المقالات')
@section('page-description', 'إدارة وتنظيم المقالات على الموقع')

@section('content')
<div class="space-y-6">
    
    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center space-x-4 space-x-reverse">
            <div class="w-12 h-12 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-lg flex items-center justify-center">
                <i class="fas fa-newspaper text-white text-xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">إدارة المقالات</h1>
                <p class="text-gray-600">{{ $blogs->total() ?? 0 }} مقال في النظام</p>
            </div>
        </div>
        
        <div class="flex items-center space-x-3 space-x-reverse">
            <a href="{{ route('admin.blogs.create') }}" 
               class="group w-10 h-10 flex items-center justify-center bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-full font-medium hover:shadow-lg hover:scale-[1.05] transition-all duration-300">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up">
        <form id="filtersForm" action="{{ route('admin.blogs.index') }}" method="GET">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="md:col-span-2">
                    <div class="relative">
                        <input type="text" 
                               name="search"
                               placeholder="البحث في المقالات..."
                               value="{{ request('search') }}"
                               class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Status Filter -->
                <div>
                    <select name="status" 
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="">جميع الحالات</option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>مسودة</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>منشور</option>
                        <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>مؤرشف</option>
                    </select>
                </div>
                
                <!-- Sort -->
                <div>
                    <select name="sort" 
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>الأحدث أولاً</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>الأقدم أولاً</option>
                        <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>ترتيب أبجدي</option>
                        <option value="views" {{ request('sort') == 'views' ? 'selected' : '' }}>الأكثر مشاهدة</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- Blogs Table -->
    <div class="card-gradient rounded-2xl shadow-xl overflow-hidden animate-slide-up">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-seeker-primary to-provider-primary text-white">
                    <tr>
                        <th class="text-right p-4 font-semibold"></th>
                        <th class="text-right p-4 font-semibold">العنوان</th>
                        <th class="text-right p-4 font-semibold">القسم</th>
                        <th class="text-center p-4 font-semibold">المشاهدات</th>
                        <th class="text-center p-4 font-semibold">الحالة</th>
                        <th class="text-right p-4 font-semibold">تاريخ الإنشاء</th>
                        <th class="text-center p-4 font-semibold">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($blogs as $blog)
                        <tr class="table-hover">
                            <td class="p-4">
                                <img src="{{ $blog->thumbnail_url }}" 
                                     class="w-12 h-12 rounded-lg object-cover">
                            </td>
                            <td class="p-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ $blog->title }}</h3>
                                    <p class="text-sm text-gray-500">{{ $blog->slug }}</p>
                                </div>
                            </td>
                            <td class="p-4 text-sm text-gray-600">
                                {{ $blog->section->title ?? '-' }}
                            </td>
                            <td class="p-4 text-center">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-seeker-light text-seeker-primary">
                                    <i class="fas fa-eye text-xs ml-1"></i>
                                    {{ $blog->views }}
                                </span>
                            </td>
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
                            <td class="p-4 text-sm text-gray-600">{{ $blog->created_at->format('Y/m/d') }}</td>
                            
                            <td class="p-4">
                                <div class="flex items-center justify-center space-x-2 space-x-reverse">
                                    <!-- View -->
                                    <div class="relative group">
                                        <a href="{{ route('admin.blogs.show', $blog) }}" 
                                           class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                            <i class="fas fa-eye text-sm"></i>
                                        </a>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            عرض
                                        </span>
                                    </div>

                                    <!-- Edit -->
                                    <div class="relative group">
                                        <a href="{{ route('admin.blogs.edit', $blog) }}" 
                                           class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg transition-colors">
                                            <i class="fas fa-edit text-sm"></i>
                                        </a>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            تعديل
                                        </span>
                                    </div>

                                    <!-- Copy Link -->
                                    <div class="relative group">
                                        <button type="button" 
                                                onclick="copyBlogLink('{{ route('show_a_blog', $blog->slug) }}')" 
                                                class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition-colors">
                                            <i class="fas fa-link text-sm"></i>
                                        </button>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            نسخ الرابط
                                        </span>
                                    </div>

                                    <!-- Delete -->
                                    <div class="relative group">
                                        <button type="button" 
                                                onclick="confirmDelete('{{ route('admin.blogs.destroy', $blog) }}')" 
                                                class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                        <span class="absolute bottom-full mb-3 px-3 py-1.5 bg-gray-900 text-white text-xs font-medium rounded-md shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 left-1/2 -translate-x-1/2 whitespace-nowrap after:content-[''] after:absolute after:top-full after:left-1/2 after:-translate-x-1/2 after:border-4 after:border-transparent after:border-t-gray-900">
                                            حذف
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-6 text-center text-gray-500">
                                لا توجد مقالات حتى الآن.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="p-4">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById("filtersForm");
    let searchInput = form.querySelector("input[name='search']");
    let selects = form.querySelectorAll("select");

    // Auto-submit when changing select
    selects.forEach(select => {
        select.addEventListener("change", () => form.submit());
    });

    // Auto-submit when typing in search (after delay)
    let timer;
    searchInput.addEventListener("input", function () {
        clearTimeout(timer);
        timer = setTimeout(() => form.submit(), 500);
    });
});

function copyBlogLink(url) {
    navigator.clipboard.writeText(url).then(() => {
        Swal.fire({
            icon: 'success',
            title: 'تم النسخ',
            text: 'تم نسخ رابط المقال بنجاح!',
            confirmButtonText: 'حسناً'
        });
    }).catch(err => {
        console.error('فشل النسخ:', err);
    });
}

function confirmDelete(url) {
    Swal.fire({
        title: 'هل أنت متأكد؟',
        text: 'لن تتمكن من التراجع عن هذا الإجراء',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'نعم، احذف!',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = url;

            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = '{{ csrf_token() }}';
            form.appendChild(csrfToken);

            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';
            form.appendChild(methodInput);

            document.body.appendChild(form);
            form.submit();
        }
    });
}
</script>
@endpush
