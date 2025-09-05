@extends('admin.layout')

@section('title', 'إضافة مقال جديد')
@section('page-title', 'إضافة مقال جديد')
@section('page-description', 'إنشاء مقال جديد في النظام')

@section('content')
<div class="card-gradient rounded-2xl p-6 shadow-xl animate-fade-in-up max-w-4xl mx-auto">
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <!-- Basic Information -->
        <fieldset class="border border-gray-200 rounded-lg p-6">
            <legend class="text-lg font-semibold text-gray-800 flex items-center">
                معلومات أساسية
                <button type="button" class="toggle-collapse ml-2 text-gray-600 hover:text-seeker-primary focus:outline-none" aria-expanded="true" aria-controls="basic-info">
                    <svg class="w-5 h-5 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </legend>
            <div id="basic-info" class="space-y-6 transition-all duration-300 max-h-[1000px] opacity-100">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-gray-700 font-semibold mb-2">العنوان</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                    @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-gray-700 font-semibold mb-2">الرابط (Slug)</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                    <p class="text-gray-400 text-sm mt-1">إذا تركته فارغًا، سيتم توليده تلقائيًا من العنوان.</p>
                    @error('slug') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Section -->
                <div>
                    <label for="blog_section_id" class="block text-gray-700 font-semibold mb-2">القسم</label>
                    <select id="blog_section_id" name="blog_section_id"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="">اختر القسم</option>
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}" {{ old('blog_section_id') == $section->id ? 'selected' : '' }}>
                                {{ $section->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('blog_section_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </fieldset>

        <!-- Content Details -->
        <fieldset class="border border-gray-200 rounded-lg p-6">
            <legend class="text-lg font-semibold text-gray-800 flex items-center">
                تفاصيل المحتوى
                <button type="button" class="toggle-collapse ml-2 text-gray-600 hover:text-seeker-primary focus:outline-none" aria-expanded="true" aria-controls="content-details">
                    <svg class="w-5 h-5 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </legend>
            <div id="content-details" class="space-y-6 transition-all duration-300 max-h-[1000px] opacity-100">
                <!-- Excerpt -->
                <div>
                    <label for="excerpt" class="block text-gray-700 font-semibold mb-2">مقتطف</label>
                    <textarea id="excerpt" name="excerpt" rows="3"
                              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">{{ old('excerpt') }}</textarea>
                    @error('excerpt') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Content -->
<div>
    <label for="content" class="block text-gray-700 font-semibold mb-2">المحتوى</label>

    <textarea id="content" name="content" rows="8"
              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
        {{ old('content') }}
    </textarea>

    @error('content') 
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
    @enderror
</div>

                <!-- Thumbnail -->
                <div>
                    <label for="thumbnail" class="block text-gray-700 font-semibold mb-2">الصورة المصغرة</label>
                    <input type="file" id="thumbnail" name="thumbnail"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                    @error('thumbnail') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </fieldset>

        <!-- Publishing Settings -->
        <fieldset class="border border-gray-200 rounded-lg p-6">
            <legend class="text-lg font-semibold text-gray-800 flex items-center">
                إعدادات النشر
                <button type="button" class="toggle-collapse ml-2 text-gray-600 hover:text-seeker-primary focus:outline-none" aria-expanded="true" aria-controls="publishing-settings">
                    <svg class="w-5 h-5 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </legend>
            <div id="publishing-settings" class="space-y-6 transition-all duration-300 max-h-[1000px] opacity-100">
                <!-- Status -->
                <div>
                    <label for="status" class="block text-gray-700 font-semibold mb-2">الحالة</label>
                    <select id="status" name="status"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>مسودة</option>
                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>منشور</option>
                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>مؤرشف</option>
                    </select>
                    @error('status') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Published At -->
                <div>
                    <label for="published_at" class="block text-gray-700 font-semibold mb-2">تاريخ النشر</label>
                    <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at') }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                    @error('published_at') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </fieldset>

        <!-- SEO Settings -->
        <fieldset class="border border-gray-200 rounded-lg p-6">
            <legend class="text-lg font-semibold text-gray-800 flex items-center">
                إعدادات SEO
                <button type="button" class="toggle-collapse ml-2 text-gray-600 hover:text-seeker-primary focus:outline-none" aria-expanded="true" aria-controls="seo-settings">
                    <svg class="w-5 h-5 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </legend>
            <div id="seo-settings" class="space-y-6 transition-all duration-300 max-h-[1000px] opacity-100">
                <!-- Meta Title -->
                <div>
                    <label for="meta_title" class="block text-gray-700 font-semibold mb-2">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">
                    @error('meta_title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Meta Description -->
                <div>
                    <label for="meta_description" class="block text-gray-700 font-semibold mb-2">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3"
                              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">{{ old('meta_description') }}</textarea>
                    @error('meta_description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Meta Keywords -->
                <div>
                    <label for="meta_keywords" class="block text-gray-700 font-semibold mb-2">Meta Keywords</label>
                    <textarea id="meta_keywords" name="meta_keywords" rows="2"
                              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-seeker-primary focus:border-transparent transition-all duration-300">{{ old('meta_keywords') }}</textarea>
                    <p class="text-gray-400 text-sm mt-1">افصل بين الكلمات المفتاحية بفاصلة.</p>
                    @error('meta_keywords') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </fieldset>

        <!-- Submit -->
        <div class="flex justify-end">
            <button type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-seeker-primary to-provider-primary text-white rounded-lg font-medium hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
                <i class="fas fa-save ml-2"></i> حفظ المقال
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
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

document.querySelectorAll('.toggle-collapse').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.closest('fieldset').querySelector('div');
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        const svg = button.querySelector('svg');

        if (isExpanded) {
            content.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
            content.classList.remove('max-h-[1000px]', 'opacity-100');
            button.setAttribute('aria-expanded', 'false');
            svg.classList.add('rotate-180');
        } else {
            content.classList.remove('max-h-0', 'opacity-0', 'overflow-hidden');
            content.classList.add('max-h-[1000px]', 'opacity-100');
            button.setAttribute('aria-expanded', 'true');
            svg.classList.remove('rotate-180');
        }
    });
});
</script>
<!-- jQuery (لازم ييجي قبل Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Summernote Lite JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <script>
        $(function () {
            $('#content').summernote({
                height: 250,
                placeholder: 'اكتب محتوى المقال هنا...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']]
                ]
            });
        });
    </script>
@endpush
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
@endpush