<!-- ✅ قسم الهيرو (واحد فقط) -->
<section 
  id="home"
  x-data="{
    slides: [
      { 
        title: 'استمتعي بجمالك الطبيعي مع ÁMOURI',
        text: 'نُقدّم لكِ أفضل علاجات التجميل بخبرة احترافية وعناية فاخرة.',
        image: '/images/heroslider-image-1.jpg'
      },
      { 
        title: 'أعيدي اكتشاف ثقتك بنفسك',
        text: 'جلسات تجميل وعناية متكاملة لبشرة نضرة وشعر صحي.',
        image: '/images/heroslider-image-2.jpg'
      },
      { 
        title: 'تألقي بإطلالة فريدة كل يوم',
        text: 'خدمات مصممة خصيصًا لجمالك الطبيعي وأناقتك الدائمة.',
        image: '/images/heroslider-image-3.jpg'
      },
    ],
    active: 0,
    next() { this.active = (this.active + 1) % this.slides.length },
    prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length }
  }"
  x-init="setInterval(() => next(), 6000)"
  class="relative h-screen w-full overflow-hidden font-sans"
>

  <!-- ✅ الصور الخلفية -->
  <template x-for="(slide, i) in slides" :key="i">
    <div
      x-show="active === i"
      x-transition:enter="transition-all ease-out duration-1000"
      x-transition:enter-start="opacity-0 scale-105"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition-all ease-in duration-1000"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-105"
      class="absolute inset-0 bg-cover bg-center"
      :style="`background-image: url(${slide.image});`"
    ></div>
  </template>

  <!-- ✅ التدرج الشفاف -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

  <!-- ✅ النصوص -->
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 md:px-16 z-10">
    <template x-for="(slide, i) in slides" :key="i">
      <div
        x-show="active === i"
        x-transition:enter="transition-all ease-out duration-1000 delay-300"
        x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="space-y-6"
      >
        <h1 class="text-4xl md:text-6xl font-bold text-white drop-shadow-2xl leading-tight" x-text="slide.title"></h1>
        <p class="text-lg md:text-2xl text-gray-200 max-w-2xl mx-auto" x-text="slide.text"></p>
      <a 
  href="#services" 
  class="inline-block bg-gradient-to-r from-teal-300 via-pink-200 to-pink-400 text-white font-semibold px-10 py-3 rounded-full shadow-lg bg-[length:200%_200%] animate-gradientMove hover:scale-105 transform transition duration-500"
>
  اكتشفي خدماتنا
</a>
      </div>
    </template>
  </div>

  <!-- ✅ الأسهم -->
  <button 
    @click="prev" 
    class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-[#1abc9c]/50 rounded-full p-3 transition z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </button>

  <button 
    @click="next" 
    class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-[#1abc9c]/50 rounded-full p-3 transition z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg>
  </button>

  <!-- ✅ النقاط -->
  <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3 z-20">
    <template x-for="(slide, i) in slides" :key="i">
      <button 
        @click="active = i"
        class="w-3 h-3 rounded-full transition-all duration-300"
        :class="active === i ? 'bg-[#1abc9c] scale-125' : 'bg-white/50 hover:bg-white/80'">
      </button>
    </template>
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


