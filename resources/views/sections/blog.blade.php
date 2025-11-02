<section id="blog" class="py-20 bg-gradient-to-br from-pink-50 via-white to-teal-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    
    <!-- النص + الصورة الرئيسية -->
    <div class="relative group overflow-hidden rounded-3xl shadow-lg">
      <img src="{{ asset('images/blog-image-1.jpg') }}" alt="Main Blog" 
           class="w-full h-[450px] object-cover rounded-3xl group-hover:scale-105 transition duration-700">
      <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-3xl"></div>
      <div class="absolute bottom-0 p-8 text-white">
        <h2 class="text-3xl font-bold mb-3">روتين العناية بالبشرة اليومية</h2>
        <p class="text-sm text-gray-200 mb-4">
          خطوات بسيطة تمنح بشرتك إشراقة طبيعية وتساعدك على الحفاظ على نضارتها طوال اليوم.
        </p>
        <a href="#"
           class="inline-block bg-gradient-to-r from-pink-400 to-teal-400 px-6 py-2 rounded-full text-white text-sm font-semibold hover:opacity-90 transition">
          قراءة المزيد →
        </a>
      </div>
    </div>

    <!-- 3 مقالات صغيرة -->
    <div class="flex flex-col gap-6">
      <!-- مقالة -->
      <div class="flex gap-5 bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/blog-thumbnail-1.jpg') }}" alt="blog 1" class="w-32 h-32 object-cover">
        <div class="p-4 text-right flex flex-col justify-center">
          <h3 class="font-semibold text-gray-800 text-lg mb-1 hover:text-pink-500 transition">
            أحدث صيحات المكياج
          </h3>
          <p class="text-gray-600 text-sm mb-2">
            تعرفي على أحدث اتجاهات المكياج التي تناسب جميع الإطلالات اليومية.
          </p>
          <a href="#" class="text-pink-500 text-sm hover:text-teal-500">قراءة المزيد</a>
        </div>
      </div>

      <!-- مقالة -->
      <div class="flex gap-5 bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/blog-thumbnail-2.jpg') }}" alt="blog" alt="blog 2" class="w-32 h-32 object-cover">
        <div class="p-4 text-right flex flex-col justify-center">
          <h3 class="font-semibold text-gray-800 text-lg mb-1 hover:text-pink-500 transition">
            نصائح للعناية بالشعر
          </h3>
          <p class="text-gray-600 text-sm mb-2">
            اكتشفي أسرار العناية بالشعر لتنعمي بمظهر صحي وجذاب كل يوم.
          </p>
          <a href="#" class="text-pink-500 text-sm hover:text-teal-500">قراءة المزيد</a>
        </div>
      </div>

      <!-- مقالة -->
      <div class="flex gap-5 bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/blog-thumbnail-3.jpg') }}" alt="blog" alt="blog 3" class="w-32 h-32 object-cover">
        <div class="p-4 text-right flex flex-col justify-center">
          <h3 class="font-semibold text-gray-800 text-lg mb-1 hover:text-pink-500 transition">
            أفضل منتجات العناية الطبيعية
          </h3>
          <p class="text-gray-600 text-sm mb-2">
            جربي منتجات طبيعية تمنح بشرتك إشراقة صحية دون أي ضرر.
          </p>
          <a href="#" class="text-pink-500 text-sm hover:text-teal-500">قراءة المزيد</a>
        </div>
      </div>
    </div>
  </div>
</section>



