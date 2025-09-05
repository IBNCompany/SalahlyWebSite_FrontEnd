<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عن التطبيق - تطبيق مقدم الخدمة</title>

    <meta name="title" content="{{ $settings['meta_title'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="description" content="{{ $settings['meta_description'] ?? 'منصة الخدمات المنزلية الذكية' }}">
    <meta name="keywords" content="{{ $settings['meta_keywords'] ?? '' }}">


  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- AOS Animation Library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Tailwind Config -->
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
<body class="bg-provider-light font-cairo">
  <div class="min-h-screen flex flex-col items-center justify-center px-4">
    
    <!-- الكارت -->
    <div class="bg-white shadow-xl rounded-3xl p-8 w-full max-w-lg animate-fade-in-up" data-aos="fade-up">
      <h1 class="text-3xl font-bold text-provider-primary mb-6 text-center">
        عن التطبيق – تطبيق مقدم الخدمة
      </h1>

      <p class="text-gray-600 leading-relaxed mb-6 text-center font-medium">
        "صلّحلي وشطّبلي" هو تطبيق يساعد مقدّمي خدمات الصيانة والتشطيب على الوصول إلى العملاء بسهولة،
        وإدارة الطلبات، وزيادة الدخل من خلال منصة ذكية وآمنة.
      </p>

      <h2 class="text-xl font-semibold text-provider-dark mb-4">مزايا التطبيق:</h2>
      <ul class="space-y-3 text-gray-700 font-medium">
        <li class="flex items-center">
          <i class="fas fa-check text-provider-primary ml-2"></i>
          استقبال الطلبات في منطقتك
        </li>
        <li class="flex items-center">
          <i class="fas fa-check text-provider-primary ml-2"></i>
          إدارة جدول أعمالك
        </li>
        <li class="flex items-center">
          <i class="fas fa-check text-provider-primary ml-2"></i>
          أرباح أسبوعية
        </li>
        <li class="flex items-center">
          <i class="fas fa-check text-provider-primary ml-2"></i>
          دعم فني مستمر
        </li>
      </ul>

      <!-- زر الرجوع -->
      <div class="mt-8 text-center">
        <a href="{{ route('home') }}">
          <button
            class="bg-provider-primary text-white px-8 py-3 rounded-xl shadow-lg hover:bg-provider-accent transition duration-300">
            رجوع
          </button>
        </a>
      </div>
    </div>

  </div>

  <script>
    AOS.init();
  </script>
</body>
</html>
