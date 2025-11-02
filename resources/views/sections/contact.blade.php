<!-- ✅ أضيفي هذا في <head> -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- ✅ شغّلي AOS -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      duration: 1000,
      once: true,
      offset: 100,
    });
  });
</script>

<!-- ✨ قسم اتصلي بنا -->
<section id="contact" class="py-20 bg-gradient-to-br from-pink-50 via-white to-teal-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

    <!-- 🗺️ الخريطة -->
    <div data-aos="fade-left" class="overflow-hidden rounded-3xl shadow-lg h-[400px]">

  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1726.093660972007!2d31.339704067358618!3d30.088821100000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458150044d32d55%3A0x2a3958663cec915b!2sAmouri%20Clinic!5e0!3m2!1sen!2seg!4v1762090978445!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- 💌 نموذج التواصل -->
    <div data-aos="fade-right" class="bg-white rounded-3xl shadow-lg p-8">
      <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">اتصلي بنا</h2>
      <form class="space-y-5 text-right">
        <div data-aos="fade-up" data-aos-delay="200">
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">الاسم</label>
          <input type="text" id="name" name="name"
                 class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-300"
                 placeholder="أدخلي اسمك الكامل">
        </div>

        <div data-aos="fade-up" data-aos-delay="300">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">البريد الإلكتروني</label>
          <input type="email" id="email" name="email"
                 class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-300"
                 placeholder="example@email.com">
        </div>

        <div data-aos="fade-up" data-aos-delay="400">
          <label for="message" class="block text-sm font-medium text-gray-700 mb-1">الرسالة</label>
          <textarea id="message" name="message" rows="4"
                    class="w-full border border-gray-300 rounded-2xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-300"
                    placeholder="اكتبي رسالتك هنا..."></textarea>
        </div>

        <div data-aos="zoom-in" data-aos-delay="500">
          <button type="submit"
                  class="w-full bg-gradient-to-r from-pink-400 to-teal-400 text-white py-3 rounded-full font-semibold hover:opacity-90 transition duration-300">
            إرسال الرسالة
          </button>
        </div>
      </form>
    </div>

  </div>
</section>

