<section id="shop" class="relative bg-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-3">Our Latest Products</h2>
      <div class="flex justify-center items-center gap-2 mb-6 text-primary">
  <div class="w-10 h-[2px] bg-primary rounded-full"></div>

   <span class="tm-sectiontitle-divider">
                                    <img src="{{ asset('/images/section-divider-icon.png') }}" alt="section divider">
                                </span>

  <div class="w-10 h-[2px] bg-primary rounded-full"></div>
</div>
      <p class="text-gray-500 max-w-xl mx-auto">
        Discover our newest beauty essentials crafted to elevate your daily routine.
      </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Single Product -->
      <div class="group bg-white rounded-2xl shadow hover:shadow-xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img src="{{ asset('images/product-image-1.jpg') }}" alt="Product" 
               class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100">
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-eye text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-shopping-cart text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-heart text-gray-800"></i>
            </button>
          </div>
        </div>
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 hover:text-pink-400 transition">
            Cosmetic Compact Powder
          </h3>
          <p class="mt-2 text-pink-400 font-bold">
            <del class="text-gray-400 mr-1">$109.50</del> $99.99
          </p>
          <div class="flex justify-center mt-3 text-yellow-400">
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star text-gray-300"></i>
          </div>
        </div>
      </div>

      <!-- Repeat Product Cards -->
      <div class="group bg-white rounded-2xl shadow hover:shadow-xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img src="{{ asset('images/product-image-2.jpg') }}" alt="Product" 
               class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100">
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-eye text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-shopping-cart text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-heart text-gray-800"></i>
            </button>
          </div>
        </div>
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 hover:text-pink-400 transition">
            Makeup Brushes Set
          </h3>
          <p class="mt-2 text-pink-400 font-bold">$89.99</p>
          <div class="flex justify-center mt-3 text-yellow-400">
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star text-gray-300"></i>
            <i class="ti ti-star text-gray-300"></i>
          </div>
        </div>
      </div>

      <div class="group bg-white rounded-2xl shadow hover:shadow-xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img src="{{ asset('images/product-image-3.jpg') }}" alt="Product" 
               class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100">
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-eye text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-shopping-cart text-gray-800"></i>
            </button>
            <button class="p-3 bg-white rounded-full hover:bg-pink-100 transition">
              <i class="ti ti-heart text-gray-800"></i>
            </button>
          </div>
        </div>
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 hover:text-pink-400 transition">
            Cosmetic Elements Kit
          </h3>
          <p class="mt-2 text-pink-400 font-bold">$99.99</p>
          <div class="flex justify-center mt-3 text-yellow-400">
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star"></i>
            <i class="ti ti-star text-gray-300"></i>
          </div>
        </div>
      </div>

    </div>

    <!-- View More Button -->
    <div class="text-center mt-14">
      <a href="{{ route('product') }}"
         class="inline-block bg-pink-400 text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-pink-600 transition">
         View More
      </a>
    </div>
  </div>
</section>
