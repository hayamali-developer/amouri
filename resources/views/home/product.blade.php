@extends('sections.home')

@section('content')

<!-- 🩵💎 Banner Section -->


<!-- 🛍️ Sidebar + Services Section -->
<section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 px-6 mt-16 mb-16">
  <!-- Sidebar -->
  <aside class="md:col-span-1 space-y-8">
    <!-- Categories -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-gradient-to-r from-teal-400 to-pink-300">
      <h3 class="text-lg font-semibold text-teal-700 mb-4 border-b pb-2">الفئات</h3>
      <ul class="space-y-2 text-gray-700">
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">💉 البوتوكس</a></li>
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">⚡ الفيلر</a></li>
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">🌸 نضارة البشرة</a></li>
      </ul>
    </div>

    <!-- Price Filter -->
    <div x-data="{ min: 200, max: 800 }" class="bg-white rounded-2xl shadow-lg p-6">
      <h3 class="text-lg font-semibold text-teal-700 mb-4 border-b pb-2">تصفية بالسعر</h3>
      <div class="space-y-4">
        <input type="range" min="100" max="1000" x-model="min" class="w-full accent-teal-500" />
        <input type="range" min="100" max="1000" x-model="max" class="w-full accent-pink-400" />
        <div class="flex justify-between text-sm text-gray-700">
          <span>من: <strong x-text="`$${min}`"></strong></span>
          <span>إلى: <strong x-text="`$${max}`"></strong></span>
        </div>
        <button class="w-full bg-gradient-to-r from-teal-400 to-pink-300 hover:opacity-90 text-white py-2 rounded-lg transition">تطبيق الفلتر</button>
      </div>
    </div>

    <!-- Session Duration -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
      <h3 class="text-lg font-semibold text-teal-700 mb-4 border-b pb-2">مدة الجلسة</h3>
      <ul class="space-y-2 text-gray-700">
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">⏱️ قصيرة (15 دقيقة)</a></li>
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">🕒 متوسطة (30 دقيقة)</a></li>
        <li><a href="#" class="hover:text-teal-500 hover:scale-105 transition transform duration-200">⏳ طويلة (45 دقيقة)</a></li>
      </ul>
    </div>
  </aside>

  <!-- Main Services -->
  <main class="md:col-span-3 space-y-8">
    <div class="flex justify-between items-center mb-6 border-b pb-3">
      <h2 class="text-3xl font-bold text-gray-800">خدمات التجميل</h2>
      <div class="flex items-center gap-3">
        <label class="text-gray-700 text-sm font-medium">الترتيب حسب:</label>
        <select class="border border-gray-300 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-teal-400 focus:border-teal-400">
          <option>الأحدث</option>
          <option>الأقل سعرًا</option>
          <option>الأعلى سعرًا</option>
          <option>الأكثر طلبًا</option>
        </select>
      </div>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-2xl hover:shadow-3xl hover:-translate-y-3 transition transform p-6">
        <img src="assets/images/botox.jpg" class="rounded-xl mb-4 h-52 w-full object-cover" alt="">
        <h3 class="font-semibold text-gray-800">حقن البوتوكس</h3>
        <p class="text-teal-600 mt-1">$250</p>
        <button class="mt-4 w-full bg-gradient-to-r from-teal-400 to-pink-300 text-white py-3 rounded-lg hover:opacity-90 hover:scale-105 transition transform">احجزي الآن</button>
      </div>

      <div class="bg-white rounded-2xl shadow-2xl hover:shadow-3xl hover:-translate-y-3 transition transform p-6">
        <img src="assets/images/filler.jpg" class="rounded-xl mb-4 h-52 w-full object-cover" alt="">
        <h3 class="font-semibold text-gray-800">الفيلر الطبيعي</h3>
        <p class="text-teal-600 mt-1">$320</p>
        <button class="mt-4 w-full bg-gradient-to-r from-teal-400 to-pink-300 text-white py-3 rounded-lg hover:opacity-90 hover:scale-105 transition transform">احجزي الآن</button>
      </div>

      <div class="bg-white rounded-2xl shadow-2xl hover:shadow-3xl hover:-translate-y-3 transition transform p-6">
        <img src="assets/images/skin-care.jpg" class="rounded-xl mb-4 h-52 w-full object-cover" alt="">
        <h3 class="font-semibold text-gray-800">جلسة نضارة البشرة</h3>
        <p class="text-teal-600 mt-1">$180</p>
        <button class="mt-4 w-full bg-gradient-to-r from-teal-400 to-pink-300 text-white py-3 rounded-lg hover:opacity-90 hover:scale-105 transition transform">احجزي الآن</button>
      </div>
    </div>
  </main>
</section>

@endsection

