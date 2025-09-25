<?php
    $page_title  = 'IT Services - Job Flow';
    $currentPage = 'it_services';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Information Technology Services</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">Optimize your productivity by leveraging the expertise of our IT professionals. Focus on strategic business priorities while we manage essential tasks.</p>
    </div>
</section>

<!-- REFACTORED Core IT Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Core IT Services</h2>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl mt-4">From development to support, we provide the technical expertise you need to thrive.</p>
        </div>
        <!-- Balanced Grid for 5 items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
            <!-- Item 1: Software Development -->
            <div class="lg:col-span-3 bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl"><i class="fas fa-cogs"></i></div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Software Development & Maintenance</h3>
                <p class="text-gray-600 text-sm">Designing, developing, and maintaining bespoke software applications to meet your business objectives.</p>
            </div>
            <!-- Item 2: Network Management -->
            <div class="lg:col-span-3 bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl"><i class="fas fa-network-wired"></i></div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Network Management</h3>
                <p class="text-gray-600 text-sm">Overseeing and maintaining computer networks to ensure optimal uptime, security, and connectivity.</p>
            </div>
            <!-- Item 3: Help Desk -->
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl"><i class="fas fa-headset"></i></div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Help Desk Services</h3>
                <p class="text-gray-600 text-sm">Offering expert support to end-users for IT-related issues via phone, email, or ticketing systems.</p>
            </div>
            <!-- Item 4: IT Support -->
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl"><i class="fas fa-server"></i></div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">IT Support System</h3>
                <p class="text-gray-600 text-sm">Providing technical assistance and support for your organization's entire IT infrastructure.</p>
            </div>
            <!-- Item 5: Programming -->
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl"><i class="fas fa-code"></i></div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Programming & Coding</h3>
                <p class="text-gray-600 text-sm">Creating custom code for specific applications, tools, or software to meet unique business needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">The Benefits of Our IT Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Benefit 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Enhanced Efficiency</h3>
                <p class="text-gray-600 leading-relaxed">Streamlined IT operations enable your business to focus on core goals without technical distractions.</p>
            </div>
            <!-- Benefit 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Improved Security</h3>
                <p class="text-gray-600 leading-relaxed">Managed networks and expert IT support help protect your valuable data against threats and minimize costly downtime.</p>
            </div>
            <!-- Benefit 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-2xl hover:border-[#e66a33] transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center bg-[#e66a33] text-white text-4xl">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-2xl font-semibold text-[#072a50] mb-3">Custom Solutions</h3>
                <p class="text-gray-600 leading-relaxed">Our programming and software development services provide tailored tools for your specific business needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Enhance Your IT Infrastructure?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Contact us for a free consultation and learn how our expert IT services can drive your business forward.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-[#077cf8] font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Get a Free Consultation</a>
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