
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ÁMOURI Clinic</title>
  <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  @vite('resources/css/app.css')

  <style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fadeInUp {
  animation: fadeInUp 1s ease-out forwards;
}


</style>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans bg-gradient-to-br from-teal-700 via-teal-500 to-teal-200 text-gray-800 min-h-screen">

<header 
  x-data="{ open: false }" 
  class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-transparent"
>
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-3">

    <!-- زر المنيو -->
    <button 
      @click="open = !open"
      class="text-teal-500 focus:outline-none z-[10002] order-1 transition-transform duration-500"
      :class="open ? 'rotate-90 scale-110' : 'rotate-0 scale-100'"
    >
      <svg xmlns="http://www.w3.org/2000/svg" 
           fill="none" viewBox="0 0 24 24" 
           stroke-width="2" stroke="currentColor" 
           class="w-9 h-9">
        <path stroke-linecap="round" stroke-linejoin="round" 
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- اللوجو -->
    <a href="#home" 
       class="flex items-center gap-3 transition-transform duration-700 hover:scale-110 order-2">
      <img 
        src="{{ asset('images/logo.png') }}" 
        alt="ÁMOURI Clinic Logo" 
        class="h-24 w-auto drop-shadow-xl transition-all duration-700"
        :class="open ? 'scale-125 rotate-6' : 'scale-100 rotate-0'"
      />
    </a>
  </div>

  <!-- خلفية داكنة عند فتح المنيو -->
  <div 
    x-show="open"
    x-transition.opacity
    @click="open = false"
    class="fixed inset-0 bg-black/30 backdrop-blur-sm z-[9999]"
  ></div>

  <!-- القائمة الجانبية -->
  <div 
    x-show="open"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="fixed top-0 right-0 w-1/2 md:w-1/4 h-screen 
           bg-gradient-to-br from-gray-100 via-gray-200 to-teal-300
           animate-gradient-move
           backdrop-blur-lg shadow-2xl z-[10000]
           flex flex-col items-center justify-center 
           space-y-8 text-xl font-semibold"
  >
    <nav class="flex flex-col space-y-6 text-gray-800">
      <a href="#home" class="hover:text-teal-700 transition-all duration-300 transform hover:translate-x-2">الرئيسية</a>
      <a href="#about" class="hover:text-teal-700 transition-all duration-300 transform hover:translate-x-2">من نحن</a>
      <a href="#services" class="hover:text-teal-700 transition-all duration-300 transform hover:translate-x-2">الخدمات</a>
      <a href="#products" class="hover:text-teal-700 transition-all duration-300 transform hover:translate-x-2">المنتجات</a>
      <a href="#contact" class="hover:text-teal-700 transition-all duration-300 transform hover:translate-x-2">اتصل بنا</a>
    </nav>

    <!-- زر الإغلاق -->
    <button 
      @click="open = false"
      class="absolute top-6 left-6 text-gray-600 hover:text-teal-600 transition-all duration-300"
    >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
           stroke-width="2" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- حركة التدرج -->
  <style>
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .animate-gradient-move {
      background-size: 200% 200%;
      animation: gradientMove 6s ease infinite;
    }
  </style>
</header>

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




























