<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة التحكم')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(7, 10, 127, 0.3); }
            50% { box-shadow: 0 0 40px rgba(7, 10, 127, 0.6); }
        }
        
        @keyframes slide-up {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes fade-in-up {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes bounce-in {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }

        .sidebar-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sidebar-item:hover {
            background: linear-gradient(135deg, rgba(7, 10, 127, 0.1), rgba(8, 139, 107, 0.1));
            transform: translateX(-4px);
        }

        .sidebar-item.active {
            background: linear-gradient(135deg, #070a7f, #088b6b);
            color: white;
            box-shadow: 0 4px 15px rgba(7, 10, 127, 0.3);
        }

        .card-gradient {
            background: linear-gradient(145deg, rgba(255,255,255,0.9), rgba(255,255,255,0.7));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .stats-card {
            background: linear-gradient(135deg, #070a7f, #088b6b);
            position: relative;
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }

        .table-hover tr:hover {
            background-color: rgba(7, 10, 127, 0.05);
            transform: scale(1.01);
            transition: all 0.2s ease;
        }
    </style>

    @stack('styles')
</head>
<body class="font-cairo bg-gradient-to-br from-seeker-light via-white to-provider-light min-h-screen">
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden"></div>
    
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed right-0 top-0 h-full w-64 bg-white shadow-2xl transform translate-x-full lg:translate-x-0 transition-transform duration-300 z-50">
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center space-x-3 space-x-reverse">
<div class="w-10 h-10 rounded-lg overflow-hidden flex items-center justify-center">
    <img src="{{ asset('assets/new-logo.png') }}" alt="Logo" class="w-full h-full object-contain">
</div>

                <div>
                    <h2 class="text-xl font-bold text-gray-800">لوحة التحكم</h2>
                    <p class="text-sm text-gray-500">إدارة صلحلي و شطبلي</p>
                </div>
            </div>
        </div>
        
        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.home') }}" class="sidebar-item flex items-center space-x-3 space-x-reverse p-3 rounded-lg {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                <i class="fas fa-home text-lg w-5"></i>
                <span class="font-medium">الصفحة الرئيسية</span>
            </a>
            
            <a href="{{ route('admin.settings') }}" class="sidebar-item flex items-center space-x-3 space-x-reverse p-3 rounded-lg {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <i class="fas fa-cog text-lg w-5"></i>
                <span class="font-medium">إعدادات الموقع</span>
            </a>
            
            <a href="{{ route('admin.blog-sections.index') }}" class="sidebar-item flex items-center space-x-3 space-x-reverse p-3 rounded-lg {{ request()->routeIs('admin.blog-sections.*') ? 'active' : '' }}">
                <i class="fas fa-folder text-lg w-5"></i>
                <span class="font-medium">أقسام المقالات</span>
            </a>
            
            <a href="{{ route('admin.blogs.index') }}" class="sidebar-item flex items-center space-x-3 space-x-reverse p-3 rounded-lg {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                <i class="fas fa-newspaper text-lg w-5"></i>
                <span class="font-medium">المقالات</span>
            </a>

            @if(auth()->user()->is_super_admin)
            <a href="{{ route('admin.users.index') }}" class="sidebar-item flex items-center space-x-3 space-x-reverse p-3 rounded-lg {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="fas fa-users text-lg w-5"></i>
                <span class="font-medium">المسؤولين</span>
            </a>
            @endif
        </nav>
        
        <!-- User Info -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-100">
            <div class="flex items-center space-x-3 space-x-reverse">
                <div class="w-8 h-8 bg-gradient-to-br from-seeker-primary to-provider-primary rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-sm"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="lg:mr-64 min-h-screen">
        <!-- Top Navigation -->
<header class="bg-white/80 backdrop-blur-sm border-b border-gray-100 sticky top-0 z-30 lg:hidden">
    <div class="px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4 space-x-reverse">
                <button id="mobile-menu" class="p-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-bars text-xl text-gray-600"></i>
                </button>
            </div>
        </div>
    </div>
</header>


        <!-- Page Content -->
        <div class="p-6">
            <div class="animate-fade-in-up">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Background Decorations -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-br from-seeker-primary/5 to-provider-primary/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-gradient-to-tr from-provider-primary/5 to-seeker-primary/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobile-overlay');

        mobileMenu.addEventListener('click', () => {
            sidebar.classList.toggle('translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('translate-x-full');
            overlay.classList.add('hidden');
        });

        // Close sidebar on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('translate-x-full');
                overlay.classList.add('hidden');
            }
        });
    </script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'نجاح',
        text: '{{ session('success') }}',
        confirmButtonText: 'حسناً'
    })
</script>
@endif

    @stack('scripts')
</body>
</html>