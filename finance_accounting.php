<?php
    $page_title  = 'Finance & Accounting - Job Flow';
    $currentPage = 'finance_accounting';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Financial and Accounting Services</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">Our finance and accounting services help businesses manage their financial operations efficiently and effectively, from payroll to financial analysis.</p>
    </div>
</section>

<!-- Core Financial Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Financial Solutions</h2>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl mt-4">We provide end-to-end financial management to ensure accuracy and compliance.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Payroll Processing -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Payroll Processing</h3>
                <p class="text-gray-600 text-sm">Ensuring employees are paid accurately and on time, with full tax compliance and benefits administration.</p>
            </div>
            <!-- Card 2: Accounting & Bookkeeping -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Accounting & Bookkeeping</h3>
                <p class="text-gray-600 text-sm">Providing accurate financial record-keeping and reporting, including accounts payable/receivable.</p>
            </div>
            <!-- Card 3: Financial Analysis -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Financial Analysis & Planning</h3>
                <p class="text-gray-600 text-sm">Offering insights, budgeting, and strategic planning to help you make informed financial decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- REFACTORED Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl space-y-20">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">The Benefits of Our Financial Services</h2>
        </div>

        <!-- Benefit 1: Improved Accuracy -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/accuracy.jpg" alt="Financial documents being reviewed for accuracy" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Improved Accuracy</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Our expert team leverages proven processes and technology to ensure accurate and timely financial reporting. This meticulous attention to detail reduces the risk of costly errors and ensures full compliance.</p>
            </div>
        </div>

        <!-- Benefit 2: Reduced Costs -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div class="space-y-4 order-2 md:order-1" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-[#072a50]">Reduced Costs</h3>
                <p class="text-lg text-gray-600 leading-relaxed">By outsourcing your financial operations, you can significantly lower overhead. Save on labor, infrastructure, and expensive accounting software, directly improving your bottom line.</p>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left">
                <img src="<?= BASE_URL ?>images/financial-costs.jpg" alt="Piggy bank symbolizing reduced costs" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
        </div>

        <!-- Benefit 3: Informed Decisions -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/decisions.jpg" alt="Business leader making an informed decision with charts" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Informed Decisions</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Gain a clearer picture of your company's financial health. With our clear financial analysis, forecasting, and strategic planning, you can make smarter, data-driven decisions about your business's future.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Strengthen Your Finances?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Let's talk about how our financial and accounting services can improve your accuracy and reduce costs. Get a free consultation today.</p>
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