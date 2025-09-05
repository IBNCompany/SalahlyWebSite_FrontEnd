<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الشروط والأحكام – تطبيق المستخدم</title>

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

<body class="bg-seeker-light font-cairo">
  <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">

    <!-- الكارت -->
    <div class="bg-white shadow-xl rounded-3xl p-8 w-full max-w-3xl animate-fade-in-up" data-aos="fade-up">
      <h1 class="text-3xl font-bold text-seeker-primary mb-6 text-center">
        الشروط والأحكام – تطبيق المستخدم "صلّحلي وشطّبلي"
      </h1>

      <div class="text-gray-700 leading-relaxed space-y-6 text-justify font-medium">

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">1. المقدمة</h2>
          <p>أهلاً بك في تطبيق "صلّحلي وشطّبلي"، المنصة التي تتيح لك طلب خدمات الصيانة والتشطيب بسهولة. باستخدامك
            للتطبيق، فإنك توافق على الالتزام بالشروط والأحكام التالية.</p>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">2. وصف الخدمة</h2>
          <p>يوفر التطبيق خدمات مثل:</p>
          <ul class="list-disc pr-6 space-y-1">
            <li>صيانة الكهرباء، السباكة، التكييف، الأجهزة المنزلية</li>
            <li>أعمال التشطيب الداخلي: دهانات، أرضيات، نجارة، جبس وغيرها</li>
          </ul>
          <p>ويقوم بربطك بأقرب مقدّم خدمة محترف.</p>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">3. تسجيل الحساب</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يجب عليك تقديم بيانات صحيحة وحديثة.</li>
            <li>يتحمل المستخدم مسؤولية حماية معلومات حسابه.</li>
            <li>يحق لإدارة التطبيق إيقاف الحساب في حالة أي إساءة استخدام.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">4. الطلب والدفع</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يمكنك طلب الخدمة من خلال التطبيق واختيار الوقت والموقع.</li>
            <li>قد يتم تقدير السعر مبدئيًا، ويُحدد السعر النهائي بعد المعاينة.</li>
            <li>طرق الدفع: نقدًا أو إلكترونيًا حسب المتاح.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">5. الإلغاء والاسترداد</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يمكنك إلغاء الطلب قبل بدء تنفيذ الخدمة.</li>
            <li>لا يُسمح بالاسترداد بعد بدء العمل إلا في حالات معينة يراجعها فريق الدعم.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">6. حدود المسؤولية</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>التطبيق يعمل كوسيط بينك وبين مقدّم الخدمة.</li>
            <li>لا نتحمل المسؤولية المباشرة عن جودة الخدمة، لكننا نوفر الدعم في حالة الشكاوى.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">7. التقييمات</h2>
          <ul class="list-disc pr-6 space-y-1">
            <li>يمكنك تقييم الفني بعد انتهاء الخدمة.</li>
            <li>نراجع التقييمات المسيئة أو الكاذبة ونحتفظ بحق حذفها.</li>
          </ul>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">8. تعديل الشروط</h2>
          <p>قد يتم تحديث الشروط والأحكام في أي وقت، ويتم إعلامك من خلال التطبيق.</p>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-seeker-dark mb-2">9. القانون المنظّم</h2>
          <p>تخضع هذه الشروط لأحكام القانون المصري.</p>
        </div>
      </div>

      <!-- زر الرجوع -->
      <div class="mt-8 text-center">
        <a href="{{ route('home') }}">
          <button
            class="bg-seeker-primary text-white px-8 py-3 rounded-xl shadow-lg hover:bg-seeker-accent transition duration-300">
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