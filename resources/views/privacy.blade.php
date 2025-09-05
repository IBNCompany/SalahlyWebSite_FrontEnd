<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سياسة الخصوصية – تطبيق المستخدم | صلّحلي وشطّبلي</title>

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

<body class="font-cairo bg-gray-50 text-gray-800">

  <!-- المحتوى -->
  <div class="max-w-3xl mx-auto p-6" data-aos="fade-up">
    <h1 class="text-3xl font-bold text-seeker-primary mb-6">
      <i class="fas fa-user-shield text-seeker-accent ml-2"></i>
      سياسة الخصوصية – تطبيق المستخدم "صلّحلي وشطّبلي"
    </h1>

    <div class="space-y-6 text-gray-700 leading-relaxed font-medium">

      <div>
        <h2 class="text-xl font-bold text-seeker-dark mb-2">1. البيانات التي نجمعها</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>الاسم، رقم الهاتف، العنوان.</li>
          <li>الموقع الجغرافي عند الطلب.</li>
          <li>التقييمات والتعليقات.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-seeker-dark mb-2">2. استخدام البيانات</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>لربطك بأقرب مقدّم خدمة.</li>
          <li>لتحسين تجربة المستخدم وتطوير التطبيق.</li>
          <li>للتواصل معك بخصوص الطلبات.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-seeker-dark mb-2">3. مشاركة البيانات</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>لا تتم مشاركة بياناتك مع أي طرف ثالث إلا لتنفيذ الخدمة.</li>
          <li>نحن ملتزمون بحماية خصوصيتك وعدم استغلال بياناتك.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold text-seeker-dark mb-2">4. الأمان</h2>
        <p>نستخدم أحدث وسائل الحماية والتقنيات لتأمين بياناتك ومنع أي وصول غير مصرح به.</p>
      </div>

      <div>
        <h2 class="text-xl font-bold text-seeker-dark mb-2">5. التعديلات</h2>
        <p>سيتم إشعارك بأي تغييرات على هذه السياسة عبر التطبيق قبل تطبيقها.</p>
      </div>

    </div>

    <!-- زر الرجوع -->
    <div class="mt-10 text-center">
      <a href="{{ route('home') }}"
        class="inline-block bg-seeker-primary text-white px-6 py-3 rounded-2xl shadow hover:bg-seeker-accent transition-colors">
        <i class="fas fa-arrow-right ml-2"></i> رجوع
      </a>
    </div>
  </div>

  <script>
    AOS.init();
  </script>
</body>

</html>
