@extends('admin.layout')

@section('title', 'إضافة قسم جديد')
@section('page-title', 'إضافة قسم جديد')
@section('page-description', 'إنشاء قسم جديد للمقالات')

@section('content')
<div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up max-w-3xl mx-auto">
    <form action="{{ route('admin.blog-sections.update' , $section) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        @method('PUT')

        <!-- Title -->
        <div>
            <label for="title" class="block text-gray-700 font-semibold mb-2">العنوان</label>
            <input type="text" id="title" name="title" value="{{ old('title' , $section->title) }}"
                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
            @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Slug -->
        <div>
            <label for="slug" class="block text-gray-700 font-semibold mb-2">الرابط (Slug)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug' , $section->slug) }}"
                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
            <p class="text-gray-400 text-sm mt-1">إذا تركته فارغًا، سيتم توليده تلقائيًا من العنوان.</p>
            @error('slug') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-gray-700 font-semibold mb-2">الوصف</label>
            <textarea id="description" name="description" rows="4"
                      class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">{{ old('description' , $section->description) }}</textarea>
            @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Thumbnail -->
        <div>
            <label for="thumbnail" class="block text-gray-700 font-semibold mb-2">الصورة المصغرة</label>
            <div class="mb-4">
                @if($section->thumbnail_url)
                    <img src="{{ $section->thumbnail_url }}" 
                         class="w-32 h-32 object-cover rounded-lg shadow-md"
                         alt="{{ $section->title }}">
                    <p class="text-gray-400 text-sm mt-2">الصورة الحالية. اختر صورة جديدة لاستبدالها.</p>
                @else
                    <p class="text-gray-400 text-sm">لا توجد صورة مصغرة حاليًا.</p>
                @endif
            </div>
            <input type="file" id="thumbnail" name="thumbnail"
                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
            @error('thumbnail') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="block text-gray-700 font-semibold mb-2">الحالة</label>
            <select id="status" name="status"
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                <option value="active" {{ old('status', $section->status) == 'active' ? 'selected' : '' }}>نشط</option>
                <option value="inactive" {{ old('status', $section->status) == 'inactive' ? 'selected' : '' }}>غير نشط</option>
            </select>
            @error('status') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Submit -->
        <div class="flex justify-end">
            <button type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                <i class="fas fa-save ml-2"></i> حفظ القسم
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById("title").addEventListener("input", function () {
    let title = this.value;
    let slug = title
        .toLowerCase()
        .replace(/[^a-z0-9\u0600-\u06FF\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');
    document.getElementById("slug").value = slug;
});
</script>
@endsection
