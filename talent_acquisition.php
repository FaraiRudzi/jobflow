<?php
    $page_title  = 'Talent Acquisition - Job Flow';
    $currentPage = 'talent_acquisition';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Find the Right Talent to Drive Your Success</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-4xl mx-auto">Our expert Talent Acquisition service provides comprehensive recruitment and staffing solutions, helping you build a stronger team and a more successful business.</p>
    </div>
</section>

<!-- Key Benefits Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Access Top Talent</h3>
                <p class="text-gray-600 leading-relaxed">Tap into our vast network of qualified candidates to access the best professionals in your industry.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Streamlined Process</h3>
                <p class="text-gray-600 leading-relaxed">Our efficient recruitment process saves you valuable time and resources, allowing you to focus on your core business.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Cost-Effective Solutions</h3>
                <p class="text-gray-600 leading-relaxed">We provide tailored and affordable talent acquisition services that deliver exceptional value and meet your business needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- REFACTORED Process Section (Timeline) -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Talent Acquisition Process</h2>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl mt-4">We've designed a clear and effective process to ensure you find the perfect candidate for your team.</p>
        </div>

        <!-- Timeline Container -->
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
            
            <!-- Timeline Item 1 (Right) -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                </div>
                <div class="order-1 bg-[#077cf8] rounded-lg shadow-xl w-5/12 px-6 py-4 text-white" data-aos="fade-left">
                    <h3 class="font-bold text-xl">Understanding Needs</h3>
                    <p class="text-sm leading-snug tracking-wide text-white/90">We work closely with you to gain a deep understanding of your business, culture, and specific talent requirements.</p>
                </div>
            </div>

            <!-- Timeline Item 2 (Left) -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                </div>
                <div class="order-1 bg-[#e66a33] rounded-lg shadow-xl w-5/12 px-6 py-4 text-white" data-aos="fade-right">
                    <h3 class="font-bold text-xl">Sourcing Talent</h3>
                    <p class="text-sm leading-snug tracking-wide text-white/90">We utilize a variety of channels, including job boards, social media, and professional networks, to source the best candidates.</p>
                </div>
            </div>

            <!-- Timeline Item 3 (Right) -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                </div>
                <div class="order-1 bg-[#077cf8] rounded-lg shadow-xl w-5/12 px-6 py-4 text-white" data-aos="fade-left">
                    <h3 class="font-bold text-xl">Screening & Shortlisting</h3>
                    <p class="text-sm leading-snug tracking-wide text-white/90">We meticulously screen and shortlist candidates based on your requirements, presenting only the most qualified individuals.</p>
                </div>
            </div>

            <!-- Timeline Item 4 (Left) -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
                </div>
                <div class="order-1 bg-[#e66a33] rounded-lg shadow-xl w-5/12 px-6 py-4 text-white" data-aos="fade-right">
                    <h3 class="font-bold text-xl">Conducting Interviews</h3>
                    <p class="text-sm leading-snug tracking-wide text-white/90">We assist with conducting interviews, providing valuable insights to help you make an informed hiring decision.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services & Industries Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Services Column -->
        <div data-aos="fade-up">
            <h3 class="text-3xl font-bold text-[#072a50] mb-6">Our Services</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <i class="fas fa-user-tie text-4xl text-[#077cf8] mb-3"></i>
                    <h5 class="text-xl font-bold text-[#072a50]">Permanent Recruitment</h5>
                    <p class="text-gray-600 text-sm mt-2">Find the right permanent employees to build a stable and skilled team.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <i class="fas fa-clock text-4xl text-[#077cf8] mb-3"></i>
                    <h5 class="text-xl font-bold text-[#072a50]">Temporary Staffing</h5>
                    <p class="text-gray-600 text-sm mt-2">Flexible staffing solutions for short-term projects or temporary needs.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <i class="fas fa-briefcase text-4xl text-[#077cf8] mb-3"></i>
                    <h5 class="text-xl font-bold text-[#072a50]">Executive Search</h5>
                    <p class="text-gray-600 text-sm mt-2">Specialized recruiting for senior-level and key leadership positions.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <i class="fas fa-cogs text-4xl text-[#077cf8] mb-3"></i>
                    <h5 class="text-xl font-bold text-[#072a50]">Recruitment Outsourcing</h5>
                    <p class="text-gray-600 text-sm mt-2">We can manage your entire recruitment process, from sourcing to onboarding.</p>
                </div>
            </div>
        </div>
        
        <!-- Industries Column -->
        <div data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-3xl font-bold text-[#072a50] mb-6">Industries We Serve</h3>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="<?= BASE_URL ?>images/tech.jpg" alt="Technology Industry" class="w-24 h-24 object-cover rounded-md mb-4 mx-auto">
                    <h6 class="text-lg font-bold text-[#072a50]">Technology</h6>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="<?= BASE_URL ?>images/healthcare.jpg" alt="Healthcare Industry" class="w-24 h-24 object-cover rounded-md mb-4 mx-auto">
                    <h6 class="text-lg font-bold text-[#072a50]">Healthcare</h6>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="<?= BASE_URL ?>images/finance.jpg" alt="Finance Industry" class="w-24 h-24 object-cover rounded-md mb-4 mx-auto">
                    <h6 class="text-lg font-bold text-[#072a50]">Finance</h6>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="<?= BASE_URL ?>images/manufacturing.webp" alt="Manufacturing Industry" class="w-24 h-24 object-cover rounded-md mb-4 mx-auto">
                    <h6 class="text-lg font-bold text-[#072a50]">Manufacturing</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Build Your Team?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Let's connect. Get a free, no-obligation consultation to discover how we can fulfill your talent needs.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-[#077cf8] font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Get Started Today</a>
    </div>
</section>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>

<?php
    require_once 'includes/footer.php';
?>