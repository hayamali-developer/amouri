<section 
  x-data="{ active: 0, slides: [
    { 
      name: 'سارة محمد', 
      role: 'عميلة ÁMOURI', 
      text: 'كانت تجربتي أكثر من رائعة! فريق ÁMOURI يهتم بكل التفاصيل، خرجت وأنا أشعر بثقة وجمال حقيقي.', 
      img: '/images/author-image-1.png' 
    },
    { 
      name: 'ندى خالد', 
      role: 'عميلة دائمة', 
      text: 'الخدمة ممتازة والمكان مريح جدًا. أحببت الأجواء الهادئة والاهتمام الرائع من المختصات.', 
      img: '/images/author-image-2.png' 
    },
    { 
      name: 'ريم أحمد', 
      role: 'عميلة جديدة', 
      text: 'نتائجي كانت مذهلة! شكرًا لفريق ÁMOURI على العناية والرقي في التعامل، أكيد مش آخر زيارة.', 
      img: '/images/author-image-3.png' 
    }
  ] }"
  x-init="setInterval(() => active = (active + 1) % slides.length, 6000)"
  class="relative overflow-hidden py-16 md:py-24"
>
  <!-- الخلفية بتدرج لوني متحرك -->
  <div class="absolute inset-0 bg-gradient-to-r from-pink-100 via-teal-100 to-pink-100 bg-[length:200%_200%] animate-gradientMix"></div>

  <div class="relative container mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-10">آراء عملاؤنا</h2>

    <!-- السلايدات -->
    <template x-for="(slide, index) in slides" :key="index">
      <div 
        x-show="active === index"
        x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-6"
        class="flex flex-col items-center justify-center space-y-6"
      >
        <img :src="slide.img" alt="" class="w-24 h-24 rounded-full object-cover border-4 border-pink-300 shadow-md">
        <p class="text-lg text-gray-700 max-w-2xl italic leading-relaxed" x-text="slide.text"></p>
        <div>
          <h3 class="text-xl font-semibold text-pink-500" x-text="slide.name"></h3>
          <p class="text-sm text-gray-500" x-text="slide.role"></p>
        </div>
      </div>
    </template>

    <!-- النقاط -->
    <div class="flex justify-center mt-8 space-x-3">
      <template x-for="(slide, index) in slides" :key="index">
        <button 
          @click="active = index"
          class="w-3 h-3 rounded-full transition"
          :class="active === index ? 'bg-pink-500' : 'bg-gray-300 hover:bg-pink-300'"
        ></button>
      </template>
    </div>
  </div>
</section>

<!-- الأنيميشن -->
<style>
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
.animate-gradientMix {
  animation: gradientMove 10s ease infinite;
}
</style>


