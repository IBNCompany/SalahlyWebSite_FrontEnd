<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title ?? $blog->meta_title }}</title>
    <meta name="title" content="{{ $blog->meta_title ?? $blog->title }}">
    <meta name="description" content="{{ $blog->meta_description ?? Str::limit($blog->excerpt, 160) }}">
    <meta name="keywords" content="{{ $blog->meta_keywords ?? '' }}">
    <meta name="author" content="IBN">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{ $blog->meta_title ?? $blog->title }}">
    <meta property="og:description" content="{{ $blog->meta_description ?? Str::limit($blog->excerpt, 160) }}">
    <meta property="og:image" content="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : asset('images/default-blog.jpg') }}">
    <meta property="og:url" content="{{ route('show_a_blog', $blog->slug) }}">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="{{ config('app.name', 'Your Blog Name') }}">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->meta_title ?? $blog->title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description ?? Str::limit($blog->excerpt, 160) }}">
    <meta name="twitter:image" content="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : asset('images/default-blog.jpg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'cairo': ['Cairo', 'sans-serif'],
                    },
                    colors: {
                        'seeker': {
                            'primary': '#070a7f',
                            'accent': '#040754',
                            'light': '#e6e7ff',
                            'dark': '#030540'
                        },
                        'provider': {
                            'primary': '#088b6b',
                            'accent': '#043a2c',
                            'light': '#e6fff9',
                            'dark': '#032520'
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s infinite',
                        'slide-up': 'slide-up 0.8s ease-out',
                        'slide-down': 'slide-down 0.8s ease-out',
                        'fade-in-up': 'fade-in-up 1s ease-out',
                        'bounce-in': 'bounce-in 1s ease-out',
                    }
                }
            }
        }
    </script>
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .prose img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin: 1rem auto;
        }

        /* RTL Support */
        [dir="rtl"] .transform.rotate-180 {
            transform: rotate(0deg);
        }
        
        [dir="rtl"] svg {
            transform: scaleX(-1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-cairo">
    <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="text-center animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-4">
                    {{ $blog->title }}
                </h1>
                <div class="items-center space-x-4 space-x-reverse text-gray-600 text-sm mt-8">
                    <span>
                        <i class="fas fa-folder-open ml-1"></i>
                        <a href="{{ route('sections.show', $blog->section->slug) }}" class="hover:text-seeker-primary">
                            {{ $blog->section->title ?? 'غير محدد' }}
                        </a>
                    </span>
                    <span>
                        <i class="fas fa-eye"></i>
                        {{ $blog->views }}
                    </span>
                    <span>
                        <i class="fas fa-calendar-alt ml-1"></i>
                        {{ $blog->published_at ? $blog->published_at->format('Y/m/d') : 'غير منشور' }}
                    </span>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Blog Thumbnail -->
            <div class="relative mb-8 animate-fade-in-up">
                @if($blog->thumbnail)
                    <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                         alt="{{ $blog->title }}"
                         class="w-full h-64 md:h-96 object-cover rounded-2xl shadow-lg">
                @else
                    <div class="w-full h-64 md:h-96 flex items-center justify-center bg-gradient-to-br from-seeker-light to-provider-light rounded-2xl shadow-lg">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-3 bg-seeker-primary/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-seeker-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-seeker-primary">{{ $blog->title }}</span>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Blog Content -->
            <article class="bg-white rounded-2xl shadow-lg p-8 animate-slide-up">
                @if($blog->excerpt)
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 italic">
                        {{ $blog->excerpt }}
                    </p>
                @endif
                <div class="prose max-w-none text-gray-800 leading-relaxed">
                    {!! $blog->content !!}
                </div>
            </article>

            <!-- Social Sharing Buttons -->
<!-- Social Sharing Buttons -->
<div class="mt-8 flex justify-center space-x-4 space-x-reverse animate-fade-in-up">
    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('show_a_blog', $blog->slug)) }}"
       target="_blank"
       class="flex items-center justify-center w-10 h-10 md:w-auto md:h-auto md:px-4 md:py-2 bg-blue-600 text-white rounded-full md:rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 shadow-md">
        <i class="fab fa-facebook-f text-lg"></i>
        <span class="hidden lg:inline mr-2">مشاركة على فيسبوك</span>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . route('show_a_blog', $blog->slug)) }}"
       target="_blank"
       class="flex items-center justify-center w-10 h-10 md:w-auto md:h-auto md:px-4 md:py-2 bg-green-500 text-white rounded-full md:rounded-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-105 shadow-md">
        <i class="fab fa-whatsapp text-lg"></i>
        <span class="hidden lg:inline mr-2">مشاركة على واتساب</span>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/?url={{ urlencode(route('show_a_blog', $blog->slug)) }}"
       target="_blank"
       class="flex items-center justify-center w-10 h-10 md:w-auto md:h-auto md:px-4 md:py-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white rounded-full md:rounded-lg hover:from-pink-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105 shadow-md">
        <i class="fab fa-instagram text-lg"></i>
        <span class="hidden lg:inline mr-2">مشاركة على إنستغرام</span>
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('show_a_blog', $blog->slug)) }}&text={{ urlencode($blog->title) }}"
       target="_blank"
       class="flex items-center justify-center w-10 h-10 md:w-auto md:h-auto md:px-4 md:py-2 bg-blue-400 text-white rounded-full md:rounded-lg hover:bg-blue-500 transition-all duration-300 transform hover:scale-105 shadow-md">
        <i class="fab fa-twitter text-lg"></i>
        <span class="hidden lg:inline mr-2">مشاركة على تويتر</span>
    </a>
</div>


            <!-- Back to Section -->
            <div class="mt-8 flex justify-center">
                <a href="{{ route('sections.show', $blog->section->slug) }}"
                   class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition-all duration-300">
                    <svg class="w-4 h-4 ml-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    العودة إلى القسم
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center text-gray-600 text-sm">
                <p class="mb-2 md:mb-0">
                    &copy; {{ date('Y') }} جميع الحقوق محفوظة
                </p>
                <p>
                    صُنع بواسطة
                    <a href="https://www.facebook.com/IBNAGANCY" target="_blank" class="text-blue-600 hover:text-blue-800 font-medium">
                        IBN
                    </a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>