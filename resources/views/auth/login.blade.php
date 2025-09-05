<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
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

        .card-gradient {
            background: linear-gradient(145deg, rgba(255,255,255,0.9), rgba(255,255,255,0.7));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            box-shadow: 0 0 15px rgba(7, 10, 127, 0.2);
            border-color: #070a7f;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #070a7f, #088b6b);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(7, 10, 127, 0.3);
        }
    </style>
</head>
<body class="font-cairo bg-gradient-to-br from-seeker-light via-white to-provider-light min-h-screen flex items-center justify-center p-4">
    <!-- Background Decorations -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-seeker-primary/5 to-provider-primary/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-provider-primary/5 to-seeker-primary/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
    </div>

    <!-- Login Card -->
    <div class="w-full max-w-md card-gradient rounded-2xl shadow-2xl p-8 animate-fade-in-up">
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 rounded-lg overflow-hidden flex items-center justify-center">
                <img src="{{ asset('assets/new-logo.png') }}" alt="Logo" class="w-full h-full object-contain">
            </div>
        </div>
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">تسجيل الدخول</h2>
        
        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600 mb-2">البريد الإلكتروني</label>
                <div class="relative">
                    <i class="fas fa-envelope absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="email" name="email" id="email" 
                           class="input-field w-full p-3 pr-10 rounded-lg border border-gray-200 focus:outline-none focus:border-seeker-primary"
                           placeholder="أدخل بريدك الإلكتروني" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600 mb-2">كلمة المرور</label>
                <div class="relative">
                    <i class="fas fa-lock absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="password" name="password" id="password" 
                           class="input-field w-full p-3 pr-10 rounded-lg border border-gray-200 focus:outline-none focus:border-seeker-primary"
                           placeholder="أدخل كلمة المرور" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn-gradient w-full p-3 rounded-lg text-white font-medium flex items-center justify-center space-x-2 space-x-reverse">
                <i class="fas fa-sign-in-alt"></i>
                <span>تسجيل الدخول</span>
            </button>
        </form>
    </div>

    <!-- SweetAlert for Session Messages -->
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'خطأ',
            text: '{{ session('error') }}',
            confirmButtonText: 'حسناً'
        })
    </script>
    @endif

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
</body>
</html>