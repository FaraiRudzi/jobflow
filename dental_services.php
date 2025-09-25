<?php
    $page_title  = 'Dental Services - Job Flow';
    $currentPage = 'dental_services'; // Assumes a new nav item
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Specialized Dental & Medical Services</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">We handle the operational details of billing, coding, and practice management, so you can focus on patient care.</p>
    </div>
</section>

<!-- Core Dental Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Healthcare Solutions</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Dental Billing -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-tooth"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Dental Billing & Coding</h3>
                <p class="text-gray-600 text-sm">Our expert claim handling and coding ensure maximum, timely reimbursements for your practice.</p>
            </div>
            <!-- Card 2: Practice Management -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Dental Practice Management</h3>
                <p class="text-gray-600 text-sm">We provide administrative and operational solutions to enhance day-to-day practice efficiency.</p>
            </div>
            <!-- Card 3: Medical Support -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">General Medical Support</h3>
                <p class="text-gray-600 text-sm">Comprehensive assistance with billing, coding, and administrative tasks for all medical practices.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section with Images -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl space-y-20">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Benefits for Your Practice</h2>
        </div>

        <!-- Benefit 1: Focus on Patients -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/dental_patient.jpg" alt="Dentist focused on a patient" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">More Time for Patient Care</h3>
                <p class="text-lg text-gray-600 leading-relaxed">By outsourcing your administrative and billing tasks, you and your staff can dedicate more time and energy to providing exceptional patient care, improving outcomes and satisfaction.</p>
            </div>
        </div>

        <!-- Benefit 2: Increased Revenue -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div class="space-y-4 order-2 md:order-1" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-[#072a50]">Increased Revenue & Cash Flow</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Our specialized knowledge in dental and medical coding maximizes your claim approvals and reduces denials. This leads to faster reimbursements and a healthier, more predictable cash flow for your practice.</p>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left">
                <img src="<?= BASE_URL ?>images/dental-revenue.jpg" alt="Chart showing increased revenue" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Streamline Your Practice?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Let's discuss how our specialized services can improve your efficiency and increase revenue. Get a free consultation today.</p>
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