<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أقسام المدونة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="title" content="{{ $settings['meta_title'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="description" content="{{ $settings['meta_description'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="keywords" content="{{ $settings['meta_keywords'] ?? '' }}">

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
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-cairo">
    <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="text-center animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-4">
                    أقسام المدونة
                </h1>
                <p class="text-sm md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    اكتشف مجموعة متنوعة من المواضيع والمقالات المفيدة التي كتبناها خصيصاً لكم
                </p>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        @if($sections->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($sections as $index => $section)
                    <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up border border-gray-200 overflow-hidden"
                             style="animation-delay: {{ $index * 0.1 }}s">
                        
                        <div class="relative overflow-hidden h-48 bg-gradient-to-br from-seeker-light to-provider-light">
                            @if($section->thumbnail)
                                <img src="{{ asset('storage/' . $section->thumbnail) }}" 
                                     alt="{{ $section->title }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-seeker-primary/10 to-provider-primary/10">
                                    <div class="text-center">
                                        <div class="w-16 h-16 mx-auto mb-3 bg-seeker-primary/20 rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-seeker-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-seeker-primary">{{ $section->title }}</span>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="absolute top-4 right-4 bg-seeker-primary text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                                {{ $section->blogs_count }} مقال
                            </div>
                        </div>

                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-seeker-primary transition-colors duration-300 line-clamp-2">
                                {{ $section->title }}
                            </h2>

                            @if($section->description)
                                <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                    {{ $section->description }}
                                </p>
                            @endif

                            <div class="flex justify-between items-center">
                                <a href="{{ route('sections.show', $section->slug) }}" 
                                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-seeker-primary to-seeker-accent text-white font-semibold rounded-lg hover:from-seeker-accent hover:to-seeker-primary transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    <span class="ml-2">استكشف القسم</span>
                                    <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    <span class="text-xs text-gray-500 mr-2">نشط</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute inset-0 bg-gradient-to-t from-seeker-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                <div class="bg-white rounded-lg shadow-md p-4">
                    {{ $sections->links() }}
                </div>
            </div>

        @else
            <div class="text-center py-16 animate-fade-in-up">
                <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-4">لا توجد أقسام متاحة حالياً</h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    نعمل على إضافة محتوى جديد ومفيد. تابعنا للحصول على آخر التحديثات
                </p>
                        <a href="{{ url('/') }}" 
           class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition">
            الرجوع إلى الرئيسية
        </a>
            </div>
        @endif
    </main>

<footer class="bg-white border-t border-gray-200 mt-16">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center text-gray-600 text-sm">
            <p class="mb-2 md:mb-0">
                &copy; {{ date('Y') }} جميع الحقوق محفوظة
            </p>
            <p>
                صُنع بواسطة 
                <a href="https://wa.me/+201063153994" target="_blank" class="text-blue-600 hover:text-blue-800 font-medium">
                    Amr Achraf
                </a>
            </p>
        </div>
    </div>
</footer>


    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* RTL Support */
        [dir="rtl"] .transform.rotate-180 {
            transform: rotate(0deg);
        }
        
        [dir="rtl"] svg {
            transform: scaleX(-1);
        }
    </style>
</body>
</html>
