<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سياسة الخصوصية – تطبيق مقدم الخدمة | صلّحلي وشطّبلي</title>

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

<body class="font-cairo bg-gray-50 text-gray-800">

  <!-- Main Container -->
  <div class="max-w-4xl mx-auto p-6" data-aos="fade-up">

    <!-- Title -->
    <h1 class="text-3xl font-bold text-provider-primary mb-6 text-center">
      سياسة الخصوصية – تطبيق مقدم الخدمة "صلّحلي وشطّبلي"
    </h1>

    <!-- Intro -->
    <p class="text-lg text-gray-600 mb-6 text-center">
      نلتزم في تطبيق <span class="font-bold">"صلّحلي وشطّبلي"</span> بحماية بياناتك الشخصية وضمان سرّيتها. باستخدامك للتطبيق فأنت توافق على سياسة الخصوصية التالية.
    </p>

    <!-- Content -->
    <div class="space-y-6">
      <div>
        <h2 class="text-xl font-bold text-provider-dark mb-2">1. البيانات التي نجمعها:</h2>
        <ul class="list-disc pr-6 space-y-1 text-gray-700">
          <li>الاسم، رقم الهاتف، نوع التخصص.</li>
          <li>تحديد الموقع أثناء استخدام التطبيق.</li>
          <li>تقييمات العملاء وتعليقاتهم.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-provider-dark mb-2">2. استخدام البيانات:</h2>
        <ul class="list-disc pr-6 space-y-1 text-gray-700">
          <li>عرض الفنيين المناسبين للمستخدمين.</li>
          <li>تحليل الأداء وتحسين جودة الخدمة.</li>
          <li>التواصل حول الطلبات والمدفوعات.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-provider-dark mb-2">3. مشاركة البيانات:</h2>
        <ul class="list-disc pr-6 space-y-1 text-gray-700">
          <li>لا يتم مشاركة بياناتك مع أي طرف خارجي إلا عند تنفيذ الخدمة.</li>
          <li>نلتزم بالحفاظ على سريّة بياناتك.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-provider-dark mb-2">4. الأمان:</h2>
        <p class="text-gray-700">بياناتك مشفّرة ومحمية بالكامل باستخدام أحدث تقنيات الحماية.</p>
      </div>

      <div>
        <h2 class="text-xl font-bold text-provider-dark mb-2">5. التعديلات:</h2>
        <p class="text-gray-700">نحتفظ بحق تعديل سياسة الخصوصية، وسيتم إخطارك بأي تغييرات عبر التطبيق.</p>
      </div>
    </div>

    <!-- Back Button -->
    <div class="mt-8 text-center">
      <a href="{{ route('home') }}"
        class="px-6 py-3 bg-provider-primary text-white rounded-lg shadow hover:bg-provider-accent transition">
        <i class="fas fa-arrow-right ml-2"></i> رجوع
      </a>
    </div>

  </div>

  <script>
    AOS.init();
  </script>
</body>

</html>
