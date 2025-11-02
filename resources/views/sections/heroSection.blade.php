<section class="relative w-full overflow-hidden">
  <!-- Slider Container -->
  <div x-data="slider()" class="relative w-full h-[500px] md:h-[600px]">
    
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
      <div 
        x-show="current === index" 
        x-transition:enter="transition duration-700 ease-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition duration-700 ease-in"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute inset-0 w-full h-full">
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-pink-200/60 via-pink-100/40 to-teal-300/60 z-10"></div>
        
        <!-- Image -->
        <img :src="slide.image" class="w-full h-full object-cover rounded-3xl" alt="Banner">
        
        <!-- Text -->
        <div class="absolute left-6 md:left-16 top-1/2 transform -translate-y-1/2 z-20 max-w-lg text-white">
          <h2 class="text-4xl md:text-5xl font-extrabold mb-4" x-text="slide.title"></h2>
          <p class="text-lg md:text-xl mb-6" x-text="slide.desc"></p>
          <button class="px-6 py-3 bg-gradient-to-r from-pink-300 to-teal-400 rounded-lg font-semibold shadow-lg hover:opacity-90 transition">احجزي الآن</button>
        </div>
      </div>
    </template>

    <!-- Navigation -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-3 z-30">
      <template x-for="(slide, index) in slides" :key="index">
        <button @click="goToSlide(index)" 
                class="w-4 h-4 rounded-full" 
                :class="current === index ? 'bg-teal-500' : 'bg-white/50'"></button>
      </template>
    </div>

  </div>
</section>

<script>
function slider() {
  return {
    current: 0,
    slides: [
      { 
        image: 'images/femalenew.png', 
        title: 'خدماتنا التجميلية', 
        desc: 'بوتوكس، فيلر، جلسات نضارة البشرة مع أفضل الخبراء'
      },
      { 
        image: 'images/female-banner.jpg', 
        title: 'جلسات العناية بالبشرة', 
        desc: 'أفضل العلاجات لأشراقة صحية وطبيعية'
      },
      { 
        image: 'images/female-banner.jpg', 
        title: 'عروض خاصة', 
        desc: 'احجزي الآن واستفيدي من العروض الحصرية'
      }
    ],
    goToSlide(index) {
      this.current = index;
    },
    init() {
      setInterval(() => {
        this.current = (this.current + 1) % this.slides.length;
      }, 5000);
    }
  }
}
</script>
