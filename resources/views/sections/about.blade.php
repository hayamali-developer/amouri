<!-- ✅ Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#14b8a6', // تركواز أساسي
          grayish: '#f5f5f5', // رمادي فاتح
        },
      },
    },
  };
</script>

<style>
  /* ✨ حركة ناعمة للظهور */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .animate-fadeIn {
    animation: fadeIn 1.2s ease-out both;
  }
</style>

<!-- ✨ قسم من نحن -->
<section id="about" dir="rtl" class="relative py-20 bg-white">
  <div class="container mx-auto px-6 md:px-12">
    <!-- العنوان -->
    <div class="text-center mb-12 animate-fadeIn">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">من نحن</h2>
 <div class="flex justify-center items-center gap-2 mb-6 text-primary">
  <div class="w-10 h-[2px] bg-primary rounded-full"></div>

   <span class="tm-sectiontitle-divider">
                                    <img src="{{ asset('/images/section-divider-icon.png') }}" alt="section divider">
                                </span>

  <div class="w-10 h-[2px] bg-primary rounded-full"></div>
</div>


      <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
        نحن في <span class="text-primary font-semibold">ÁMOURI</span> نؤمن أن الجمال يبدأ من الداخل، 
        ونقدّم خدمات تجميل متكاملة تعتمد على الخبرة والابتكار 
        لتحقيق نتائج طبيعية ومشرقة تعكس شخصيتك.
      </p>
    </div>

    <!-- المحتوى -->
    <div
      class="relative bg-grayish rounded-3xl p-10 shadow-2xl overflow-hidden animate-fadeIn"
      style="
        background-image: url('https://images.unsplash.com/photo-1585386959984-a41552231693?auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-position: center;
      ">
      
      <!-- طبقة شفافة رمادية -->
      <div class="absolute inset-0 bg-white/70 backdrop-blur-sm z-0"></div>

      <!-- المحتوى الفعلي -->
      <div class="relative z-10 grid md:grid-cols-2 gap-10 items-center">
        <!-- النص -->
        <div class="order-2 md:order-1 space-y-5">
          <h3 class="text-3xl font-semibold text-gray-800 mb-2">مرحبًا بكِ في ÁMOURI Beauty</h3>
          <p class="text-gray-700 leading-relaxed">
            نقدم لكِ تجربة فريدة من نوعها تجمع بين الرفاهية والنتائج الفعالة، 
            مع فريق من الخبراء المتخصصين في العناية بالبشرة والشعر والجمال.
          </p>
          <p class="text-gray-700 leading-relaxed">
            نستخدم أحدث التقنيات وأفضل المنتجات العالمية لنمنحك مظهرًا طبيعيًا متألقًا 
            يبرز ثقتك بنفسك في كل لحظة.
          </p>
      <a 
  href="#services" 
  class="inline-block bg-gradient-to-r from-teal-300 via-pink-200 to-pink-400 text-white font-semibold px-10 py-3 rounded-full shadow-lg bg-[length:200%_200%] animate-gradientMove hover:scale-105 transform transition duration-500"
>
  اكتشفي خدماتنا
</a>
        </div>

        <!-- الصورة -->
        <div class="order-1 md:order-2">
          <img src="{{ asset('images/about-bg-image.png') }}"
               alt="About ÁMOURI"
               class="rounded-3xl shadow-xl w-full border border-gray-200">
        </div>
      </div>
    </div>
  </div>
</section>
<style>
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.animate-gradientMove {
  animation: gradientMove 6s ease infinite;
}
</style>
