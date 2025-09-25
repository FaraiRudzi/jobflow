<?php 
require_once 'config.php';

$pageTitle = 'About Us - Job Flow';
$currentPage = 'about';

require_once 'includes/header.php';
?>

<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800">Transforming Business and Empowering the World</h1>
    </div>
</section>

<!-- Our Story -->
<section class="py-16">
  <div class="container mx-auto px-4 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <!-- Text -->
    <div class="space-y-4 text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-bold text-[#072a50]">Our Story</h2>
      <p class="text-lg text-gray-600 leading-relaxed">
        At Job Flow Digital Solutions, we saw an opportunity to connect global businesses with the incredible talent pool worldwide. Our company is more than just an outsourcing provider—we’re a 
        <span class="font-semibold text-[#077cf8]">pioneering force for economic empowerment.</span> 
        By bridging the gap between businesses seeking top-tier talent at competitive rates and highly educated, English-speaking professionals in Africa, we create a win-win solution.
      </p>
      <p class="text-lg text-gray-600 leading-relaxed">
        Our model not only enhances productivity and efficiency but also provides dignified, empowering opportunities that foster growth and self-worth across the continent.
      </p>
    </div>
    <!-- Image -->
    <div class="flex items-center justify-center">
      <img src="<?php echo BASE_URL; ?>images/professionals.png" 
        alt="Our Story" 
        class="rounded-2xl shadow-lg w-full h-auto"
        data-aos="fade-left">
    </div>
  </div>
</section>

<!-- Vision -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <!-- Image -->
    <div class="flex items-center justify-center">
      <img src="<?php echo BASE_URL; ?>images/vision.jpg" 
     alt="Our Vision" 
     class="rounded-2xl shadow-lg w-full h-auto"
     data-aos="fade-right">
    </div>
    <!-- Text -->
    <div class="space-y-4 text-center md:text-left">
      <h3 class="text-4xl font-bold text-[#072a50]">Our Vision</h3>
      <p class="text-lg text-gray-600 leading-relaxed">
        To be a global leader in business process outsourcing, recognized for our excellence, integrity, and unwavering commitment to creating a positive impact.
      </p>
    </div>
  </div>
</section>

<!-- Mission -->
<section class="py-16">
  <div class="container mx-auto px-4 max-w-7xl grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <!-- Text -->
    <div class="space-y-4 text-center md:text-left order-2 md:order-1">
      <h3 class="text-4xl font-bold text-[#072a50]">Our Mission</h3>
      <p class="text-lg text-gray-600 leading-relaxed">
        Our mission is to empower businesses with efficient, scalable solutions while transforming the world through excellence and innovation. We foster a dynamic work environment that enables our team members to thrive and deliver impactful services that benefit the continent.
      </p>
    </div>
    <!-- Image -->
    <div class="flex items-center justify-center order-1 md:order-2">
      <img src="<?php echo BASE_URL; ?>images/mission.jpg" 
     alt="Our Mission" 
     class="rounded-2xl shadow-lg w-full h-auto"
     data-aos="fade-left">
    </div>
  </div>
</section>


<section class="py-20 bg-gray-50 relative overflow-hidden">
  <div class="container mx-auto px-6 max-w-7xl text-center">
    <h2 class="text-4xl md:text-5xl font-bold text-gray-800">Our Guiding Principles</h2>
    <p class="text-lg text-gray-600 mx-auto max-w-2xl mt-4">
      These principles guide every decision we make and are the foundation of our success.
    </p>
  </div>

  <!-- Circle Wrapper -->
  <div class="relative flex items-center justify-center mt-20 h-[600px]">
    <!-- Center Circle -->
    <div class="w-40 h-40 bg-[#072a50] text-white rounded-full flex items-center justify-center text-lg font-bold shadow-lg z-20">
      Guiding <br>Principles
    </div>

    <!-- Rotating Orbit -->
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="relative w-[500px] h-[500px] orbit-spin">
        
        <!-- Top -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-[#e66a33] text-white">
              <i class="fas fa-star"></i>
            </div>
            <h5>Excellence</h5>
          </div>
        </div>

        <!-- Top Right -->
        <div class="absolute top-1/4 right-0 transform -translate-y-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-blue-100 text-blue-600">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h5>Integrity</h5>
          </div>
        </div>

        <!-- Bottom Right -->
        <div class="absolute bottom-1/4 right-0 transform translate-y-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-[#e66a33] text-white">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h5>Innovation</h5>
          </div>
        </div>

        <!-- Bottom -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-blue-100 text-blue-600">
              <i class="fas fa-fist-raised"></i>
            </div>
            <h5>Empowerment</h5>
          </div>
        </div>

        <!-- Bottom Left -->
        <div class="absolute bottom-1/4 left-0 transform translate-y-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-[#e66a33] text-white">
              <i class="fas fa-users"></i>
            </div>
            <h5>Collaboration</h5>
          </div>
        </div>

        <!-- Top Left -->
        <div class="absolute top-1/4 left-0 transform -translate-y-1/2">
          <div class="orbit-item">
            <div class="icon-box bg-blue-100 text-blue-600">
              <i class="fas fa-heart"></i>
            </div>
            <h5>Faithfulness</h5>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
  /* Alternating orbit spin */
  .orbit-spin {
    animation: spin 40s linear infinite alternate;
    transform-origin: center center;
  }

  @keyframes spin {
    0%   { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  /* Counter spin (also alternates) */
  .orbit-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: counter-spin 40s linear infinite alternate;
  }

  @keyframes counter-spin {
    0%   { transform: rotate(0deg); }
    100% { transform: rotate(-360deg); }
  }

  /* Icon box */
  .icon-box {
    width: 4rem;
    height: 4rem;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
  }

  .orbit-item h5 {
    font-weight: bold;
    color: #1f2937; /* gray-800 */
    text-align: center;
  }
</style>






<section class="bg-blue-600 text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Partner With Us?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Discover how our team can help your business thrive. Get a free, no-obligation consultation to learn more about our tailored solutions.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-blue-600 font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Get Started Today</a>
    </div>
</section>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 2000, // animation duration
    once: true,     // animate only once
  });
</script>

<?php
require_once 'includes/footer.php';
?>

