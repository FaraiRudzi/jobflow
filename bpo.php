<?php
    $page_title  = 'BPO Services - Job Flow';
    $currentPage = 'bpo';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Business Process Outsourcing (BPO)</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">Our BPO services help businesses improve efficiency and reduce costs by outsourcing non-core functions to our experienced team.</p>
    </div>
</section>

<!-- Core BPO Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Core Services</h2>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl mt-4">We offer a comprehensive suite of BPO solutions tailored to your business needs.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Customer Service -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Customer Service</h3>
                <p class="text-gray-600 text-sm">Inbound and outbound support via phone, email, chat, and social media.</p>
            </div>
            <!-- Card 2: Finance & Accounting -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Finance & Accounting</h3>
                <p class="text-gray-600 text-sm">Handling accounts payable/receivable, and financial reporting.</p>
            </div>
            <!-- Card 3: Human Resources -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Human Resources</h3>
                <p class="text-gray-600 text-sm">Managing recruitment, payroll processing, and employee onboarding.</p>
            </div>
            <!-- Card 4: Data Entry -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Data Management</h3>
                <p class="text-gray-600 text-sm">Providing accurate data entry, processing, and analytics services.</p>
            </div>
        </div>
    </div>
</section>

<!-- REFACTORED Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl space-y-20">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">The Benefits of Our BPO Services</h2>
        </div>

        <!-- Benefit 1: Improved Productivity -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/productivity.jpg" alt="Team collaborating to improve productivity" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Improved Productivity</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Our team handles your routine and time-consuming tasks with expertise, freeing up your internal resources. This allows your core employees to focus on strategic initiatives, innovation, and driving business growth where it matters most.</p>
            </div>
        </div>

        <!-- Benefit 2: Reduced Costs -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div class="space-y-4 order-2 md:order-1" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-[#072a50]">Reduced Costs</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Leverage our global talent pool to significantly reduce operational expenses. We help you save on labor, infrastructure, and training costs, leading to a healthier bottom line and increased profitability without sacrificing quality.</p>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left">
                <img src="<?= BASE_URL ?>images/costs.jpg" alt="Graphs showing reduced business costs" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
        </div>

        <!-- Benefit 3: Enhanced Customer Experience -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/customer-experience.jpg" alt="Happy customer receiving support" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Enhanced Customer Experience</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Our dedicated and professional customer support teams can provide 24/7 assistance, ensuring your customers receive timely and effective service. This commitment to excellence increases customer satisfaction and builds long-term loyalty.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Optimize Your Business?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Let's discuss how our BPO services can reduce your costs and improve efficiency. Get a free consultation today.</p>
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