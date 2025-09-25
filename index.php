<?php
require_once 'config.php';
$pageTitle = 'JobFlow - Transforming Businesses, Empowering Talent';
$currentPage = 'home';
$pageDescription = 'Job Flow Digital Solutions offers comprehensive digital services for businesses and job seekers, specializing in talent acquisition, web development, and digital marketing.';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-[75vh] min-h-[600px] flex items-center justify-center text-white text-center overflow-hidden">
    <div class="swiper hero-slider absolute inset-0">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide hero-slide relative bg-cover bg-center" style="background-image: url('<?= BASE_URL ?>images/solutions.jpg')">
                <div class="absolute inset-0 bg-black/60"></div>
                <div class="absolute inset-0 flex items-center justify-center p-4 md:p-8 z-10">
                    <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight">Transforming Businesses, Empowering the World</h1>
                        <p class="text-md sm:text-lg md:text-xl mt-4 mb-8 opacity-90">We connect top-tier African talent with global businesses, providing innovative outsourcing solutions that drive growth.</p>
                        <a href="<?= BASE_URL ?>about_us.php" class="inline-block px-10 py-4 bg-[#077cf8] hover:bg-[#072a50] text-white font-bold rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">Discover Our Mission</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide hero-slide relative bg-cover bg-center" style="background-image: url('<?= BASE_URL ?>images/customer.jpg')">
                <div class="absolute inset-0 bg-black/60"></div>
                <div class="absolute inset-0 flex items-center justify-center p-4 md:p-8 z-10">
                    <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight">Unlock Unmatched Value & Efficiency</h1>
                        <p class="text-md sm:text-lg md:text-xl mt-4 mb-8 opacity-90">Leverage our pool of highly-educated professionals at rates up to 70% below US pricing.</p>
                        <a href="<?= BASE_URL ?>services.php" class="inline-block px-10 py-4 bg-[#077cf8] hover:bg-[#072a50] text-white font-bold rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next text-white hover:text-[#e66a33] transition-colors duration-300"></div>
        <div class="swiper-button-prev text-white hover:text-[#e66a33] transition-colors duration-300"></div>
    </div>
</section>

<!-- Why Partner Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50] mb-4">Why Partner With Job Flow?</h2>
        <p class="text-lg text-gray-600 mx-auto max-w-3xl mb-12">We go beyond traditional outsourcing. We build partnerships that foster growth, drive innovation, and create lasting value for your business and our talent pool.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-10 text-center border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl transition-transform duration-500 hover:scale-110">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3 tracking-wide">Innovation</h3>
                <p class="text-gray-600 leading-relaxed">We leverage cutting-edge technology and creative strategies to solve your most complex challenges, ensuring you stay ahead of the curve.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-10 text-center border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl transition-transform duration-500 hover:scale-110">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3 tracking-wide">Partnership</h3>
                <p class="text-gray-600 leading-relaxed">Our team becomes a dedicated extension of yours, fully invested in understanding your goals and committed to your long-term success.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-10 text-center border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl transition-transform duration-500 hover:scale-110">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3 tracking-wide">Empowerment</h3>
                <p class="text-gray-600 leading-relaxed">Our business model provides life-changing opportunities to talented professionals, contributing to sustainable economic growth in Africa.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16" id="stats-section"> <!-- Removed bg-gray-50 for alternation -->
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50] mb-12">Our Impact in Numbers</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-xl shadow-md"><h3 class="text-5xl font-extrabold text-[#e66a33] mb-2 counter" data-target="70">0</h3><p class="text-xl font-semibold text-gray-700">Cost Savings %</p></div>
            <div class="bg-white p-8 rounded-xl shadow-md"><h3 class="text-5xl font-extrabold text-[#e66a33] mb-2 counter" data-target="500">0</h3><p class="text-xl font-semibold text-gray-700">Professionals Empowered</p></div>
            <div class="bg-white p-8 rounded-xl shadow-md"><h3 class="text-5xl font-extrabold text-[#e66a33] mb-2 counter" data-target="98">0</h3><p class="text-xl font-semibold text-gray-700">Client Satisfaction %</p></div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php
$testimonials = json_decode(file_get_contents('testimonials.json'), true) ?: [];
if (!empty($testimonials)):
?>
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#072a50] mb-12">What Our Clients Say</h2>
        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide h-auto pb-12">
                        <div class="bg-white rounded-xl shadow-md p-8 md:p-10 flex flex-col h-full border border-gray-100">
                            <p class="text-lg italic text-gray-700 leading-relaxed mb-6 flex-grow">"<?= htmlspecialchars($t['quote']); ?>"</p>
                            <div class="flex items-center mt-auto pt-4 border-t border-gray-200">
                                <img src="<?= htmlspecialchars($t['image'] ?? BASE_URL . 'images/default-avatar.jpg'); ?>" alt="<?= htmlspecialchars($t['name'] ?? 'Anonymous'); ?>" class="w-16 h-16 rounded-full object-cover border-4 border-white shadow-md mr-4">
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900"><?= htmlspecialchars($t['name'] ?? 'Anonymous'); ?></h4>
                                    <p class="text-sm text-gray-600"><?= htmlspecialchars($t['position'] ?? 'Client'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Submit Testimonial Form -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-3xl">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#072a50] mb-6 text-center">Share Your Experience</h2>
        <form action="submit_testimonial.php" method="POST" class="bg-white rounded-xl shadow-lg p-8 space-y-6">
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                <input type="text" name="name" id="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#077cf8]">
            </div>
            <div>
                <label for="position" class="block text-gray-700 font-semibold mb-2">Position / Company</label>
                <input type="text" name="position" id="position" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#077cf8]">
            </div>
            <div>
                <label for="quote" class="block text-gray-700 font-semibold mb-2">Your Testimonial</label>
                <textarea name="quote" id="quote" rows="5" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#077cf8]"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-[#077cf8] hover:bg-[#072a50] text-white font-bold px-8 py-3 rounded-full shadow-lg transition-all duration-300 hover:-translate-y-1">
                    Submit Testimonial
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Partner With Us?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Discover how our team can help your business thrive. Get a free, no-obligation consultation to learn more about our tailored solutions.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-[#077cf8] font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Get Started Today</a>
    </div>
</section>

<!-- External libraries -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // --- AOS Initialization ---
  AOS.init({
    duration: 1200, // A slightly faster animation feels more modern
    once: true,
  });

  // --- Hero Slider ---
  const heroSwiper = new Swiper('.hero-slider', {
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    autoplay: { delay: 5000, disableOnInteraction: false },
    effect: 'fade', // Add a fade effect for smoother transitions
    fadeEffect: { crossFade: true },
  });

  // --- Testimonials Slider ---
  const testimonialSwiper = new Swiper('.testimonials-slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: { el: '.swiper-pagination', clickable: true },
    autoplay: { delay: 6000, disableOnInteraction: false },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    }
  });

  // --- Efficient Counter Animation with Intersection Observer ---
  const statsSection = document.getElementById('stats-section');
  const counters = document.querySelectorAll('.counter');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        counters.forEach(counter => {
          const animate = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200; // Animation speed

            if (count < target) {
              counter.innerText = Math.ceil(count + increment);
              setTimeout(animate, 15);
            } else {
              counter.innerText = target;
            }
          };
          animate();
        });
        observer.unobserve(statsSection); // Animate only once
      }
    });
  }, {
    threshold: 0.5 // Trigger when 50% of the section is visible
  });

  if (statsSection) {
    observer.observe(statsSection);
  }

});
</script>

<?php
require_once 'includes/footer.php';
?>