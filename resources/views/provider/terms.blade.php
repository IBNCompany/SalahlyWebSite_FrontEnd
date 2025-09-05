<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الشروط والأحكام – تطبيق مقدم الخدمة</title>

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

<body class="bg-provider-light font-cairo">
  <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">

    <!-- الكارت -->
    <div class="bg-white shadow-xl rounded-3xl p-8 w-full max-w-3xl animate-fade-in-up" data-aos="fade-up">
      <h1 class="text-3xl font-bold text-provider-primary mb-6 text-center">
        الشروط والأحكام – تطبيق مقدم الخدمة "صلّحلي وشطّبلي"
      </h1>

      <div class="text-gray-700 leading-relaxed space-y-6 text-justify font-medium">

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">1. المقدمة</h2>
          <p>مرحبًا بك في تطبيق "صلّحلي وشطّبلي" كمقدّم خدمة. باستخدامك للتطبيق فإنك توافق على الالتزام بالشروط والأحكام
            التالية.</p>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">2. التسجيل والموافقة</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يجب أن تكون جميع البيانات المقدمة عند التسجيل دقيقة وحديثة.</li>
            <li>تحتفظ إدارة التطبيق بحق قبول أو رفض أي طلب انضمام بدون إبداء أسباب.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">3. التزامات مقدم الخدمة</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>الالتزام بالمواعيد وجودة العمل.</li>
            <li>التعامل باحترام مع العملاء.</li>
            <li>تسعير الخدمة بشكل عادل وشفاف.</li>
            <li>تحميل صور أو تقارير عند طلب الإدارة.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">4. العمولات والدفع</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يتم خصم نسبة محددة (يتم تحديدها في العقد أو إعدادات الحساب) من كل طلب يتم تنفيذه.</li>
            <li>تُحول الأرباح أسبوعيًا أو شهريًا حسب سياسة الدفع.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">5. إلغاء الطلبات</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يجب إعلام الإدارة في حال عدم القدرة على تنفيذ طلب.</li>
            <li>التكرار في الإلغاء أو التأخير يعرض الحساب للإيقاف المؤقت أو النهائي.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">6. المسؤولية</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>مقدّم الخدمة يتحمل المسؤولية الكاملة عن جودة العمل وسلامة الأدوات المستخدمة.</li>
            <li>التطبيق غير مسؤول عن أي خلل أو ضرر ناتج عن الخدمة المقدّمة.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">7. التقييمات</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يحق للعملاء تقييم الخدمة بعد الانتهاء.</li>
            <li>التقييمات المنخفضة تؤثر على ترتيبك وفرصك في الحصول على طلبات جديدة.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">8. تعديل الشروط</h2>
          <p>تحتفظ إدارة التطبيق بحق تعديل الشروط، وسيتم إعلامك بها عبر التطبيق.</p>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-provider-dark mb-2">9. القانون المنظم</h2>
          <p>تخضع هذه الشروط لأحكام القانون المصري.</p>
        </div>
      </div>

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