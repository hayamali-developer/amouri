<section id="monthly-deal" class="relative bg-gradient-to-r from-pink-50 to-white py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Left Content -->
      <div class="order-2 lg:order-1 text-center lg:text-left">
        <h1 class="text-4xl font-bold text-gray-900 mb-3">Deal of the Month</h1>
        <h3 class="text-2xl font-semibold text-gray-700 mb-5">
          Get <span class="text-pink-400 font-bold text-4xl">40%</span> discount
        </h3>
        <p class="text-gray-600 mb-8 max-w-md mx-auto lg:mx-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut wisi enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a href="#"
           class="inline-block bg-pink-400 text-white px-8 py-3 rounded-full font-semibold hover:bg-pink-700 transition">
           Shop Now
        </a>
      </div>

      <!-- Right Image + Countdown -->
      <div class="order-1 lg:order-2 relative flex flex-col items-center justify-center">
        <img src="{{ asset('images/offer-image.png') }}" alt="offer"
             class="w-80 lg:w-[420px] object-contain drop-shadow-xl">
        
        <!-- Countdown -->
        <div class="flex justify-center gap-6 mt-10">
          <div class="text-center">
            <div class="text-4xl font-bold text-pink-400" id="days">00</div>
            <p class="text-gray-500 text-sm">Days</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-pink-400" id="hours">00</div>
            <p class="text-gray-500 text-sm">Hours</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-pink-400" id="minutes">00</div>
            <p class="text-gray-500 text-sm">Minutes</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-pink-400" id="seconds">00</div>
            <p class="text-gray-500 text-sm">Seconds</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<script>
  const targetDate = new Date("2025-12-31T23:59:59").getTime();

  const countdown = setInterval(() => {
    const now = new Date().getTime();
    const diff = targetDate - now;

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    document.getElementById("days").innerText = days.toString().padStart(2, "0");
    document.getElementById("hours").innerText = hours.toString().padStart(2, "0");
    document.getElementById("minutes").innerText = minutes.toString().padStart(2, "0");
    document.getElementById("seconds").innerText = seconds.toString().padStart(2, "0");

    if (diff <= 0) clearInterval(countdown);
  }, 1000);
</script>

