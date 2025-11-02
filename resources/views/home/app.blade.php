

  <!-- ✅ الهيدر -->
<!-- 🌸 Header -->
  @include('sections.header')



<!-- End Header -->



<!-- Hero Section -->

@include('sections.hero')


<!-- About Section -->

  @include('sections.about')



<!-- End Section -->


<!-- video -->

<section 
  class="relative bg-cover bg-center bg-no-repeat py-32 flex items-center justify-center"
  style="background-image: url('/images/video-area-background.jpg');"
>
  <!-- طبقة شفافة وردية -->
  <div class="absolute inset-0 bg-pink-300/40"></div>

  <!-- محتوى الفيديو -->
  <div class="relative z-10 text-center">
    <a 
      href="https://www.youtube.com/watch?v=mHUOCxVT5ro"
      target="_blank"
      class="inline-flex items-center justify-center w-20 h-20 bg-pink-400 text-white rounded-full shadow-lg hover:bg-pink-600 hover:scale-110 transition-all duration-300"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
        <path d="M8 5v14l11-7z"/>
      </svg>
    </a>
  </div>
</section>

<!-- Service Section -->

  @include('sections.services')

  <!-- Products Section -->
@include('sections.products')




<!-- offer Section -->




@include('sections.offer')


<!-- Testimonials Section -->
  @include('sections.testimonials')

  <!-- Blog Section -->
  @include('sections.blog')

  <!-- Contact Section -->
  @include('sections.contact')

  <!-- Booking CTA Section -->
  @include('sections.cta')

  <!-- Footer -->
  @include('sections.footer')

</body>
</html>

