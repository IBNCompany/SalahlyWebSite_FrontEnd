<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صلحلي و شطبلي - منصة الخدمات المنزلية الذكية</title>

    <meta name="title" content="{{ $settings['meta_title'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="description" content="{{ $settings['meta_description'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="keywords" content="{{ $settings['meta_keywords'] ?? '' }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  
  	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVV38J9K21"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-GVV38J9K21');
    </script>

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
        .seeker-primary {
            background-color: #1e40af;
        }

        /* Custom modal animations */
        .modal-enter {
            opacity: 0;
            transform: scale(0.8) translateY(20px);
        }

        .modal-enter-active {
            opacity: 1;
            transform: scale(1) translateY(0);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .modal-exit {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        .modal-exit-active {
            opacity: 0;
            transform: scale(0.8) translateY(20px);
            transition: all 0.2s ease-in-out;
        }

        .backdrop-enter {
            opacity: 0;
        }

        .backdrop-enter-active {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .backdrop-exit {
            opacity: 1;
        }

        .backdrop-exit-active {
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        /* Facebook embed styling */
        .facebook-video {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            overflow: hidden;
        }

        * {
            font-family: 'Cairo', sans-serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(7, 10, 127, 0.4);
            }

            50% {
                box-shadow: 0 0 40px rgba(7, 10, 127, 0.8);
            }
        }

        @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slide-down {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fade-in-up {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce-in {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .gradient-seeker {
            background: linear-gradient(135deg, #070a7f 0%, #040754 100%);
        }

        .gradient-provider {
            background: linear-gradient(135deg, #088b6b 0%, #043a2c 100%);
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .scroll-smooth {
            scroll-behavior: smooth;
        }

        .hidden {
            display: none !important;
        }

        .content-transition {
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #070a7f, #088b6b);
            border-radius: 10px;
        }

        /* Floating App Icons */
        .floating-apps {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .app-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .app-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .floating-apps {
                right: 10px;
                gap: 10px;
            }

            .app-icon {
                width: 50px;
                height: 50px;
            }
        }

        html,
        body {
            max-width: 100vw;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="scroll-smooth overflow-x-hidden">
    <div class="w-full max-w-full">

        <!-- Floating App Download Icons -->
        <div id="floating-apps" class="floating-apps">
            <a target="_blank" target="_blank" href="#" id="google-play-link" class="app-icon gradient-seeker"
                target="_blank" title="تحميل من Google Play">
                <i class="fab fa-google-play text-xl"></i>
            </a>
            <a target="_blank" target="_blank" href="#" id="app-store-link" class="app-icon gradient-seeker"
                target="_blank" title="تحميل من App Store">
                <i class="fab fa-apple text-xl"></i>
            </a>
        </div>

        <!-- Initial Selection Screen -->
        <div id="selection-screen" class="min-h-screen flex items-center justify-center relative overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900">
                <div class="absolute inset-0 bg-black/30"></div>
                <!-- Floating Shapes -->
                <div class="absolute top-20 left-20 w-32 h-32 bg-white/10 rounded-full animate-float flex items-center justify-center overflow-hidden">
                    <img src="assets/new-logo.png" alt="Logo" class="opacity-40 md:opacity-100 w-20 h-20 object-contain" />
                </div>

                <div class="absolute bottom-20 right-20 w-24 h-24 bg-white/10 rounded-full animate-float"
                    style="animation-delay: -2s;">
                </div>
                <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/10 rounded-full animate-float"
                    style="animation-delay: -4s;"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <!-- Logo and Title -->
                <div class="mt-8 text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <div
                        class="text-4xl md:text-6xl font-black text-white mb-8 animate-bounce-in flex items-center justify-center">
                        <img src="assets/final2-logo.png" alt="Logo"
                        class="inline-block size-24 md:size-36 -ml-5 md:-ml-8 mt-4 object-contain"/>
                        صلحلي و شطبلي
                    </div>
                    <p class="text-xl md:text-2xl font-bold text-gray-200 font-medium">
                        منصة الخدمات المنزلية الذكية - حلول سريعة وموثوقة
                    </p>
                    <div class="mt-8 flex justify-center">
                        <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-green-400 rounded-full"></div>
                    </div>
                </div>


                <!-- Selection Cards -->
                <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto mb-5">
                    <!-- Service Seeker Card -->
                    <div class="selection-card glass-effect rounded-3xl p-8 text-center cursor-pointer hover-lift group"
                        onclick="selectUserType('seeker')" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="200">

                        <div
                            class="text-6xl md:text-7xl mb-8 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-circle"></i>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-6">
                            هل ترغب في طلب خدمة؟
                        </h3>

                        <p class="font-bold text-gray-300 mb-8 text-lg leading-relaxed">
                            احصل على أفضل الفنيين المحترفين لحل جميع مشاكل منزلك بسرعة وجودة عالية
                        </p>

                        <div
                            class="gradient-seeker text-white py-4 px-8 rounded-full inline-block font-bold text-lg group-hover:shadow-2xl transition-all duration-300">
                            <i class="fas fa-arrow-left ml-2"></i>
                            ابدأ الآن
                        </div>
                    </div>

                    <!-- Service Provider Card -->
                    <div class="selection-card glass-effect rounded-3xl p-8 text-center cursor-pointer hover-lift group"
                        onclick="selectUserType('provider')" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="400">

                        <div
                            class="text-6xl md:text-7xl mb-8 text-green-400 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-cog"></i>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-6">
                            هل ترغب في أن تكون مزود خدمة؟
                        </h3>

                        <p class="font-bold text-gray-300 mb-8 text-lg leading-relaxed">
                            انضم إلى شبكة الفنيين المحترفين واربح المزيد من خلال مهاراتك وخبرتك
                        </p>

                        <div
                            class="gradient-provider text-white py-4 px-8 rounded-full inline-block font-bold text-lg group-hover:shadow-2xl transition-all duration-300">
                            <i class="fas fa-arrow-left ml-2"></i>
                            انضم إلينا
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Seeker Content -->
        <div id="seeker-content" class="hidden content-transition w-full max-w-full">
        <button id="scroll-to-top"
            class="h-10 w-10 hidden fixed bottom-6 right-6 z-50 bg-seeker-primary text-white rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 font-bold flex items-center justify-center"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
            <i class="fas fa-arrow-up"></i>
        </button>
            <div id="modalBackdrop"
                class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden backdrop-enter flex items-center justify-center p-4">
                <!-- Modal Container -->
                <div id="modalContent"
                    class="bg-black rounded-2xl shadow-2xl max-w-sm w-full h-[85vh] modal-enter relative overflow-hidden">

                    <!-- Close Button -->
                    <button id="closeModal"
                        class="text-white hover:font-bold text-gray-300 transition-colors duration-200 absolute top-6 right-6 z-20 bg-black bg-opacity-70 rounded-full p-3">
                        <i class="fas fa-times text-xl"></i>
                    </button>

                    <!-- Modal Body - Video Container -->
                    <div class="relative w-full h-full p-4">
                        <div class="facebook-video h-full">
                            <!-- Fallback iframe for better compatibility -->
                            <iframe id="facebookVideo"
                                src="https://www.facebook.com/plugins/video.php?height=700&href=https://www.facebook.com/watch/?v=905882714832273&show_text=false&width=320&t=0"
                                width="100%" height="100%" class="w-full h-full rounded-lg"
                                style="border:none;overflow:hidden;" scrolling="no" frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>





            <!-- Hero Section -->
            <section
                class="gradient-seeker min-h-screen flex items-center justify-center text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black/20"></div>

                <!-- Animated Background Elements -->
                <div class="absolute top-20 right-20 w-64 h-64 bg-white/5 rounded-full animate-float"></div>
                <div class="absolute bottom-20 left-20 w-48 h-48 bg-white/5 rounded-full animate-float"
                    style="animation-delay: -3s;"></div>

                <div class="container mx-auto px-4 relative z-10 mt-24 md:mt-12">
                    <!-- زر اللوجو (ثابت) -->
                    <!-- زر البرجر -->
                    <button id="logoButton"
                        class="fixed top-6 left-6 z-60  font-bold text-gray-800 rounded-full shadow-2xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-bold flex items-center justify-center overflow-hidden w-12 h-12 border-2 border-white">
                        <img src="https://cdn0.iconfinder.com/data/icons/mobile-basic-vol-1/32/Burger_Menu-64.png"
                            alt="شعار المنصة" class="w-8 h-8 object-contain invert" />
                    </button>

                    <!-- الأوفرلاي (يغطي الصفحة كلها) -->
                    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-80 hidden z-30"></div>

                    <!-- القائمة (فل الشاشة في النص) -->
                    <div id="modalMenu"
                        class="fixed inset-0 z-40 hidden flex flex-col items-center justify-center space-y-6 text-white text-base font-semibold"
                        data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-out">
                        <a href="#" class="hover:text-yellow-400 transition">تعرف علينا</a>
                        <a href="#technicians" class="hover:text-yellow-400 transition">الفنيين</a>
                        <a href="#why" class="hover:text-yellow-400 transition">لماذا صلحلي وشطبلي</a>
                        <a href="#services" class="hover:text-yellow-400 transition">خدمات صلحلي و شطبلي</a>
                        <a href="#partners" class="hover:text-yellow-400 transition">مع مزودي الخدمة</a>
                        <a href="#faq" class="hover:text-yellow-400 transition">الأسئلة الشائعة</a>
                        <a href="#locations" class="hover:text-yellow-400 transition">أماكن تواجدنا</a>
                        <a href="#trust" class="hover:text-yellow-400 transition">لِمَ تثق بنا</a>
                        <a href="#story" class="hover:text-yellow-400 transition">قصتنا</a>
                        <a href="#app" class="hover:text-yellow-400 transition">حمّل التطبيق</a>
                        <a href="{{ route('sections.index') }}" class="hover:text-yellow-400 transition">مقالاتنا</a>


                        <button id="closeButton"
                            class="fixed top-6 left-6 z-60 font-bold text-gray-800 rounded-full shadow-2xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-bold flex items-center justify-center overflow-hidden w-12 h-12 border-2 border-white">
                            <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-close-round-64.png"
                                alt="شعار المنصة" class="w-8 h-8 object-contain invert" />
                        </button>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-center -mt-4 lg:-mt-16">
                        <div data-aos="fade-right" data-aos-duration="1000">
                            <h1 class="text-xl md:text-2xl lg:text-4xl font-black mb-6 leading-tight">
                                حل مشاكل منزلك
                                <span class="text-yellow-400 block">بضغطة زر واحدة</span>
                            </h1>

                            <p class="text-xl md:text-2xl mb-8 font-bold text-gray-200 leading-relaxed">
                                منصة ذكية تربطك بأفضل الفنيين المحترفين في منطقتك. خدمة سريعة، جودة مضمونة، وأسعار
                                عادلة.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                                <button id="videoButton"
                                    class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-blue-900 transition-all duration-300 transform hover:scale-105 active:scale-95">
                                    شاهد كيف يعمل
                                    <i class="fas fa-play mr-2"></i>
                                </button>
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-6 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">50K+</div>
                                    <div class="text-sm font-bold text-gray-300">عميل راضي</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">1000+</div>
                                    <div class="text-sm font-bold text-gray-300">فني محترف</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                    <div class="text-sm font-bold text-gray-300">خدمة مستمرة</div>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                            <div class="relative">
                                <div class="animate-float">
                                    <!-- Swiper Container -->
                                    <div class="swiper hero-slider mx-auto w-64 md:w-52 lg:w-68 relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/1.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/2.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/3.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/4.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/5.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Floating Elements -->
                                 <div class="absolute top-3 right-10 bg-yellow-400 text-seeker-primary p-4 rounded-2xl shadow-xl animate-bounce flex items-center justify-center"
     style="animation-delay: -1s; width: 64px; height: 64px;">
                                    <i class="fas fa-star text-2xl"></i>
</div>
<div class="absolute bottom-3 left-10 bg-white text-seeker-primary p-4 rounded-2xl shadow-xl animate-bounce flex items-center justify-center"
     style="animation-delay: -1s; width: 64px; height: 64px;">
    <img src="assets/user-logo.png" 
         alt="Logo" 
         class="w-full h-full object-cover" />
</div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

            <!-- Meet Technicians Section -->
            <section id="technicians" class="py-8 bg-gradient-to-br from-gray-50 to-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            تعرف على فنيينا المحترفين
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            فريق من الخبراء المعتمدين في جميع التخصصات، جاهزون لخدمتك على مدار الساعة
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 -mt-2">
                        <!-- Technician Cards -->
                        <div class="bg-white rounded-3xl shadow-xl p-6 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="relative mb-6">
                                <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="أحمد محمد"
                                    class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-seeker-light">
                            </div>
                            <h3 class="text-xl font-bold font-bold text-gray-800 mb-2">أحمد محمد</h3>
                            <p class="text-seeker-primary font-semibold mb-3">فني كهرباء</p>
                            <div class="flex justify-center items-center mb-4">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-bold text-gray-600 mr-2">4.9</span>
                            </div>
                            <div class="text-sm font-bold text-gray-500">
                                <i class="fas fa-map-marker-alt ml-1"></i>
                                القاهرة • خبرة 8 سنوات
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-6 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="relative mb-6">
                                <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="محمد وائل"
                                    class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-seeker-light">
                            </div>
                            <h3 class="text-xl font-bold font-bold text-gray-800 mb-2">محمد وائل</h3>
                            <p class="text-seeker-primary font-semibold mb-3">فني سباكة</p>
                            <div class="flex justify-center items-center mb-4">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-bold text-gray-600 mr-2">4.8</span>
                            </div>
                            <div class="text-sm font-bold text-gray-500">
                                <i class="fas fa-map-marker-alt ml-1"></i>
                                القاهرة • خبرة 6 سنوات
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-6 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="relative mb-6">
                                <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="محمد علي"
                                    class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-seeker-light">
                            </div>
                            <h3 class="text-xl font-bold font-bold text-gray-800 mb-2">محمد علي</h3>
                            <p class="text-seeker-primary font-semibold mb-3">فني تكييف</p>
                            <div class="flex justify-center items-center mb-4">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-bold text-gray-600 mr-2">5.0</span>
                            </div>
                            <div class="text-sm font-bold text-gray-500">
                                <i class="fas fa-map-marker-alt ml-1"></i>
                                القاهرة • خبرة 10 سنوات
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-6 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="relative mb-6">
                                <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="عمر فوزي"
                                    class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-seeker-light">
                            </div>
                            <h3 class="text-xl font-bold font-bold text-gray-800 mb-2">عمر فوزي</h3>
                            <p class="text-seeker-primary font-semibold mb-3">فني دهان</p>
                            <div class="flex justify-center items-center mb-4">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="font-bold text-gray-600 mr-2">4.7</span>
                            </div>
                            <div class="text-sm font-bold text-gray-500">
                                <i class="fas fa-map-marker-alt ml-1"></i>
                                الإسكندرية • خبرة 5 سنوات
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comparison Section -->
            <section id="why" class="py-8 bg-gradient-to-br from-gray-100 to-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            لماذا صلحلي و شطبلي أفضل من الطرق التقليدية؟
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            مقارنة شاملة توضح الفرق بين استخدام تطبيق صلحلي و شطبلي والطرق التقليدية في طلب الخدمات
                        </p>
                    </div>

                    <div class="max-w-6xl mx-auto">
                        <div class="grid lg:grid-cols-2 gap-8">
                            <!-- Traditional Way -->
                            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-3xl p-8 border-2 border-red-200"
                                data-aos="fade-right">
                                <div class="text-center mb-8">
                                    <div
                                        class="w-20 h-20 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <i class="fas fa-times text-white text-2xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-red-700">الطريقة التقليدية</h3>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <i class="fas fa-times-circle text-red-500 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-700">البحث الطويل</h4>
                                            <p class="text-red-600 text-sm">قضاء ساعات في البحث عن فني مناسب</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-times-circle text-red-500 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-700">عدم ضمان الجودة</h4>
                                            <p class="text-red-600 text-sm">لا توجد ضمانات على جودة العمل</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-times-circle text-red-500 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-700">أسعار غير واضحة</h4>
                                            <p class="text-red-600 text-sm">مفاجآت في التكلفة النهائية</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-times-circle text-red-500 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-700">صعوبة المتابعة</h4>
                                            <p class="text-red-600 text-sm">لا يوجد نظام لمتابعة الخدمة</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-times-circle text-red-500 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-red-700">عدم الأمان</h4>
                                            <p class="text-red-600 text-sm">لا توجد معلومات موثقة عن الفني</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- صلحلي و شطبلي Way -->
                            <div class="gradient-seeker rounded-3xl p-8 text-white" data-aos="fade-left">
                                <div class="text-center mb-8">
                                    <div
                                        class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <i class="fas fa-check text-seeker-primary text-2xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold">مع تطبيق صلحلي و شطبلي</h3>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold">بحث ذكي وسريع</h4>
                                            <p class="font-bold text-gray-200 text-sm">العثور على الفني المناسب في ثوانٍ
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold">فنيون معتمدون</h4>
                                            <p class="font-bold text-gray-200 text-sm">جميع الفنيين مراجعون ومعتمدون</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold">أسعار شفافة</h4>
                                            <p class="font-bold text-gray-200 text-sm">معرفة التكلفة مسبقاً بدون مفاجآت
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold">متابعة مستمرة</h4>
                                            <p class="font-bold text-gray-200 text-sm">تتبع الخدمة من البداية للنهاية
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-yellow-400 mt-1 ml-3"></i>
                                        <div>
                                            <h4 class="font-semibold">أمان مضمون</h4>
                                            <p class="font-bold text-gray-200 text-sm">معلومات موثقة وتأمين شامل</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Packages Section -->
            <section class="py-8 bg-gradient-to-br from-white to-gray-50">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            باقات التوفير الذكية
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            اختر الباقة المناسبة لاحتياجاتك واستمتع بخصومات حصرية وخدمات مميزة
                        </p>
                        <div
                            class="w-24 h-1 bg-gradient-to-r from-seeker-primary to-seeker-accent mx-auto mt-6 rounded-full">
                        </div>
                    </div>
                    <!-- باقات الصيانة -->
                    <h3 class="text-2xl font-bold text-seeker-primary mb-8 text-center" data-aos="fade-up"
                        data-aos-delay="100">
                        باقات الصيانة
                    </h3>
                    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
                        <!-- الباقة الأساسية -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-2 border-gray-200 hover-lift relative"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-gray-400 to-gray-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-home text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold font-bold text-gray-800 mb-2">باقة الأساسيات</h3>
                                <div class="text-4xl font-bold text-seeker-primary mb-2">300 <span
                                        class="text-lg">جنيه</span></div>
                                <p class="font-bold text-gray-500">شهرياً</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>صيانة أعطال بسيطة (كهرباء – سباكة – نجارة)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>زيارة فني واحدة</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>قطع غيار أساسية مشمولة</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>ضمان 14 يوم</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full bg-gradient-to-r from-gray-600 to-gray-700 text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>

                        <!-- باقة الراحة -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-4 border-seeker-primary hover-lift relative transform scale-105"
                            data-aos="fade-up" data-aos-delay="200">
                            <!-- Popular Badge -->
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <div class="gradient-seeker text-white px-6 py-2 rounded-full text-sm font-bold">
                                    الأكثر شعبية
                                </div>
                            </div>

                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 gradient-seeker rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-star text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-seeker-primary mb-2">باقة الراحة</h3>
                                <div class="text-4xl font-bold text-seeker-primary mb-2">600 <span
                                        class="text-lg">جنيه</span></div>
                                <p class="font-bold text-gray-500">شهرياً</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>صيانة أعطال متعددة في نفس الزيارة</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>زيارتين فني في الشهر</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>خصم 10% على أي قطع غيار إضافية</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>ضمان شهر كامل</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full gradient-seeker text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>

                        <!-- باقة VIP -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-2 border-yellow-400 hover-lift relative"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-crown text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-yellow-600 mb-2">باقة VIP</h3>
                                <div class="text-4xl font-bold text-yellow-600 mb-2">1200 <span
                                        class="text-lg">جنيه</span>
                                </div>
                                <p class="font-bold text-gray-500">شهرياً</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>صيانة شاملة (كهرباء – سباكة – تكييف – nجارة – دهانات)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>زيارات مفتوحة خلال الشهر</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>أولوية في الحجز</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>ضمان 3 شهور</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full bg-gradient-to-r from-yellow-500 to-yellow-600 text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>
                    </div>


                    <h3 class="text-2xl font-bold text-seeker-primary mb-8 text-center" data-aos="fade-up"
                        data-aos-delay="100">
                        باقات التشطيب
                    </h3>
                    <!-- باقات التشطيبات -->
                    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <!-- الباقة الاقتصادية -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-2 border-gray-200 hover-lift relative"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-gray-400 to-gray-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-building text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold font-bold text-gray-800 mb-2">باقة التشطيب الاقتصادي</h3>
                                <div class="text-4xl font-bold text-seeker-primary mb-2">1500 <span
                                        class="text-lg">جنيه/م²</span></div>
                                <p class="font-bold text-gray-500">للمتر المربع</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تشطيب أساسي بجودة عالية</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>دهانات + أرضيات سيراميك أساسي</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>سباكة وكهرباء كاملة</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تسليم خلال 60 يوم</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full bg-gradient-to-r from-gray-600 to-gray-700 text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>

                        <!-- الباقة المميزة -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-4 border-seeker-primary hover-lift relative transform scale-105"
                            data-aos="fade-up" data-aos-delay="200">
                            <!-- Popular Badge -->
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <div class="gradient-seeker text-white px-6 py-2 rounded-full text-sm font-bold">
                                    الأكثر شعبية
                                </div>
                            </div>

                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 gradient-seeker rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-building text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-seeker-primary mb-2">باقة التشطيب المميز</h3>
                                <div class="text-4xl font-bold text-seeker-primary mb-2">2200 <span
                                        class="text-lg">جنيه/م²</span></div>
                                <p class="font-bold text-gray-500">للمتر المربع</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تشطيب متوسط المستوى مع خامات أفضل</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>دهانات + أرضيات بورسلين أو باركيه</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تصميم ديكوري بسيط</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تسليم خلال 45 يوم</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full gradient-seeker text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>

                        <!-- الباقة الفاخرة -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 border-2 border-blue-400 hover-lift relative"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="text-center mb-8">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-building text-white text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-blue-600 mb-2">باقة التشطيب الفاخر</h3>
                                <div class="text-4xl font-bold text-blue-600 mb-2">3500 <span
                                        class="text-lg">جنيه/م²</span>
                                </div>
                                <p class="font-bold text-gray-500">للمتر المربع</p>
                            </div>

                            <ul class="space-y-4 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تصميم داخلي احترافي 3D</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>خامات فاخرة (رخام – باركيه طبيعي – إضاءة ديكورية)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>متابعة مهندس موقع يومية</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-3"></i>
                                    <span>تسليم خلال 30 يوم</span>
                                </li>
                            </ul>

                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.alberto.%D8%B5%D9%84%D8%AD%D9%84%D9%8A%20%D9%88%20%D8%B4%D8%B7%D8%A8%D9%84%D9%8A">
                                <button
                                    class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-4 rounded-full font-bold text-lg hover:shadow-xl transition-all duration-300">
                                    اختر الباقة
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section with Two Categories -->
            <section id="services" class="py-20 gradient-seeker text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            خدماتنا المتنوعة
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            مجموعة شاملة من الخدمات المنزلية والمهنية لتلبية جميع احتياجاتك
                        </p>
                    </div>

                    <!-- خدمات شطبلي Section -->
                    <div class="mb-20" data-aos="fade-up">
                        <h3 class="text-3xl font-bold text-center mb-10 text-yellow-400 -mt-8">خدمات شطبلي</h3>
                        <div class="swiper shatably-swiper">
                            <div class="swiper-wrapper">
                                <!-- تشطيبات -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-home text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">تشطيبات</h4>
                                        <p class="font-bold text-gray-200">تشطيبات شاملة للمنازل والمكاتب بأعلى معايير
                                            الجودة</p>
                                    </div>
                                </div>
                                <!-- أعمال كهرباء -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-bolt text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال كهرباء</h4>
                                        <p class="font-bold text-gray-200">تمديدات كهربائية كاملة للمشاريع الجديدة</p>
                                    </div>
                                </div>
                                <!-- أعمال تكييف -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-snowflake text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال تكييف</h4>
                                        <p class="font-bold text-gray-200">تركيب أنظمة التكييف المركزي والمنفصل</p>
                                    </div>
                                </div>
                                <!-- أعمال أسانسيرات -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-elevator text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال أسانسيرات</h4>
                                        <p class="font-bold text-gray-200">تركيب وتشغيل الأسانسيرات للمباني السكنية
                                            والتجارية</p>
                                    </div>
                                </div>
                                <!-- أعمال جبس بورد -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-layer-group text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال جبس بورد</h4>
                                        <p class="font-bold text-gray-200">تركيب الأسقف المعلقة والديكورات الجبسية</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="swiper-button-next text-white"></div>
                            <div class="swiper-button-prev text-white"></div>
                        </div>
                    </div>

                    <!-- خدمات صلحلي Section -->
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-3xl font-bold text-center mb-12 text-yellow-400 -mt-10">خدمات صلحلي</h3>
                        <div class="swiper salahly-swiper">
                            <div class="swiper-wrapper">
                                <!-- كهرباء -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-bolt text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">كهرباء</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة جميع الأعطال الكهربائية</p>
                                    </div>
                                </div>
                                <!-- سباكة -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-wrench text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">سباكة</h4>
                                        <p class="font-bold text-gray-200">حلول سريعة وفعالة لجميع مشاكل السباكة</p>
                                    </div>
                                </div>
                                <!-- تكييفات -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-snowflake text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">تكييفات</h4>
                                        <p class="font-bold text-gray-200">صيانة وإصلاح أجهزة التكييف والتبريد</p>
                                    </div>
                                </div>
                                <!-- فني أسانسير -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-elevator text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">فني أسانسير</h4>
                                        <p class="font-bold text-gray-200">صيانة وإصلاح الأسانسيرات بكفاءة عالية</p>
                                    </div>
                                </div>
                                <!-- أعمال العزل -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-shield-alt text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال العزل</h4>
                                        <p class="font-bold text-gray-200">عزل الأسطح والخزانات ضد المياه والحرارة</p>
                                    </div>
                                </div>
                                <!-- أعمال المباني -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-building text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال المباني</h4>
                                        <p class="font-bold text-gray-200">بناء وترميم المباني والهياكل الإنشائية</p>
                                    </div>
                                </div>
                                <!-- أعمال المحارة -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-trowel text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال المحارة</h4>
                                        <p class="font-bold text-gray-200">محارة الجدران والأسقف بمواد عالية الجودة</p>
                                    </div>
                                </div>
                                <!-- أعمال الطرق -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-road text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أعمال الطرق</h4>
                                        <p class="font-bold text-gray-200">رصف وصيانة الطرق والممرات</p>
                                    </div>
                                </div>
                                <!-- النقاش -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-paint-roller text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">النقاش</h4>
                                        <p class="font-bold text-gray-200">دهان الجدران والأسقف بأحدث التقنيات</p>
                                    </div>
                                </div>
                                <!-- خطاط ورسام -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-palette text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">خطاط ورسام</h4>
                                        <p class="font-bold text-gray-200">خدمات الخط العربي والرسم الفني</p>
                                    </div>
                                </div>
                                <!-- تركيب سيراميك -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-th text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">تركيب سيراميك</h4>
                                        <p class="font-bold text-gray-200">تركيب السيراميك والبورسلين بدقة عالية</p>
                                    </div>
                                </div>
                                <!-- صيانة سخانات -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-fire text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">صيانة سخانات</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة السخانات الكهربائية والغاز</p>
                                    </div>
                                </div>
                                <!-- تركيب وصيانة فلتر -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-filter text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">تركيب وصيانة فلتر</h4>
                                        <p class="font-bold text-gray-200">تركيب وصيانة فلاتر المياه المنزلية</p>
                                    </div>
                                </div>
                                <!-- صيانة مكن تصوير -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-print text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">صيانة مكن تصوير</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة آلات التصوير والطباعة</p>
                                    </div>
                                </div>
                                <!-- صيانة أجهزة كمبيوتر -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-laptop text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">صيانة أجهزة كمبيوتر</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة الحاسوب والشبكات</p>
                                    </div>
                                </div>
                                <!-- صيانة أجهزة طبية -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-stethoscope text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">صيانة أجهزة طبية</h4>
                                        <p class="font-bold text-gray-200">صيانة وإصلاح المعدات الطبية المتخصصة</p>
                                    </div>
                                </div>
                                <!-- أجهزة منزلية -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-home text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">أجهزة منزلية</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة جميع الأجهزة المنزلية</p>
                                    </div>
                                </div>
                                <!-- صيانة الموبايلات -->
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center h-80 flex flex-col justify-center">
                                        <div
                                            class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-mobile-alt text-seeker-primary text-2xl"></i>
                                        </div>
                                        <h4 class="text-2xl font-bold mb-4">صيانة الموبايلات</h4>
                                        <p class="font-bold text-gray-200">إصلاح وصيانة الهواتف الذكية والأجهزة اللوحية
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="swiper-button-next text-white"></div>
                            <div class="swiper-button-prev text-white"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Swiper initialization script -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Initialize Shatably Services Swiper
                    const shatablySwiperConfig = {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: true,
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: '.shatably-swiper .swiper-button-next',
                            prevEl: '.shatably-swiper .swiper-button-prev',
                        },
                        pagination: {
                            el: '.shatably-swiper .swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        }
                    };

                    // Initialize Salahly Services Swiper
                    const salahlySwiperConfig = {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: true,
                        autoplay: {
                            delay: 3500,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: '.salahly-swiper .swiper-button-next',
                            prevEl: '.salahly-swiper .swiper-button-prev',
                        },
                        pagination: {
                            el: '.salahly-swiper .swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        }
                    };

                    // Initialize both swipers
                    const shatablySwiperInstance = new Swiper('.shatably-swiper', shatablySwiperConfig);
                    const salahlySwiperInstance = new Swiper('.salahly-swiper', salahlySwiperConfig);
                });
            </script>

            <!-- Custom CSS for better swiper styling -->
            <style>
                .swiper-button-next,
                .swiper-button-prev {
                    color: white !important;
                    background: rgba(255, 255, 255, 0.1);
                    width: 44px;
                    height: 44px;
                    border-radius: 50%;
                    backdrop-filter: blur(10px);
                }

                .swiper-button-next:after,
                .swiper-button-prev:after {
                    font-size: 18px;
                    font-weight: bold;
                }

                .swiper-pagination-bullet {
                    background: rgba(255, 255, 255, 0.5);
                    opacity: 1;
                }

                .swiper-pagination-bullet-active {
                    background: #fbbf24;
                }

                .swiper-slide {
                    height: auto;
                }

                /* Ensure consistent card heights */
                .swiper-slide>div {
                    height: 320px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
            </style>


            <!-- App Gallery Section -->
            <section class="py-8 bg-gradient-to-br from-gray-50 to-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            كيف تطلب خدمة
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            شاهد كيف تطلب خدمة من خلال تطبيق صلحلي و شطبلي وكيف يمكنك استخدامه بسهولة لطلب الخدمات
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/steps/1.jpg" alt="الشاشة الرئيسية"
                                class="mx-auto w-3/4 max-w-xs rounded-2xl shadow-xl object-contain">
                            <h3 class="text-center mt-4 font-bold text-seeker-primary">الشاشة الرئيسية</h3>
                        </div>

                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/steps/5.jpg" alt="اختيار الخدمة"
                                class="mx-auto w-3/4 max-w-xs rounded-2xl shadow-xl object-contain">
                            <h3 class="text-center mt-4 font-bold text-seeker-primary">اختيار الخدمة</h3>
                        </div>
                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/steps/3.jpg" alt="اختيار الفني"
                                class="mx-auto w-3/4 max-w-xs rounded-2xl shadow-xl object-contain">
                            <h3 class="text-center mt-4 font-bold text-seeker-primary">اختيار الفني</h3>
                        </div>

                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/steps/4.jpg" alt="صفحة الطلبات"
                                class="mx-auto w-3/4 max-w-xs rounded-2xl shadow-xl object-contain">
                            <h3 class="text-center mt-4 font-bold text-seeker-primary">صفحة الطلبات</h3>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Video Section -->
            <section id="partners" class="py-20 gradient-seeker text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            مع مزودي الخدمة
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            شاهد تجارب حقيقية من عملائنا ومزودي الخدمة
                        </p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6" data-aos="fade-right">
                            <div class="bg-gray-800 rounded-2xl overflow-hidden">
                                <iframe class="h-[300px] w-full rounded-2xl"
                                    src="https://www.facebook.com/plugins/video.php?height=400&href=https://www.facebook.com/watch/?v=1025997649574257&rdid=QIXmbhvTWswh0BGH&show_text=false&width=560&t=0"
                                    style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                                    allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                </iframe>
                            </div>
                            <h3 class="text-xl font-bold mb-2 mt-4">تجربة عميل راضي</h3>
                            <p class="font-bold text-gray-300 text-sm">شاهد كيف ساعد صلحلي و شطبلي في حل مشكلة كهربائية
                                معقدة</p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6" data-aos="fade-left">
                            <div class="bg-gray-800 rounded-2xl overflow-hidden">
                                <iframe class="h-[300px] w-full rounded-2xl"
                                    src="https://www.facebook.com/plugins/video.php?height=400&href=https://www.facebook.com/watch/?v=858336102943473&rdid=rZ11Ewj6nSINvYQr&show_text=false&width=560&t=0"
                                    style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                                    allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                </iframe>
                            </div>
                            <h3 class="text-xl font-bold mb-2 mt-4">قصة نجاح فني</h3>
                            <p class="font-bold text-gray-300 text-sm">كيف غيّر صلحلي و شطبلي حياة أحد الفنيين المحترفين
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="py-8 ">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            الأسئلة الشائعة
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            إجابات على أكثر الأسئلة شيوعاً حول خدمات صلحلي و شطبلي
                        </p>
                    </div>

                    <div class="max-w-4xl mx-auto">
                        <div class="space-y-4">
                            <!-- السؤال 1 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="100">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>1. كيف أطلب خدمة من خلال التطبيق؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>ببساطة، افتح التطبيق، اختر نوع الخدمة (مثل كهرباء، سباكة.. إلخ)، حدد العنوان
                                        والوقت
                                        المناسب، وسيتم ربطك بأقرب فني متاح.</p>
                                </div>
                            </div>

                            <!-- السؤال 2 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="200">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>2. هل الأسعار المعروضة نهائية؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>الأسعار المعروضة مبدئية. السعر النهائي يتم تحديده بعد المعاينة من قبل الفني.</p>
                                </div>
                            </div>

                            <!-- السؤال 3 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="300">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>3. ما هي طرق الدفع المتاحة؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>يمكنك الدفع نقداً للفني بعد انتهاء الخدمة، أو إلكترونياً من خلال التطبيق.</p>
                                </div>
                            </div>

                            <!-- السؤال 4 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="400">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>4. هل أستطيع إلغاء الطلب بعد إرساله؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، يمكنك إلغاء الطلب قبل أن يبدأ الفني العمل. إذا تم الإلغاء بعد بدء التنفيذ،
                                        قد
                                        يتم فرض رسوم.</p>
                                </div>
                            </div>

                            <!-- السؤال 5 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="500">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>5. ماذا أفعل إذا واجهت مشكلة في الخدمة؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>يمكنك التواصل مع فريق الدعم من داخل التطبيق، وسيتم مراجعة المشكلة ومساعدتك.</p>
                                </div>
                            </div>

                            <!-- السؤال 6 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="600">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>6. هل يمكنني تقييم الفني؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، بعد الانتهاء من الخدمة، يمكنك تقييم الفني وكتابة ملاحظاتك.</p>
                                </div>
                            </div>

                            <!-- السؤال 7 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="700">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>7. هل بياناتي الشخصية آمنة؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، نلتزم بحماية خصوصيتك. بياناتك مشفرة ولا يتم مشاركتها مع أطراف خارجية.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Coverage Map Section -->
            <section id="locations" class="py-8 bg-gradient-to-br from-seeker-primary to-seeker-accent text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            أماكن تواجدنا
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            نخدم العديد من المدن والمناطق في جمهورية مصر العربية
                        </p>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div data-aos="fade-right">
                            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8">
                                <h3 class="text-2xl font-bold mb-6">التغطية الجغرافية</h3>

                                <!-- جميع المحافظات -->
                                <div class="mb-6">
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-check-circle text-green-400 ml-3"></i>
                                        <span class="text-lg font-semibold">متوفر في جميع محافظات مصر</span>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-3 text-sm">
                                        <div class="flex items-center">
                                            <i class="fas fa-map-marker-alt text-yellow-400 ml-2"></i>
                                            <span>القاهرة</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-map-marker-alt text-yellow-400 ml-2"></i>
                                            <span>الإسكندرية</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-map-marker-alt text-yellow-400 ml-2"></i>
                                            <span>الجيزة</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-map-marker-alt text-yellow-400 ml-2"></i>
                                            <span>وجميع المحافظات الأخرى</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4 bg-green-400/20 rounded-2xl">
                                    <h4 class="font-bold mb-2 flex items-center">
                                        <i class="fas fa-star text-yellow-400 ml-2"></i>
                                        تغطية شاملة
                                    </h4>
                                    <p class="text-sm font-bold text-gray-200">خدماتنا متاحة في جميع أنحاء جمهورية مصر
                                        العربية بنفس مستوى الجودة والكفاءة</p>
                                </div>
                                <p class="text-center underline  text-sm font-bold text-gray-200 mt-6">قريبًا في
                                    السعودية
                                    والمغرب</p>
                            </div>
                        </div>

                        <div data-aos="fade-left">
                            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-4">
                                <div id="map" class="w-full h-96 rounded-2xl"></div>
                            </div>
                        </div>
                    </div>

                    <!-- إضافة Leaflet CSS و JS -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            // إنشاء الخريطة مع التركيز على مصر
                            var map = L.map('map').setView([26.8206, 30.8025], 6);

                            // إضافة طبقات خريطة متعددة للتأكد من التحميل
                            var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '© OpenStreetMap contributors',
                                maxZoom: 18,
                                crossOrigin: true
                            });

                            var cartoLayer = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                                attribution: '© CARTO © OpenStreetMap contributors',
                                maxZoom: 18,
                                crossOrigin: true
                            });

                            var esriLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                                attribution: '© Esri © OpenStreetMap contributors',
                                maxZoom: 18,
                                crossOrigin: true
                            });

                            // محاولة إضافة الطبقة الأولى، وإذا فشلت استخدام البديل
                            osmLayer.on('tileerror', function () {
                                console.log('OSM failed, switching to Carto');
                                map.removeLayer(osmLayer);
                                cartoLayer.addTo(map);
                            });

                            cartoLayer.on('tileerror', function () {
                                console.log('Carto failed, switching to Esri');
                                map.removeLayer(cartoLayer);
                                esriLayer.addTo(map);
                            });

                            // إضافة الطبقة الأساسية
                            osmLayer.addTo(map);

                            // المحافظات المصرية الرئيسية مع إحداثياتها
                            var governorates = [
                                { name: 'القاهرة', lat: 30.0444, lng: 31.2357 },
                                { name: 'الإسكندرية', lat: 31.2001, lng: 29.9187 },
                                { name: 'الجيزة', lat: 30.0131, lng: 31.2089 },
                                { name: 'الأقصر', lat: 25.6872, lng: 32.6396 },
                                { name: 'أسوان', lat: 24.0889, lng: 32.8998 },
                                { name: 'المنيا', lat: 28.0871, lng: 30.7618 },
                                { name: 'المنصورة', lat: 31.0409, lng: 31.3785 },
                                { name: 'طنطا', lat: 30.7865, lng: 31.0004 },
                                { name: 'دمنهور', lat: 31.0341, lng: 30.4707 },
                                { name: 'كفر الشيخ', lat: 31.1107, lng: 30.9388 },
                                { name: 'الزقازيق', lat: 30.5877, lng: 31.5022 },
                                { name: 'بنها', lat: 30.4618, lng: 31.1837 },
                                { name: 'شبين الكوم', lat: 30.5587, lng: 31.0096 },
                                { name: 'دمياط', lat: 31.8133, lng: 31.8067 },
                                { name: 'بورسعيد', lat: 31.2653, lng: 32.3019 },
                                { name: 'الإسماعيلية', lat: 30.5965, lng: 32.2715 },
                                { name: 'السويس', lat: 29.9668, lng: 32.5498 },
                                { name: 'الفيوم', lat: 29.3084, lng: 30.8428 },
                                { name: 'بني سويف', lat: 29.0661, lng: 31.0994 },
                                { name: 'أسيوط', lat: 27.1809, lng: 31.1837 },
                                { name: 'سوهاج', lat: 26.5569, lng: 31.6948 },
                                { name: 'قنا', lat: 26.1551, lng: 32.7160 },
                                { name: 'مرسى مطروح', lat: 31.3543, lng: 27.2373 },
                                { name: 'العريش', lat: 31.1313, lng: 33.7977 },
                                { name: 'الغردقة', lat: 27.2574, lng: 33.8129 },
                                { name: 'شرم الشيخ', lat: 27.9158, lng: 34.3300 }
                            ];

                            // إضافة علامات للمحافظات
                            governorates.forEach(function (gov) {
                                var marker = L.marker([gov.lat, gov.lng]).addTo(map);
                                marker.bindPopup(`
            <div class="text-center p-2">
                <h3 class="font-bold text-blue-600">${gov.name}</h3>
                <p class="text-sm font-bold text-gray-600">✅ الخدمة متوفرة</p>
                <div class="flex justify-center mt-2">
                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">نشط الآن</span>
                </div>
            </div>
        `);
                            });

                            // إضافة تأثير بصري لحدود مصر (اختياري)
                            var egyptBounds = [
                                [22.0, 25.0], // الحد الجنوبي الغربي
                                [31.5, 35.0]  // الحد الشمالي الشرقي
                            ];


                            // إضافة أزرار للتنقل بين طبقات الخريطة
                            var baseMaps = {
                                "OpenStreetMap": osmLayer,
                                "Carto Voyager": cartoLayer,
                                "Esri World": esriLayer
                            };
                            L.control.layers(baseMaps).addTo(map);

                            // فرض إعادة تحميل البلاطات بعد ثانيتين
                            setTimeout(function () {
                                map.invalidateSize();
                                map.eachLayer(function (layer) {
                                    if (layer._url) {
                                        layer.redraw();
                                    }
                                });
                            }, 2000);

                            // إضافة مؤشر تحميل
                            var loadingControl = L.control({ position: 'topright' });
                            loadingControl.onAdd = function (map) {
                                var div = L.DomUtil.create('div', 'loading-control');
                                div.innerHTML = '<div id="loading-indicator" style="display:none; background: rgba(0,0,0,0.7); color: white; padding: 8px; border-radius: 4px;">جاري التحميل...</div>';
                                return div;
                            };
                            loadingControl.addTo(map);

                            var loadingIndicator = document.getElementById('loading-indicator');

                            map.on('layeradd', function () {
                                if (loadingIndicator) loadingIndicator.style.display = 'block';
                            });

                            map.on('load', function () {
                                if (loadingIndicator) loadingIndicator.style.display = 'none';
                            });
                        });
                    </script>

                    <style>
                        /* تخصيص شكل الخريطة */
                        .leaflet-container {
                            border-radius: 1rem;
                            background-color: #f3f4f6;
                        }

                        /* إخفاء النص المكسور للبلاطات */
                        .leaflet-tile-container img {
                            image-rendering: -webkit-optimize-contrast;
                            image-rendering: crisp-edges;
                        }

                        /* مؤشر التحميل */
                        .loading-control {
                            z-index: 1000;
                        }

                        /* تحسين جودة البلاطات */
                        .leaflet-tile {
                            filter: none;
                            transition: opacity 0.2s;
                        }

                        .leaflet-tile-loaded {
                            opacity: 1;
                        }

                        /* تخصيص النوافذ المنبثقة */
                        .leaflet-popup-content-wrapper {
                            border-radius: 8px;
                            font-family: 'Cairo', sans-serif;
                        }

                        .leaflet-popup-content {
                            margin: 8px 12px;
                            line-height: 1.4;
                        }

                        /* تخصيص أزرار التحكم */
                        .leaflet-control-zoom a {
                            background-color: rgba(255, 255, 255, 0.9);
                            border: none;
                            border-radius: 4px;
                        }

                        .leaflet-control-zoom a:hover {
                            background-color: #3b82f6;
                            color: white;
                        }

                        /* تخصيص طبقات التحكم */
                        .leaflet-control-layers {
                            background: rgba(255, 255, 255, 0.9);
                            border-radius: 8px;
                            backdrop-filter: blur(10px);
                        }

                        .leaflet-control-layers-expanded {
                            padding: 6px 10px 6px 6px;
                        }
                    </style>
                </div>
            </section>

            <!-- Trust Section -->
            <section id="trust" class="py-8 bg-gradient-to-br from-white to-gray-50">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            لماذا يثق بنا الناس؟
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            أرقام حقيقية وشهادات من عملائنا الكرام من جميع محافظات مصر
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 mb-16">
                        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-seeker-primary mb-2">8,000+
                            </div>
                            <p class="text-sm md:text-base font-bold text-gray-600">عميل راضي</p>
                        </div>
                        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-seeker-primary mb-2">150+</div>
                            <p class="text-sm md:text-base font-bold text-gray-600">فني محترف</p>
                        </div>
                        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-seeker-primary mb-2">15,000+
                            </div>
                            <p class="text-sm md:text-base font-bold text-gray-600">خدمة مكتملة</p>
                        </div>
                        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-seeker-primary mb-2">4.8/5</div>
                            <p class="text-sm md:text-base font-bold text-gray-600">تقييم العملاء</p>
                        </div>
                    </div>

                    <!-- Testimonials Slider -->
                    <div class="testimonials-slider px-4 md:px-0" data-aos="fade-up" data-aos-delay="500">
                        <div class="swiper">
                            <div class="swiper-wrapper py-6">
                                <!-- شهادة 1 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="عبدالله أحمد"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">
                                                    عبدالله
                                                    أحمد</h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">القاهرة</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "خدمة ممتازة وسريعة. الفني وصل في الوقت المحدد وحل المشكلة بكفاءة عالية.
                                                أنصح الجميع بتجربة صلحلي و شطبلي."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 2 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="محمد حسن"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">محمد
                                                    حسن
                                                </h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">الإسكندرية</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "التطبيق سهل الاستخدام والأسعار واضحة. حصلت على خدمة تنظيف ممتازة وبسعر
                                                معقول."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 3 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="فاطمة علي"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">فاطمة
                                                    علي
                                                </h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">الجيزة</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "الخدمة ممتازة والفنيون محترفون. حلوا مشكلة التكييف في نص ساعة بس. شكراً
                                                لكم."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 4 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="أحمد سعيد"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">أحمد
                                                    سعيد
                                                </h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">شبرا الخيمة</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "أفضل منصة للخدمات المنزلية. الفنيون محترفون والخدمة مضمونة. لن أستخدم
                                                غيركم."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 5 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="خالد محمود"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">خالد
                                                    محمود</h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">المنوفية</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "خدمة سباكة ممتازة. الفني جه في نفس اليوم وخلص الشغل بإتقان. أسعار
                                                معقولة
                                                جداً."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 6 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/women/38.jpg"
                                                alt="نورا إبراهيم"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">نورا
                                                    إبراهيم</h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">طنطا</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "تجربة رائعة! طلبت خدمة تنظيف والنتيجة فاقت التوقعات. الفريق محترم
                                                ومتعاون."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 7 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="يوسف عبدالله"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">يوسف
                                                    عبدالله</h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">بني سويف</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "خدمة كهرباء ممتازة. الفني شخص محترف وحل المشكلة بسرعة. أنصح بالتطبيق
                                                بقوة."
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- شهادة 8 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-6">
                                            <img src="https://randomuser.me/api/portraits/men/19.jpg" alt="مصطفى حامد"
                                                class="w-12 h-12 rounded-full object-cover ml-4 flex-shrink-0">
                                            <div class="min-w-0">
                                                <h4 class="font-bold font-bold text-gray-800 text-sm md:text-base">مصطفى
                                                    حامد</h4>
                                                <p class="text-xs md:text-sm font-bold text-gray-500">أسيوط</p>
                                                <div class="flex text-yellow-400 text-xs md:text-sm mt-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 flex items-center">
                                            <p class="font-bold text-gray-600 text-sm md:text-base leading-relaxed">
                                                "طلبت خدمة صيانة غسالة والنتيجة كانت ممتازة. الغسالة شغالة زي الفل
                                                دلوقتي."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation buttons -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Our Story Section -->
            <section id="story" class="py-20 gradient-seeker text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            قصتنا
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            رحلة بدأت بحلم بسيط وتطورت لتصبح منصة رائدة في الخدمات المنزلية
                        </p>
                    </div>

                    <div class="max-w-4xl mx-auto">
                        <div class="relative">
                            <!-- Timeline Line -->
                            <div
                                class="absolute right-1/2 transform translate-x-1/2 w-1 h-full bg-yellow-400 hidden md:block">
                            </div>

                            <!-- Timeline Items -->
                            <div class="space-y-12">
                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-right">
                                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2022 - البداية</h3>
                                            <p class="font-bold text-gray-200">بدأت الفكرة من مشكلة شخصية واجهناها في
                                                العثور
                                                على فني
                                                موثوق لإصلاح مشكلة في المنزل.</p>
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 md:pl-8"></div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-left">
                                    <div class="md:w-1/2 md:pr-8"></div>
                                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2023 - الإطلاق</h3>
                                            <p class="font-bold text-gray-200">إطلاق النسخة الأولى من التطبيق في القاهرة
                                                مع
                                                50 فني في
                                                مختلف التخصصات.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-right">
                                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2024 - التوسع</h3>
                                            <p class="font-bold text-gray-200">توسعنا لتشمل جميع محافظات مصر , ووصل عدد
                                                الفنيين إلى
                                                500
                                                فني مع أكثر من 10,000 عميل راضي.</p>
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 md:pl-8"></div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-left">
                                    <div class="md:w-1/2 md:pr-8"></div>
                                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2025 - الرؤية الجديدة</h3>
                                            <p class="font-bold text-gray-200">إطلاق تطبيق صلحلي وشطبلي بشكله الجديد
                                                لتوفير
                                                تجربة أسهل</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Download App Section -->
            <section id="app" class="py-8 ">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-seeker-primary mb-6">
                            حمّل التطبيق الآن
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            ابدأ رحلتك مع صلحلي و شطبلي واحصل على أفضل الخدمات المنزلية بضغطة زر
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                        <div data-aos="fade-right">
                            <div class="text-center lg:text-right">
                                <h3 class="text-3xl font-bold text-seeker-primary mb-6">متاح على جميع المنصات</h3>
                                <p class="text-lg font-bold text-gray-600 mb-8">حمّل التطبيق مجاناً واستمتع بخدمات
                                    احترافية
                                    في منزلك
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <a target="_blank" target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.alberto.صلحلي و شطبلي"
                                        target="_blank"
                                        class="bg-black text-white px-8 py-4 rounded-2xl flex items-center hover:bg-gray-800 transition-colors">
                                        <i class="fab fa-google-play text-2xl ml-4"></i>
                                        <div class="text-right">
                                            <div class="text-sm">متاح على</div>
                                            <div class="text-lg font-bold">Google Play</div>
                                        </div>
                                    </a>

                                    <a target="_blank" target="_blank"
                                        href="https://apps.apple.com/eg/app/%D8%B5%D9%84%D8%AD%D9%84%D9%8A-%D9%88%D8%B4%D8%B7%D8%A8%D9%84%D9%8A/id6444220490"
                                        target="_blank"
                                        class="bg-black text-white px-8 py-4 rounded-2xl flex items-center hover:bg-gray-800 transition-colors">
                                        <i class="fab fa-apple text-2xl ml-4"></i>
                                        <div class="text-right">
                                            <div class="text-sm">حمّل من</div>
                                            <div class="text-lg font-bold">App Store</div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="mt-8 flex items-center justify-center lg:justify-start space-x-4 space-x-reverse">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="font-bold text-gray-600">4.9 من 5 نجوم</span>
                                    <span class="font-bold text-gray-400">|</span>
                                    <span class="font-bold text-gray-600">+100,000 تحميل</span>
                                </div>
                                <div class="text-right mt-4">
                                    <h2 class="text-lg font-bold text-gray-700 mb-4">وسائل الدفع المتاحة</h2>

                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                        <!-- محفظة إلكترونية -->
                                        <div
                                            class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition">
                                            <div
                                                class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full mb-2">
                                                <i class="fas fa-wallet text-gray-600 text-xl"></i>
                                            </div>
                                            <span class="font-semibold text-gray-700 text-sm">محفظة إلكترونية</span>
                                        </div>

                                        <!-- بطاقة ائتمان -->
                                        <div
                                            class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition">
                                            <div
                                                class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full mb-2">
                                                <i class="fas fa-credit-card text-gray-600 text-xl"></i>
                                            </div>
                                            <span class="font-semibold text-gray-700 text-sm">بطاقة ائتمان</span>
                                        </div>

                                        <!-- فوري -->
                                        <div
                                            class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition">
                                            <div
                                                class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full mb-2">
                                                <i class="fas fa-money-bill text-gray-600 text-xl"></i>
                                            </div>
                                            <span class="font-semibold text-gray-700 text-sm">فوري</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div data-aos="fade-left">
                            <div class="relative">
                                <div class="animate-float">
                                    <!-- Swiper Container -->
                                    <div class="swiper download-slider mx-auto max-w-[250px] w-full relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/6.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/7.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/8.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/9.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/user-splash/5.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Floating Elements -->
                                <div
                                    class="absolute top-2 right-10 bg-seeker-primary text-white p-4 rounded-2xl shadow-xl animate-bounce">
                                    <i class="fas fa-download text-2xl"></i>
                                </div>
                                <div class="absolute bottom-2 left-10 bg-yellow-400 text-seeker-primary p-4 rounded-2xl shadow-xl animate-bounce"
                                    style="animation-delay: -1s;">
                                    <i class="fas fa-mobile-alt text-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-gray-900 text-white py-16">
                <div class="container mx-auto px-4">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <!-- Company Info -->
                        <div>
<div class="text-3xl font-bold mb-6 flex items-center">
    <img src="assets/logo-rect.png" 
         alt="Logo" 
         class="w-8 h-8 object-contain ml-2" />
    صلحلي و شطبلي
</div>

                            <p class="font-bold text-gray-400 mb-6">
                                منصة الخدمات المنزلية الذكية - حلول سريعة وموثوقة لجميع احتياجاتك المنزلية
                            </p>

                            <!-- Social Media -->
                            <div class="flex space-x-4 space-x-reverse mb-6">
                                <a target="_blank" target="_blank"
                                    href="https://www.facebook.com/share/19CCz5zUgv/?mibextid=wwXIfr"
                                    class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank" target="_blank"
                                    href="https://www.instagram.com/sal7lywshtbly_/?igsh=ZHd6ZGZueXR4aDRx#"
                                    class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a target="_blank" target="_blank"
                                    href="https://www.tiktok.com/@sal7lywshtbly?_t=ZS-8yWFiPGVsme&_r=1"
                                    class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                                <a target="_blank"
                                href="https://t.snapchat.com/JJBLatn0"
                                class="w-10 h-10 bg-[#FFFC00] rounded-full flex items-center justify-center hover:brightness-90 transition-colors">
                                    <i class="fab fa-snapchat-ghost text-black"></i>
                                </a>
                                <a target="_blank"
                                href="https://x.com/sal7lywshtbly"
                                class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </div>

                            <!-- Extra Links -->
                            <div class="flex flex-col space-y-2 text-sm font-bold text-gray-500">
                                <a href="/about" class="hover:text-yellow-500 transition-colors">عن التطبيق</a>
                                <a href="/terms" class="hover:text-yellow-500 transition-colors">الشروط
                                    والأحكام</a>
                                <a href="/privacy" class="hover:text-yellow-500 transition-colors">سياسة
                                    الخصوصية</a>
                            </div>
                        </div>

                        <!-- Legal -->
                        <div>
                            <h3 class="text-xl font-bold mb-6">إذاي توصلنا</h3>
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="w-full h-40 overflow-hidden rounded-lg">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.1281758981245!2d31.331672274357175!3d30.061860217747554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e68544103d7%3A0x4630d66ad1be6372!2s31%20El%20Batrawy%2C%20Al%20Manteqah%20Al%20Oula%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1754158359155!5m2!1sen!2seg"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade" class="w-full h-full rounded-lg">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Contact & Map -->
                        <div>
                            <h3 class="text-xl font-bold mb-6">تواصل معنا</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-phone text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="tel:01279818888">01279818888</a></span></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-brands fa-whatsapp text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="https://wa.me/+201096013034">01096013034</a></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="mailto:sshatblii.dev@gmail.com">sshatblii.dev@gmail.com</a></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400">31 شارع البطراوي , ش. عباس العقاد , القاهرة -
                                        مصر</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Service Provider Content -->
        <div id="provider-content" class="hidden content-transition w-full max-w-full">
        <button id="scroll-to-top2"
            class="h-10 w-10 hidden fixed bottom-6 right-6 z-50 bg-provider-primary text-white rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 font-bold flex items-center justify-center"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
            <i class="fas fa-arrow-up"></i>
        </button>
            <div id="modalBackdrop2"
                class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden backdrop-enter flex items-center justify-center p-4">
                <!-- Modal Container -->
                <div id="modalContent2"
                    class="bg-black rounded-2xl shadow-2xl max-w-sm w-full h-[85vh] modal-enter relative overflow-hidden">

                    <!-- Close Button -->
                    <button id="closeModal2"
                        class="text-white hover:font-bold text-gray-300 transition-colors duration-200 absolute top-6 right-6 z-20 bg-black bg-opacity-70 rounded-full p-3">
                        <i class="fas fa-times text-xl"></i>
                    </button>

                    <!-- Modal Body - Video Container -->
                    <div class="relative w-full h-full p-4">
                        <div class="facebook-video h-full">
                            <!-- Fallback iframe for better compatibility -->
                            <iframe id="facebookVideo2"
                                src="https://www.facebook.com/plugins/video.php?height=700&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F975024554823331&show_text=false&width=320&t=0"
                                width="100%" height="100%" class="w-full h-full rounded-lg"
                                style="border:none;overflow:hidden;" scrolling="no" frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>



            <!-- Hero Section -->
            <section
                class="gradient-provider min-h-screen flex items-center justify-center text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black/20"></div>

                <!-- Animated Background Elements -->
                <div class="absolute top-20 right-20 w-64 h-64 bg-white/5 rounded-full animate-float"></div>
                <div class="absolute bottom-20 left-20 w-48 h-48 bg-white/5 rounded-full animate-float"
                    style="animation-delay: -3s;"></div>

                <div class="container mx-auto px-4 relative z-10 mt-24 md:mt-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-center -mt-4 lg:-mt-16">
                        <div data-aos="fade-right" data-aos-duration="1000">
                            <h1 class="text-2xl md:text-4xl lg:text-6xl font-black mb-6 leading-tight">
                                اربح أكثر مع
                                <span class="text-yellow-400 block mt-2">مهاراتك</span>
                            </h1>

                            <p class="text-xl md:text-2xl mb-8 font-bold text-gray-200 leading-relaxed">
                                انضم إلى شبكة أكبر من الفنيين المحترفين واحصل على المزيد من العملاء والدخل المستقر
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                                <button id="videoButton2"
                                    class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-provider-primary transition-all duration-300">
                                    <i class="fas fa-play ml-2"></i>
                                    شاهد قصص النجاح
                                </button>
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-6 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">5000+</div>
                                    <div class="text-sm font-bold text-gray-300">جنيه شهرياً</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">1000+</div>
                                    <div class="text-sm font-bold text-gray-300">فني نشط</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-yellow-400">24/7</div>
                                    <div class="text-sm font-bold text-gray-300">فرص عمل</div>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                            <div class="relative">
                                <div class="animate-float">
                                    <!-- Swiper Container -->
                                    <div class="swiper hero-slider mx-auto w-64 md:w-52 lg:w-68 relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/1.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/2.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/3.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/4.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/5.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full rounded-3xl shadow-2xl">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Floating Elements -->
                                <div class="absolute top-3 right-10 bg-yellow-400 text-seeker-primary p-4 rounded-2xl shadow-xl animate-bounce flex items-center justify-center"
                                    style="animation-delay: -1s; width: 64px; height: 64px;">
                                                                    <i class="fas fa-star text-2xl"></i>
                                </div>
<div class="absolute bottom-3 left-10 bg-white text-seeker-primary p-4 rounded-2xl shadow-xl animate-bounce flex items-center justify-center"
     style="animation-delay: -1s; width: 64px; height: 64px;">
    <img src="assets/provider-logo.png" 
         alt="Logo" 
         class="w-full h-full object-cover" />
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Registration Steps Section -->
            <section class="py-8 bg-gradient-to-br from-gray-50 to-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            خطوات التسجيل كمزود خدمة
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            عملية بسيطة وسريعة للانضمام إلى شبكة الفنيين المحترفين
                        </p>
                        <div
                            class="w-24 h-1 bg-gradient-to-r from-provider-primary to-provider-accent mx-auto mt-6 rounded-full">
                        </div>
                    </div>

                    <div class="max-w-6xl mx-auto">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Step 1 -->
                            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative mb-6">
                                    <div
                                        class="w-24 h-24 gradient-provider rounded-full flex items-center justify-center mx-auto mb-4 shadow-xl">
                                        <i class="fas fa-user-plus text-white text-2xl"></i>
                                    </div>
                                    <div
                                        class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 text-provider-primary rounded-full flex items-center justify-center font-bold">
                                        1
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-provider-primary mb-4">إنشاء الحساب</h3>
                                <p class="font-bold text-gray-600 leading-relaxed">سجل حسابك الشخصي وأدخل معلوماتك
                                    الأساسية
                                    والمهنية
                                </p>
                            </div>

                            <!-- Step 2 -->
                            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="relative mb-6">
                                    <div
                                        class="w-24 h-24 gradient-provider rounded-full flex items-center justify-center mx-auto mb-4 shadow-xl">
                                        <i class="fas fa-id-card text-white text-2xl"></i>
                                    </div>
                                    <div
                                        class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 text-provider-primary rounded-full flex items-center justify-center font-bold">
                                        2
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-provider-primary mb-4">التحقق من الهوية</h3>
                                <p class="font-bold text-gray-600 leading-relaxed">ارفع صور الهوية والمؤهلات المهنية
                                    للتحقق
                                    من صحتها
                                </p>
                            </div>

                            <!-- Step 3 -->
                            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                                <div class="relative mb-6">
                                    <div
                                        class="w-24 h-24 gradient-provider rounded-full flex items-center justify-center mx-auto mb-4 shadow-xl">
                                        <i class="fas fa-rocket text-white text-2xl"></i>
                                    </div>
                                    <div
                                        class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 text-provider-primary rounded-full flex items-center justify-center font-bold">
                                        3
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-provider-primary mb-4">ابدأ العمل</h3>
                                <p class="font-bold text-gray-600 leading-relaxed">استقبل طلبات العملاء وابدأ في كسب
                                    المال
                                    فوراً</p>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="500">
                            <a target="_blank" target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.freshservice.helpdesk"
                                target="_blank">
                                <button
                                    class="gradient-provider text-white px-12 py-4 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                                    ابدأ التسجيل الآن
                                </button>
                            </a>
                            <p class="font-bold text-gray-500 mt-4">التسجيل مجاني والموافقة خلال 24 ساعة</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Work Opportunities Section -->
            <section class="py-8 ">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            فرص العمل والتوسع
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            اكتشف الفرص اللامحدودة للنمو والتطور المهني مع صلحلي و شطبلي
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <!-- Opportunity Cards -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="100">
                            <div
                                class="w-16 h-16 gradient-provider rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-chart-line text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-provider-primary mb-4 text-center">نمو مستمر</h3>
                            <p class="font-bold text-gray-600 text-center mb-6">فرص لا محدودة لزيادة دخلك وتوسيع قاعدة
                                عملائك</p>
                            <ul class="space-y-2 text-sm font-bold text-gray-600">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    زيادة الطلبات مع الوقت
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    بناء سمعة مهنية قوية
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    عملاء دائمون ومتكررون
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="200">
                            <div
                                class="w-16 h-16 gradient-provider rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-clock text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-provider-primary mb-4 text-center">مرونة في العمل</h3>
                            <p class="font-bold text-gray-600 text-center mb-6">اختر أوقات عملك ومناطق خدمتك حسب ظروفك
                            </p>
                            <ul class="space-y-2 text-sm font-bold text-gray-600">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    تحديد ساعات العمل
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    اختيار مناطق الخدمة
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    إجازات حسب الحاجة
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="300">
                            <div
                                class="w-16 h-16 gradient-provider rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-graduation-cap text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-provider-primary mb-4 text-center">التدريب على التطبيق
                            </h3>
                            <p class="font-bold text-gray-600 text-center mb-6">
                                جلسات تدريبية مجانية تساعدك على استخدام التطبيق بالشكل الصحيح وزيادة أرباحك
                            </p>
                            <ul class="space-y-2 text-sm font-bold text-gray-600">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    شرح مفصل لطريقة استخدام التطبيق
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    إرشادات لزيادة فرص الحصول على طلبات
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    دعم مستمر للإجابة عن استفساراتك
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Commission System Section -->
            <section class="py-20 gradient-provider text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            نظام العمولة والجوائز
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            نظام عادل وشفاف للعمولات مع جوائز وحوافز مجزية
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <!-- Commission Cards -->
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">90%</div>
                            <h3 class="text-2xl font-bold mb-4">نسبتك من الربح</h3>
                            <p class="font-bold text-gray-200 mb-6">احتفظ بـ 90% من قيمة كل خدمة تقدمها</p>
                            <div class="bg-yellow-400/20 rounded-2xl p-4">
                                <p class="text-sm">مثال: خدمة بـ 200 جنيه = 180 جنيه لك</p>
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">فوري</div>
                            <h3 class="text-2xl font-bold mb-4">دفع الأرباح</h3>
                            <p class="font-bold text-gray-200 mb-6">احصل على أرباحك فورياً دون انتظار</p>
                            <div class="bg-yellow-400/20 rounded-2xl p-4">
                                <p class="text-sm">تحويل فوري إلى حسابك</p>
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 text-center" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">مكافآت</div>
                            <h3 class="text-2xl font-bold mb-4">جوائز الأداء</h3>
                            <p class="font-bold text-gray-200 mb-6">مكافآت شهرية للفنيين المتميزين</p>
                            <div class="bg-yellow-400/20 rounded-2xl p-4">
                                <p class="text-sm">حتى 1000 جنيه مكافأة شهرية</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bonus System -->
                    <!-- <div class="mt-16 bg-white/10 backdrop-blur-lg rounded-3xl p-8" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-3xl font-bold text-center mb-8">نظام المكافآت الإضافية</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-star text-provider-primary text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">تقييم عالي</h4>
                            <p class="text-sm font-bold text-gray-200">+50 جنيه لكل تقييم 5 نجوم</p>
                        </div>

                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-trophy text-provider-primary text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">فني الشهر</h4>
                            <p class="text-sm font-bold text-gray-200">1000 جنيه للفني المتميز</p>
                        </div>

                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-calendar text-provider-primary text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">الحضور المنتظم</h4>
                            <p class="text-sm font-bold text-gray-200">300 جنيه مكافأة شهرية</p>
                        </div>
                    </div>
                </div> -->
                </div>
            </section>

            <!-- Technician Testimonials Section -->
            <section class="py-8 bg-gradient-to-br from-white to-gray-50">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            آراء الفنيين الحاليين
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            اسمع من الفنيين أنفسهم عن تجربتهم مع صلحلي و شطبلي
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        <!-- Testimonial Cards -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="خالد أحمد"
                                    class="w-16 h-16 rounded-full object-cover ml-4 border-4 border-provider-light">
                                <div>
                                    <h4 class="font-bold font-bold text-gray-800 text-lg">خالد أحمد</h4>
                                    <p class="text-provider-primary font-semibold">فني كهرباء</p>
                                    <div class="flex text-yellow-400 text-sm mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="font-bold text-gray-600  mb-4">"منصة رائعة غيرت حياتي المهنية. زاد دخلي بنسبة 200%
                                وأصبح
                                لدي عملاء ثابتون. التطبيق سهل الاستخدام والدعم ممتاز."</p>
                            <div class="flex justify-between text-sm font-bold text-gray-500">
                                <span>عضو منذ سنتين</span>
                                <span>+500 خدمة مكتملة</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="أحمد محمد"
                                    class="w-16 h-16 rounded-full object-cover ml-4 border-4 border-provider-light">
                                <div>
                                    <h4 class="font-bold font-bold text-gray-800 text-lg">أحمد محمد</h4>
                                    <p class="text-provider-primary font-semibold">فني سباكة</p>
                                    <div class="flex text-yellow-400 text-sm mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="font-bold text-gray-600  mb-4">"أفضل قرار اتخذته في حياتي المهنية. العملاء محترمون
                                والأسعار عادلة. حصلت على مكافأة فني الشهر مرتين!"</p>
                            <div class="flex justify-between text-sm font-bold text-gray-500">
                                <span>عضو منذ 18 شهر</span>
                                <span>+350 خدمة مكتملة</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 hover-lift" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="عبدالله أحمد"
                                    class="w-16 h-16 rounded-full object-cover ml-4 border-4 border-provider-light">
                                <div>
                                    <h4 class="font-bold font-bold text-gray-800 text-lg">عبدالله أحمد</h4>
                                    <p class="text-provider-primary font-semibold">فني صيانة</p>
                                    <div class="flex text-yellow-400 text-sm mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="font-bold text-gray-600  mb-4">"كوني حديث التخرج، كنت أواجه صعوبة في العثور على
                                عمل.
                                صلحلي و
                                شطبلي وفر لي فرصة رائعة وأصبح دخلي مستقر ومجزي."</p>
                            <div class="flex justify-between text-sm font-bold text-gray-500">
                                <span>عضو منذ سنة</span>
                                <span>+280 خدمة مكتملة</span>
                            </div>
                        </div>
                    </div>

                    <!-- Success Stats -->
                    <div class="mt-16 bg-gradient-to-r from-provider-primary to-provider-accent rounded-3xl p-8 text-white"
                        data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-3xl font-bold text-center mb-8">إحصائيات نجاح فنيينا</h3>
                        <div class="grid md:grid-cols-4 gap-8 text-center">
                            <div>
                                <div class="text-4xl font-bold text-yellow-400 mb-2">95%</div>
                                <p class="font-bold text-gray-200">معدل رضا الفنيين</p>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-yellow-400 mb-2">6,000</div>
                                <p class="font-bold text-gray-200">متوسط الدخل الشهري</p>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-yellow-400 mb-2">4.8/5</div>
                                <p class="font-bold text-gray-200">تقييم الفنيين للمنصة</p>
                            </div>
                            <div>
                                <div class="text-4xl font-bold text-yellow-400 mb-2">180%</div>
                                <p class="font-bold text-gray-200">زيادة متوسط الدخل</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- App Gallery Section -->
            <section class="py-8 ">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            معرض صور التطبيق للفنيين
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            شاهد كيف يبدو تطبيق صلحلي و شطبلي للفنيين وكيف يمكنك إدارة أعمالك بسهولة
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/provider-steps/1.jpg" alt="الصفحة الرئيسية"
                                class="w-full rounded-3xl shadow-xl">
                            <h3 class="text-center mt-4 font-bold text-provider-primary">الصفحة الرئيسية</h3>
                        </div>

                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/provider-steps/2.jpg" alt="صفحة الطلبات"
                                class="w-full rounded-3xl shadow-xl">
                            <h3 class="text-center mt-4 font-bold text-provider-primary">صفحة الطلبات</h3>
                        </div>

                        <div class="hover-lift" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/provider-steps/4.jpg" alt="ملف الفني" class="w-full rounded-3xl shadow-xl">
                            <h3 class="text-center mt-4 font-bold text-provider-primary">ملف الفني</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trust Section -->
            <section class="py-8 bg-gradient-to-br from-white to-gray-50">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            لماذا يثق بنا الناس؟
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            أرقام حقيقية وشهادات تؤكد جودة خدماتنا وموثوقيتنا
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="grid md:grid-cols-4 gap-8 mb-16">
                        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-4xl md:text-5xl font-bold text-provider-primary mb-2">150+</div>
                            <p class="font-bold text-gray-600">فني محترف</p>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="text-4xl md:text-5xl font-bold text-provider-primary mb-2">8,000+</div>
                            <p class="font-bold text-gray-600">عميل راضي</p>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="text-4xl md:text-5xl font-bold text-provider-primary mb-2">15,000+</div>
                            <p class="font-bold text-gray-600">خدمة مكتملة</p>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="text-4xl md:text-5xl font-bold text-provider-primary mb-2">4.9/5</div>
                            <p class="font-bold text-gray-600">تقييم المنصة</p>
                        </div>
                    </div>

                    <!-- Trust Badges -->
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="100">
                            <div
                                class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold font-bold text-gray-800 mb-4">أمان مضمون</h3>
                            <p class="font-bold text-gray-600">جميع الفنيين مؤمن عليهم ومعتمدون من الجهات المختصة</p>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="200">
                            <div
                                class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-award text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold font-bold text-gray-800 mb-4">جودة معتمدة</h3>
                            <p class="font-bold text-gray-600">معايير صارمة لضمان أعلى مستوى من الجودة والاحترافية</p>
                        </div>

                        <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover-lift" data-aos="fade-up"
                            data-aos-delay="300">
                            <div
                                class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-headset text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold font-bold text-gray-800 mb-4">دعم 24/7</h3>
                            <p class="font-bold text-gray-600">فريق دعم متخصص متاح على مدار الساعة لمساعدتك</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Story Section -->
            <section class="py-20 gradient-provider text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            قصتنا
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-3xl mx-auto font-bold">
                            رحلة بدأت بحلم بسيط وتطورت لتصبح منصة رائدة في الخدمات المنزلية
                        </p>
                    </div>

                    <div class="max-w-4xl mx-auto">
                        <div class="relative">
                            <!-- Timeline Line -->
                            <div
                                class="absolute right-1/2 transform translate-x-1/2 w-1 h-full bg-yellow-400 hidden md:block">
                            </div>

                            <!-- Timeline Items -->
                            <div class="space-y-12">
                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-right">
                                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2022 - البداية</h3>
                                            <p class="font-bold text-gray-200">بدأت الفكرة من رؤية لربط الفنيين المهرة
                                                بالعملاء الذين
                                                يحتاجون خدماتهم.</p>
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 md:pl-8"></div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-left">
                                    <div class="md:w-1/2 md:pr-8"></div>
                                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2023 - الإطلاق</h3>
                                            <p class="font-bold text-gray-200">إطلاق النسخة الأولى من المنصة مع 100 فني
                                                في
                                                القاهرة.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-right">
                                    <div class="md:w-1/2 md:pr-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2024 - التوسع</h3>
                                            <p class="font-bold text-gray-200">توسعنا لتشمل 5 مدن رئيسية مع 500 فني
                                                محترف.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="md:w-1/2 md:pl-8"></div>
                                </div>

                                <div class="flex flex-col md:flex-row items-center" data-aos="fade-left">
                                    <div class="md:w-1/2 md:pr-8"></div>
                                    <div class="md:w-1/2 md:pl-8 mb-4 md:mb-0">
                                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                                            <h3 class="text-2xl font-bold mb-4">2025 - الرؤية الجديدة</h3>
                                            <p class="font-bold text-gray-200">إطلاق تطبيق صلحلي وشطبلي بشكله الجديد
                                                لتوفير
                                                تجربة أسهل</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-8">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            الأسئلة الشائعة
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            إجابات على أكثر الأسئلة شيوعاً حول العمل كمزود خدمة
                        </p>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="space-y-4">

                            <!-- السؤال 1 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="100">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>1. كيف أنضم كمقدم خدمة على التطبيق؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>كل ما عليك هو تحميل تطبيق مقدم الخدمة، تعبئة نموذج التسجيل بالمعلومات المطلوبة،
                                        وانتظار موافقة الإدارة بعد مراجعة بياناتك.</p>
                                </div>
                            </div>

                            <!-- السؤال 2 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="200">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>2. هل أحتاج إلى شهادة أو ترخيص للعمل؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، يُفضل وجود شهادة مهنية أو خبرة موثوقة في المجال لضمان الجودة والثقة. قد
                                        يُطلب منك رفع أوراقك أثناء التسجيل.</p>
                                </div>
                            </div>

                            <!-- السؤال 3 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="300">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>3. كيف أستقبل الطلبات؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>بمجرد تفعيل حسابك، ستصلك إشعارات بالطلبات المتاحة في منطقتك. يمكنك قبول أو رفض
                                        الطلب حسب التوفر.</p>
                                </div>
                            </div>

                            <!-- السؤال 4 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="400">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>4. كيف يتم تحديد سعر الخدمة؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>السعر يحدد حسب نوع الخدمة والمساحة أو الوقت. التطبيق يعرض سعراً مبدئياً، ويمكنك
                                        تعديل السعر بناءً على المعاينة بشرط الشفافية.</p>
                                </div>
                            </div>

                            <!-- السؤال 5 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="500">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>5. متى يتم استلام الأرباح؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>تحول الأرباح إلى حسابك أسبوعياً أو شهرياً حسب إعدادات الدفع. يمكنك متابعة أرباحك
                                        من داخل التطبيق.</p>
                                </div>
                            </div>

                            <!-- السؤال 6 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="600">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>6. ماذا يحدث إذا تأخرت أو ألغيت الطلب؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>التأخير أو الإلغاء المتكرر يؤثر على تقييمك، وقد يؤدي إلى تعليق الحساب مؤقتاً أو
                                        دائماً.</p>
                                </div>
                            </div>

                            <!-- السؤال 7 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="700">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>7. هل يمكنني التواصل مع العميل؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، يتم تفعيل إمكانية التواصل مع العميل بعد قبول الطلب لتأكيد التفاصيل.</p>
                                </div>
                            </div>

                            <!-- السؤال 8 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="800">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>8. هل يمكنني إيقاف استقبال الطلبات مؤقتاً؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، يمكنك تفعيل وضع "غير متاح" في التطبيق مؤقتاً.</p>
                                </div>
                            </div>

                            <!-- السؤال 9 -->
                            <div class="faq-item bg-white rounded-2xl shadow-lg" data-aos="fade-up"
                                data-aos-delay="900">
                                <button
                                    class="w-full text-right p-6 font-bold text-lg flex justify-between items-center hover:bg-gray-50 rounded-2xl transition-colors"
                                    onclick="toggleFAQ(this)">
                                    <span>9. هل توجد عمولة؟</span>
                                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                                </button>
                                <div class="faq-answer mt-2 hidden px-6 pb-6 font-bold text-gray-600">
                                    <p>نعم، التطبيق يخصم نسبة محددة من كل طلب مكتمل، وتوضح النسبة داخل حسابك.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <!-- Download App Section -->
            <section class="py-8">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold text-provider-primary mb-6">
                            حمّل التطبيق الآن
                        </h2>
                        <p class="text-xl font-bold text-gray-600 max-w-3xl mx-auto font-bold">
                            ابدأ رحلتك كمزود خدمة مع صلحلي و شطبلي واربح المزيد من خلال مهاراتك
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                        <div data-aos="fade-right">
                            <div class="text-center lg:text-right">
                                <h3 class="text-3xl font-bold text-provider-primary mb-6">متاح على جميع المنصات</h3>
                                <p class="text-lg font-bold text-gray-600 mb-8">حمّل تطبيق الفنيين مجاناً وابدأ في كسب
                                    المال
                                    اليوم</p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <a target="_blank" target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.freshservice.helpdesk"
                                        target="_blank"
                                        class="bg-black text-white px-8 py-4 rounded-2xl flex items-center hover:bg-gray-800 transition-colors">
                                        <i class="fab fa-google-play text-2xl ml-4"></i>
                                        <div class="text-right">
                                            <div class="text-sm">متاح على</div>
                                            <div class="text-lg font-bold">Google Play</div>
                                        </div>
                                    </a>

                                    <a target="_blank" target="_blank"
                                        href="https://apps.apple.com/eg/app/%D9%85%D9%82%D8%AF%D9%85-%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D9%87/id6444220896"
                                        target="_blank"
                                        class="bg-black text-white px-8 py-4 rounded-2xl flex items-center hover:bg-gray-800 transition-colors">
                                        <i class="fab fa-apple text-2xl ml-4"></i>
                                        <div class="text-right">
                                            <div class="text-sm">حمّل من</div>
                                            <div class="text-lg font-bold">App Store</div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="mt-8 flex items-center justify-center lg:justify-start space-x-4 space-x-reverse">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="font-bold text-gray-600">4.8 من 5 نجوم</span>
                                    <span class="font-bold text-gray-400">|</span>
                                    <span class="font-bold text-gray-600">+50,000 تحميل</span>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-left">
                            <div class="relative">
                                <div class="animate-float">
                                    <!-- Swiper Container -->
                                    <div class="swiper download-slider mx-auto max-w-[250px] w-full relative">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/6.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/7.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/8.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/9.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/provider-splash/10.jpg" alt="تطبيق صلحلي و شطبلي"
                                                    class="w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Floating Elements -->
                                <div
                                    class="absolute top-2 right-10 bg-provider-primary text-white p-4 rounded-2xl shadow-xl animate-bounce">
                                    <i class="fas fa-download text-2xl"></i>
                                </div>
                                <div class="absolute bottom-2 left-10 bg-yellow-400 text-provider-primary p-4 rounded-2xl shadow-xl animate-bounce"
                                    style="animation-delay: -1s;">
                                    <i class="fas fa-mobile-alt text-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Withdraw Methods Section -->
            <section class="py-20 gradient-provider text-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            طرق سحب الفلوس
                        </h2>
                        <p class="text-xl font-bold text-gray-200 max-w-2xl mx-auto">
                            وفرنالك أكتر من طريقة تقدر تستلم بيها أرباحك بكل سهولة
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                        <!-- Bank Transfer -->
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 text-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <i class="fas fa-university text-yellow-400 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-bold mb-2">حوالة بنكية</h3>
                            <p class="text-gray-200">استلم فلوسك مباشرة في حسابك البنكي.</p>
                        </div>

                        <!-- Mobile Wallet -->
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 text-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <i class="fas fa-mobile-alt text-yellow-400 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-bold mb-2">محافظ إلكترونية</h3>
                            <p class="text-gray-200">زي فودافون كاش، أورانج كاش واتصالات كاش.</p>
                        </div>

                        <!-- E-Wallets -->
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 text-center" data-aos="fade-up"
                            data-aos-delay="300">
                            <i class="fas fa-wallet text-yellow-400 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-bold mb-2">محافظ رقمية</h3>
                            <p class="text-gray-200">زي PayPal وغيرها من المحافظ الرقمية.</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Footer -->
            <footer class="bg-gray-900 text-white py-16">
                <div class="container mx-auto px-4">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <!-- Company Info -->
                        <div>
<div class="text-3xl font-bold mb-6 flex items-center">
    <img src="assets/logo-rect.png" 
         alt="Logo" 
         class="w-8 h-8 object-contain ml-2" />
    صلحلي و شطبلي
</div>

                            <p class="font-bold text-gray-400 mb-6">
                                منصة الخدمات المنزلية الذكية - فرص عمل مجزية للفنيين المحترفين
                            </p>

                            <!-- Social Media -->
                            <div class="flex space-x-4 space-x-reverse mb-6">
                                <a target="_blank" target="_blank"
                                    href="https://www.facebook.com/share/19CCz5zUgv/?mibextid=wwXIfr"
                                    class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank" target="_blank"
                                    href="https://www.instagram.com/sal7lywshtbly_/?igsh=ZHd6ZGZueXR4aDRx#"
                                    class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a target="_blank" target="_blank"
                                    href="https://www.tiktok.com/@sal7lywshtbly?_t=ZS-8yWFiPGVsme&_r=1"
                                    class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                                <a target="_blank"
                                href="https://t.snapchat.com/JJBLatn0"
                                class="w-10 h-10 bg-[#FFFC00] rounded-full flex items-center justify-center hover:brightness-90 transition-colors">
                                    <i class="fab fa-snapchat-ghost text-black"></i>
                                </a>
                                <a target="_blank"
                                href="https://x.com/sal7lywshtbly"
                                class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </div>

                            <!-- Extra Links -->
                            <div class="flex flex-col space-y-2 text-sm font-bold text-gray-500">
                                <a href="/provider/about" class="hover:text-yellow-500 transition-colors">عن
                                    التطبيق</a>
                                <a href="/provider/terms" class="hover:text-yellow-500 transition-colors">الشروط
                                    والأحكام</a>
                                <a href="/provider/privacy" class="hover:text-yellow-500 transition-colors">سياسة
                                    الخصوصية</a>
                            </div>
                        </div>


                        <!-- Legal -->
                        <div>
                            <h3 class="text-xl font-bold mb-6">إذاي توصلنا</h3>
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="w-full h-40 overflow-hidden rounded-lg">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.1281758981245!2d31.331672274357175!3d30.061860217747554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e68544103d7%3A0x4630d66ad1be6372!2s31%20El%20Batrawy%2C%20Al%20Manteqah%20Al%20Oula%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1754158359155!5m2!1sen!2seg"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade" class="w-full h-full rounded-lg">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Contact & Map -->
                        <div>
                            <h3 class="text-xl font-bold mb-6">تواصل معنا</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center">
                                    <i class="fas fa-phone text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="tel:01279818888">01279818888</a></span></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-brands fa-whatsapp text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="https://wa.me/+201096013034">01096013034</a></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400"><a target="_blank" target="_blank"
                                            href="mailto:sshatblii.dev@gmail.com">sshatblii.dev@gmail.com</a></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-yellow-400 ml-3"></i>
                                    <span class="font-bold text-gray-400">31 شارع البطراوي , ش. عباس العقاد , القاهرة -
                                        مصر</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Back Button -->
        <button id="back-btn"
            class="h-10 w-10 hidden fixed top-6 right-6 z-50 bg-white font-bold text-gray-800 rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 font-bold flex items-center justify-center"
            onclick="goBack()">
            <i class="fas fa-home"></i>
        </button>
    </div>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });

        // Initialize Swiper
        const servicesSwiper = new Swiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // User Type Selection
        function selectUserType(type) {
            const selectionScreen = document.getElementById('selection-screen');
            const seekerContent = document.getElementById('seeker-content');
            const providerContent = document.getElementById('provider-content');
            const backBtn = document.getElementById('back-btn');
            const scrollToTopBtn = document.getElementById('scroll-to-top');
            const scrollToTopBtn2 = document.getElementById('scroll-to-top2');
            const floatingApps = document.getElementById('floating-apps');
            const googlePlayLink = document.getElementById('google-play-link');
            const appStoreLink = document.getElementById('app-store-link');

            // Update floating app links based on user type
            if (type === 'seeker') {
                googlePlayLink.href = 'https://play.google.com/store/apps/details?id=com.alberto.صلحلي و شطبلي';
                appStoreLink.href = 'https://apps.apple.com/eg/app/%D8%B5%D9%84%D8%AD%D9%84%D9%8A-%D9%88%D8%B4%D8%B7%D8%A8%D9%84%D9%8A/id6444220490';
                floatingApps.className = 'floating-apps';
                googlePlayLink.className = 'app-icon gradient-seeker';
                appStoreLink.className = 'app-icon gradient-seeker';
            } else {
                googlePlayLink.href = 'https://play.google.com/store/apps/details?id=com.freshservice.helpdesk';
                appStoreLink.href = 'https://apps.apple.com/eg/app/%D9%85%D9%82%D8%AF%D9%85-%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D9%87/id6444220896';
                floatingApps.className = 'floating-apps';
                googlePlayLink.className = 'app-icon gradient-provider';
                appStoreLink.className = 'app-icon gradient-provider';
            }

            // Hide selection screen with smooth transition
            selectionScreen.style.opacity = '0';
            selectionScreen.style.transform = 'scale(0.95)';

            setTimeout(() => {
                selectionScreen.classList.add('hidden');

                if (type === 'seeker') {
                    seekerContent.classList.remove('hidden');
                    seekerContent.style.opacity = '0';
                    setTimeout(() => {
                        seekerContent.style.opacity = '1';
                    }, 100);
                } else {
                    providerContent.classList.remove('hidden');
                    providerContent.style.opacity = '0';
                    setTimeout(() => {
                        providerContent.style.opacity = '1';
                    }, 100);
                }

                backBtn.classList.remove('hidden');
                scrollToTopBtn.classList.remove('hidden');
                scrollToTopBtn2.classList.remove('hidden');

                // Reinitialize AOS for new content
                setTimeout(() => {
                    AOS.refresh();
                }, 300);

            }, 600);
        }

        // Go Back Function
        function goBack() {
            const selectionScreen = document.getElementById('selection-screen');
            const seekerContent = document.getElementById('seeker-content');
            const providerContent = document.getElementById('provider-content');
            const backBtn = document.getElementById('back-btn');

            // Hide current content
            seekerContent.style.opacity = '0';
            providerContent.style.opacity = '0';

            setTimeout(() => {
                seekerContent.classList.add('hidden');
                providerContent.classList.add('hidden');
                backBtn.classList.add('hidden');

                // Show selection screen
                selectionScreen.classList.remove('hidden');
                selectionScreen.style.opacity = '0';
                selectionScreen.style.transform = 'scale(0.95)';

                setTimeout(() => {
                    selectionScreen.style.opacity = '1';
                    selectionScreen.style.transform = 'scale(1)';
                }, 100);

            }, 400);
        }

        // FAQ Toggle Function
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('i');
            const allFAQs = document.querySelectorAll('.faq-item');

            // Close all other FAQs
            allFAQs.forEach(faq => {
                const otherAnswer = faq.querySelector('.faq-answer');
                const otherIcon = faq.querySelector('i');
                if (otherAnswer !== answer && !otherAnswer.classList.contains('hidden')) {
                    otherAnswer.classList.add('hidden');
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Initialize Google Map (placeholder)
        function initMap() {
            // This would initialize a real Google Map
            console.log('Google Map would be initialized here');
        }

        // Smooth scrolling for anchor links
        document.addEventListener('DOMContentLoaded', function () {
            // Add smooth scrolling behavior
            document.documentElement.style.scrollBehavior = 'smooth';

            // Add intersection observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all sections for scroll animations
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });

            // Add loading animation
            window.addEventListener('load', function () {
                document.body.style.opacity = '1';
            });
        });

        // Add parallax effect to background elements
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.animate-float');

            parallaxElements.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v18.0"></script>

    <!-- AOS Library -->

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out-cubic',
            once: true
        });

        // Modal Elements
        const videoButton = document.getElementById('videoButton');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const modalContent = document.getElementById('modalContent');
        const closeModal = document.getElementById('closeModal');

        const videoButton2 = document.getElementById('videoButton2');
        const modalBackdrop2 = document.getElementById('modalBackdrop2');
        const modalContent2 = document.getElementById('modalContent2');
        const closeModal2 = document.getElementById('closeModal2');

        // Show Modal Function
        function showModal() {
            modalBackdrop.classList.remove('hidden');
            modalBackdrop.classList.remove('backdrop-exit-active');
            modalContent.classList.remove('modal-exit-active');

            // Force reflow
            modalBackdrop.offsetHeight;

            modalBackdrop.classList.add('backdrop-enter-active');
            modalContent.classList.add('modal-enter-active');

            document.body.style.overflow = 'hidden';
        }

        // Hide Modal Function
        function hideModal() {
            modalBackdrop.classList.remove('backdrop-enter-active');
            modalContent.classList.remove('modal-enter-active');

            modalBackdrop.classList.add('backdrop-exit-active');
            modalContent.classList.add('modal-exit-active');

            // Stop the video by reloading the iframe
            const iframe = document.getElementById('facebookVideo');
            const iframeSrc = iframe.src;
            iframe.src = '';

            setTimeout(() => {
                modalBackdrop.classList.add('hidden');
                modalBackdrop.classList.remove('backdrop-exit-active');
                modalContent.classList.remove('modal-exit-active');
                document.body.style.overflow = '';
                // Restore iframe src for next time
                iframe.src = iframeSrc;
            }, 300);
        }


        // Show Modal Function
        function showModal2() {
            modalBackdrop2.classList.remove('hidden');
            modalBackdrop2.classList.remove('backdrop-exit-active');
            modalContent2.classList.remove('modal-exit-active');

            // Force reflow
            modalBackdrop2.offsetHeight;

            modalBackdrop2.classList.add('backdrop-enter-active');
            modalContent2.classList.add('modal-enter-active');

            document.body.style.overflow = 'hidden';
        }

        // Hide Modal Function
        function hideModal2() {
            modalBackdrop2.classList.remove('backdrop-enter-active');
            modalContent2.classList.remove('modal-enter-active');

            modalBackdrop2.classList.add('backdrop-exit-active');
            modalContent2.classList.add('modal-exit-active');

            // Stop the video by reloading the iframe
            const iframe = document.getElementById('facebookVideo2');
            const iframeSrc = iframe.src;
            iframe.src = '';

            setTimeout(() => {
                modalBackdrop2.classList.add('hidden');
                modalBackdrop2.classList.remove('backdrop-exit-active');
                modalContent2.classList.remove('modal-exit-active');
                document.body.style.overflow = '';
                // Restore iframe src for next time
                iframe.src = iframeSrc;
            }, 300);
        }

        // Event Listeners
        videoButton.addEventListener('click', showModal);
        closeModal.addEventListener('click', hideModal);

        // Event Listeners
        videoButton2.addEventListener('click', showModal2);
        closeModal2.addEventListener('click', hideModal2);

        // Close modal when clicking on backdrop
        modalBackdrop.addEventListener('click', function (e) {
            if (e.target === modalBackdrop) {
                hideModal();
            }
        });

        // Prevent modal from closing when clicking on the modal content
        modalContent.addEventListener('click', function (e) {
            e.stopPropagation();
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                hideModal();
            }
        });

        // Prevent modal from closing when clicking on the modal content
        modalContent2.addEventListener('click', function (e) {
            e.stopPropagation();
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                hideModal2();
            }
        });

        // Initialize Facebook SDK after page load
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        // Add smooth scrolling and additional effects
        document.addEventListener('DOMContentLoaded', function () {
            // Add pulse effect to button
            setInterval(() => {
                if (!modalBackdrop.classList.contains('backdrop-enter-active')) {
                    videoButton.classList.add('animate-pulse');
                    setTimeout(() => {
                        videoButton.classList.remove('animate-pulse');
                    }, 1000);
                }
            }, 5000);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // تهيئة AOS
            AOS.init();

            const logoButton = document.getElementById('logoButton');
            const closeButton = document.getElementById('closeButton');
            const modalMenu = document.getElementById('modalMenu');
            const modalOverlay = document.getElementById('modalOverlay');

            // التحقق من وجود العناصر
            if (!logoButton || !closeButton || !modalMenu || !modalOverlay) {
                console.error('One or more elements not found:', { logoButton, closeButton, modalMenu, modalOverlay });
                return;
            }

            // وظيفة لفتح المنيو
            const openMenu = () => {
                modalMenu.classList.remove('hidden');
                modalOverlay.classList.remove('hidden');
                logoButton.classList.add('hidden'); // إخفاء زر البرجر
                // closeButton.classList.remove('hidden'); // إظهار زر الإغلاق
                AOS.refresh(); // تحديث AOS
            };

            // وظيفة لإغلاق المنيو
            const closeMenu = () => {
                modalMenu.classList.add('hidden');
                modalOverlay.classList.add('hidden');
                logoButton.classList.remove('hidden'); // إظهار زر البرجر
                closeButton.classList.add('hidden'); // إخفاء زر الإغلاق
            };

            // الضغط على زر البرجر لفتح المنيو
            logoButton.addEventListener('click', (event) => {
                event.stopPropagation();
                openMenu();
            });

            // الضغط على زر الإغلاق (X) لإغلاق المنيو
            closeButton.addEventListener('click', (event) => {
                event.stopPropagation();
                closeMenu();
            });

            // إغلاق المنيو عند النقر على أي رابط داخل القائمة
            modalMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    closeMenu();
                });
            });
        });
    </script>


    <script>
        // Initialize Swiper for testimonials
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof Swiper !== 'undefined') {
                new Swiper('.testimonials-slider .swiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 16,
                            centeredSlides: true,
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                            centeredSlides: false,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 24,
                            centeredSlides: false,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                            centeredSlides: false,
                        },
                    },
                });
            }
        });
    </script>

    <script>
        // Initialize the hero slider
        const heroSlider = new Swiper('.hero-slider', {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'slide',
            speed: 300,
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 0,
        });
    </script>

    <script>
        // Initialize the download section slider
        const downloadSlider = new Swiper('.download-slider', {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.download-slider .swiper-button-next',
                prevEl: '.download-slider .swiper-button-prev',
            },
            effect: 'slide',
            speed: 300,
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 0,
        });
    </script>

    <style>
        .testimonials-slider .swiper-slide {
            height: auto;
            min-height: 200px;
        }

        .testimonials-slider .swiper-slide>div {
            height: 100%;
        }

        .testimonials-slider .swiper {
            padding: 0 20px;
        }

        @media (max-width: 640px) {
            .testimonials-slider .swiper {
                padding: 0 10px;
                overflow: hidden;
            }

            .testimonials-slider {
                margin: 0 -20px;
            }
        }

        .testimonials-slider .swiper-button-next,
        .testimonials-slider .swiper-button-prev {
            color: #2563eb;
            background: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-top: -20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .testimonials-slider .swiper-button-next:hover,
        .testimonials-slider .swiper-button-prev:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .testimonials-slider .swiper-button-next:after,
        .testimonials-slider .swiper-button-prev:after {
            font-size: 16px;
            font-weight: bold;
        }

        .testimonials-slider .swiper-pagination {
            bottom: -50px;
        }

        .testimonials-slider .swiper-pagination-bullet {
            background: #2563eb;
            opacity: 0.3;
        }

        .testimonials-slider .swiper-pagination-bullet-active {
            opacity: 1;
        }

        @media (max-width: 768px) {

            .testimonials-slider .swiper-button-next,
            .testimonials-slider .swiper-button-prev {
                display: none;
            }
        }
    </style>
</body>

</html>