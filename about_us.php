<?php 
require_once 'config.php';

$pageTitle = 'About Us - Job Flow';
$currentPage = 'about';

require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-[#5a8bd5] py-20 text-center text-white">
  <div class="container mx-auto px-6 max-w-7xl">
    <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
      Transforming Business and Empowering the World
    </h1>
  </div>
</section>

<!-- Our Story -->
<section class="py-16">
  <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <div class="space-y-6 text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-bold text-[#072a50]">Our Story</h2>
      <p class="text-lg text-gray-600 leading-relaxed">
        At Job Flow Digital Solutions, we saw an opportunity to connect global businesses with the incredible talent pool worldwide. Our company is more than just an outsourcing provider—we’re a 
        <span class="font-semibold text-[#077cf8]">pioneering force for economic empowerment.</span>
      </p>
      <p class="text-lg text-gray-600 leading-relaxed">
        By bridging the gap between businesses seeking top-tier talent and highly educated professionals in Africa, we create a win-win solution—enhancing productivity and offering dignified opportunities that foster growth and self-worth.
      </p>
    </div>
    <div class="flex justify-center">
      <img src="<?php echo BASE_URL; ?>images/professionals.png" 
        alt="Our Story" 
        class="rounded-2xl shadow-lg w-full max-w-lg h-auto"
        data-aos="fade-left">
    </div>
  </div>
</section>

<!-- Vision -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <div class="flex justify-center">
      <img src="<?php echo BASE_URL; ?>images/vision.jpg" 
        alt="Our Vision" 
        class="rounded-2xl shadow-lg w-full max-w-lg h-auto"
        data-aos="fade-right">
    </div>
    <div class="space-y-6 text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-bold text-[#072a50]">Our Vision</h2>
      <p class="text-lg text-gray-600 leading-relaxed">
        To be a global leader in business process outsourcing, recognized for our excellence, integrity, and unwavering commitment to creating a positive impact.
      </p>
    </div>
  </div>
</section>

<!-- Mission -->
<section class="py-16">
  <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <div class="space-y-6 text-center md:text-left order-2 md:order-1">
      <h2 class="text-4xl md:text-5xl font-bold text-[#072a50]">Our Mission</h2>
      <p class="text-lg text-gray-600 leading-relaxed">
        Our mission is to empower businesses with efficient, scalable solutions while transforming the world through excellence and innovation. We foster a dynamic work environment that enables our team members to thrive and deliver impactful services.
      </p>
    </div>
    <div class="flex justify-center order-1 md:order-2">
      <img src="<?php echo BASE_URL; ?>images/mission.jpg" 
        alt="Our Mission" 
        class="rounded-2xl shadow-lg w-full max-w-lg h-auto"
        data-aos="fade-left">
    </div>
  </div>
</section>

<!-- Guiding Principles & Social Contribution Side by Side -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-16 items-start">

    <!-- Guiding Principles (Left) -->
    <div class="flex flex-col justify-center h-full">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Guiding Principles</h2>
      <p class="text-gray-700 mb-6">
        These principles guide every decision we make and are the foundation of our success.
      </p>

      <div class="relative flex items-center justify-center h-[350px] md:h-[400px]">
        <div class="w-28 h-28 bg-[#072a50] text-white rounded-full flex items-center justify-center text-lg font-bold shadow-lg z-20">
          Principles
        </div>

        <!-- Rotating Orbit -->
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="relative w-[300px] md:w-[360px] h-[300px] md:h-[360px] orbit-spin">
            <?php 
              $principles = [
                ["Excellence", "fas fa-star", "bg-[#e66a33] text-white"],
                ["Integrity", "fas fa-shield-alt", "bg-blue-100 text-blue-600"],
                ["Innovation", "fas fa-lightbulb", "bg-[#e66a33] text-white"],
                ["Empowerment", "fas fa-fist-raised", "bg-blue-100 text-blue-600"],
                ["Collaboration", "fas fa-users", "bg-[#e66a33] text-white"],
                ["Faithfulness", "fas fa-heart", "bg-blue-100 text-blue-600"],
              ];
              $positions = ["top-0 left-1/2 -translate-x-1/2",
                            "top-1/4 right-0 -translate-y-1/2",
                            "bottom-1/4 right-0 translate-y-1/2",
                            "bottom-0 left-1/2 -translate-x-1/2",
                            "bottom-1/4 left-0 translate-y-1/2",
                            "top-1/4 left-0 -translate-y-1/2"];
              foreach ($principles as $i => $p): 
            ?>
            <div class="absolute <?php echo $positions[$i]; ?> pointer-events-none">
              <div class="orbit-item">
                <div class="icon-box <?php echo $p[2]; ?>">
                  <i class="<?php echo $p[1]; ?>"></i>
                </div>
                <h5><?php echo $p[0]; ?></h5>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto px-6 max-w-7xl text-center">
    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-12">
      Our Social Contribution
    </h2>

    <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto mb-8">
      Tsitsi Foundation is dedicated to uplifting communities and empowering youth through education, social programs, and sustainability initiatives. 
      Their efforts inspire meaningful change and touch hearts across Zimbabwe and beyond.
    </p>

    <!-- Instagram Embed Full Width -->
    <div class="w-full flex justify-center">
      <blockquote class="instagram-media" 
                  data-instgrm-captioned 
                  data-instgrm-permalink="https://www.instagram.com/reel/DK5M_nJtzlw/?utm_source=ig_embed&utm_campaign=loading" 
                  data-instgrm-version="14" 
                  style=" background:#FFF; border:0; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.1); margin: 1px; max-width:100%; width:100%;">
      </blockquote>
      <script async src="//www.instagram.com/embed.js"></script>
    </div>

    <a href="https://www.instagram.com/tsitsi_foundations" target="_blank" 
       class="inline-block mt-6 text-indigo-600 font-semibold hover:underline">
      Follow on Instagram
    </a>
  </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-blue-600 text-white py-16 text-center">
  <div class="container mx-auto px-6 max-w-7xl">
    <h2 class="text-4xl font-bold mb-4">Ready to Partner With Us?</h2>
    <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">
      Discover how our team can help your business thrive. Get a free, no-obligation consultation to learn more about our tailored solutions.
    </p>
    <a href="contact.php#contact" 
       class="inline-block px-8 py-3 bg-white text-blue-600 font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">
       Get Started Today
    </a>
  </div>
</section>

<script async src="//www.instagram.com/embed.js"></script>

<!-- Animations -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ duration: 2000, once: true });
</script>

<style>
  .orbit-spin {
    animation: spin 40s linear infinite alternate;
    transform-origin: center center;
  }
  @keyframes spin { 0% {transform: rotate(0deg);} 100% {transform: rotate(360deg);} }

  .orbit-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: counter-spin 40s linear infinite alternate;
  }
  @keyframes counter-spin { 0% {transform: rotate(0deg);} 100% {transform: rotate(-360deg);} }

  .icon-box {
    width: 4rem; height: 4rem;
    border-radius: 9999px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 0.5rem; font-size: 1.5rem;
  }
  .orbit-item h5 { font-weight: bold; color: #1f2937; text-align: center; }

  @media (max-width: 768px) {
    .orbit-spin { width: 250px; height: 250px; }
    .icon-box { width: 3rem; height: 3rem; font-size: 1.2rem; }
  }
</style>

<?php
require_once 'includes/footer.php';
?>
