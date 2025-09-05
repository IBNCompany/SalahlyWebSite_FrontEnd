<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عن التطبيق – تطبيق المستخدم</title>

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

<body class="bg-gray-50 font-cairo">

  <div class="max-w-3xl mx-auto p-8 mt-10 bg-white rounded-3xl shadow-xl" data-aos="fade-up">

    <!-- العنوان -->
    <h1 class="text-3xl font-bold text-seeker-primary mb-6 text-center flex items-center justify-center gap-2">
      <i class="fas fa-tools text-yellow-400"></i>
      عن التطبيق – تطبيق المستخدم
    </h1>

    <!-- الوصف -->
    <p class="text-gray-600 font-bold mb-8 text-center leading-relaxed">
      "صلّحلي وشطّبلي" هو تطبيق ذكي يساعدك في الوصول إلى أفضل الفنيين المتخصصين في أعمال الصيانة والتشطيب.
      كل ما عليك هو تحديد نوع الخدمة والموقع والوقت، وسنقوم بتوصيلك بأقرب مقدم خدمة محترف.
    </p>

    <!-- المميزات -->
    <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">مميزات التطبيق:</h2>
    <ul class="space-y-4 text-gray-600 font-bold">
      <li class="flex items-center" data-aos="fade-up" data-aos-delay="100">
        <i class="fas fa-check text-green-500 ml-2"></i> حجز سريع وسهل
      </li>
      <li class="flex items-center" data-aos="fade-up" data-aos-delay="200">
        <i class="fas fa-check text-green-500 ml-2"></i> فنيين موثوقين
      </li>
      <li class="flex items-center" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-check text-green-500 ml-2"></i> دعم عملاء
      </li>
      <li class="flex items-center" data-aos="fade-up" data-aos-delay="400">
        <i class="fas fa-check text-green-500 ml-2"></i> تقييمات حقيقية
      </li>
    </ul>

    <!-- زر الرجوع -->
    <div class="mt-10 text-center">
      <a href="{{ route('home') }}">
        <button
          class="px-6 py-3 bg-seeker-primary text-white font-bold rounded-xl shadow hover:bg-seeker-accent transition-colors">
          <i class="fas fa-arrow-right ml-2"></i> رجوع
        </button>
      </a>
    </div>

  </div>

  <script>
    AOS.init();
  </script>

</body>

</html>