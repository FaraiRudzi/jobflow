<?php
    $page_title  = 'Customer Support - Job Flow';
    $currentPage = 'customer_support';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Customer Support Services</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">Our services are designed to help businesses provide exceptional customer experiences, increasing loyalty and enhancing brand reputation.</p>
    </div>
</section>

<!-- Core Customer Support Services Section -->
<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">Our Support Solutions</h2>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl mt-4">We provide a full range of services to ensure your customers are always heard and helped.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Customer Service -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-comment-dots"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Omnichannel Service</h3>
                <p class="text-gray-600 text-sm">Providing timely and efficient support via phone, email, and chat.</p>
            </div>
            <!-- Card 2: Ticketing System -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Ticketing System</h3>
                <p class="text-gray-600 text-sm">Managing inquiries efficiently with automated ticket creation and prioritization.</p>
            </div>
            <!-- Card 3: Multichannel Support -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full mx-auto mb-5 flex items-center justify-center bg-blue-100 text-[#077cf8] text-3xl">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="text-xl font-bold text-[#072a50] mb-2">Social & Live Chat</h3>
                <p class="text-gray-600 text-sm">Offering real-time support across all your channels, including social media and live chat.</p>
            </div>
        </div>
    </div>
</section>

<!-- REFACTORED Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl space-y-20">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#072a50]">The Benefits of Outsourced Support</h2>
        </div>

        <!-- Benefit 1: Exceptional Experiences -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/experience.jpg" alt="Customer having an exceptional experience" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Exceptional Experiences</h3>
                <p class="text-lg text-gray-600 leading-relaxed">We ensure your customers receive the best possible experience with every interaction, leading to higher satisfaction scores, positive reviews, and a stronger connection to your brand.</p>
            </div>
        </div>

        <!-- Benefit 2: Increased Loyalty -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div class="space-y-4 order-2 md:order-1" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-[#072a50]">Increased Loyalty</h3>
                <p class="text-lg text-gray-600 leading-relaxed">Fast, effective, and personalized support is key to building trust. We help you build strong relationships that turn one-time buyers into loyal, repeat customers who advocate for your business.</p>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left">
                <img src="<?= BASE_URL ?>images/loyalty.jpg" alt="Customer showing loyalty to a brand" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
        </div>

        <!-- Benefit 3: Enhanced Reputation -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div data-aos="fade-right">
                <img src="<?= BASE_URL ?>images/reputation.jpg" alt="Brand with a five-star reputation" class="rounded-2xl shadow-lg w-full h-auto">
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-[#072a50]">Enhanced Reputation</h3>
                <p class="text-lg text-gray-600 leading-relaxed">In a crowded market, superior customer service is a powerful differentiator. By providing reliable and timely assistance, you build a strong brand reputation and stand out from the competition.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Elevate Your Customer Support?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Let's connect. Get a free, no-obligation consultation to discover how we can improve your customer satisfaction and loyalty.</p>
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