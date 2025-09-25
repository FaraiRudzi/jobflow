<?php
require_once 'config.php';

$pageTitle = 'Our Team - Job Flow';
$currentPage = 'team';

require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="py-16 md:py-24 bg-[#5a8bd5] text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800">Meet the Experts</h1>
        <p class="mt-4 text-gray-100 text-lg max-w-2xl mx-auto">Our talented team drives innovation and empowers businesses worldwide.</p>
    </div>
</section>

<!-- Team Intro Section -->
<section class="py-12">
    <div class="container mx-auto px-6 text-center max-w-3xl space-y-4">
        <h2 class="text-3xl font-bold text-[#072a50]">The Driving Force Behind Our Success</h2>
        <p class="text-gray-600">Our success is built on the expertise and dedication of our team. Each member is a seasoned professional passionate about delivering exceptional results and providing the highest level of service to our clients. Our team is a collective of skilled individuals united by a passion for excellence and a commitment to our clients.</p>
    </div>
</section>

<!-- Experience / Expertise Sections -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 flex flex-col items-center space-y-12">

        <!-- Row 1: Text Left, Icon Right -->
        <div class="flex flex-col md:flex-row items-center gap-8 w-3/4 border border-gray-200 rounded-xl p-6 shadow-sm">
            <div class="space-y-4 md:w-1/2">
                <h5 class="text-xl font-semibold text-[#072a50]">Experienced Professionals</h5>
                <p class="text-gray-600">Our team members have extensive experience in their respective fields, with a deep understanding of the challenges and complexities of their work. We leverage a wide range of expertise to ensure we provide comprehensive and effective solutions.</p>
            </div>
            <div class="flex items-center justify-center text-blue-600 text-6xl md:w-1/2">
                <i class="fas fa-handshake"></i>
            </div>
        </div>

        <!-- Row 2: Icon Left, Text Right -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-8 w-3/4 border border-gray-200 rounded-xl p-6 shadow-sm">
            <div class="space-y-4 md:w-1/2">
                <h5 class="text-xl font-semibold text-[#072a50]">Expertise & Training</h5>
                <p class="text-gray-600">We believe in continuous learning. Our team is trained in the latest techniques and technologies, ensuring we have the skills and knowledge needed to provide cutting-edge solutions that keep you ahead of the curve.</p>
            </div>
            <div class="flex items-center justify-center text-blue-600 text-6xl md:w-1/2">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>

        <!-- Row 3: Text Left, Icon Right -->
        <div class="flex flex-col md:flex-row items-center gap-8 w-3/4 border border-gray-200 rounded-xl p-6 shadow-sm">
            <div class="space-y-4 md:w-1/2">
                <h5 class="text-xl font-semibold text-[#072a50]">Collaborative Approach</h5>
                <p class="text-gray-600">Teamwork is at the heart of our operations. Our team works together seamlessly, ensuring every project is handled with care and precision, from start to finish. We are committed to a unified approach for guaranteed success.</p>
            </div>
            <div class="flex items-center justify-center text-blue-600 text-6xl md:w-1/2">
                <i class="fas fa-users"></i>
            </div>
        </div>

    </div>
</section>


<!-- Team Slider Section -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-[#072a50]">Our Team</h2>
        </div>
        <div class="swiper team-slider">
    <div class="swiper-wrapper">
        <?php 
        $teamMembers = [
            ['name'=>'Trish F Chivangu','role'=>'CEO & Founder','img'=>'images/trish.jpg','desc'=>'As the visionary behind Job Flow, Trish provides the strategic direction and leadership that drives our mission to empower businesses and African talent. She has a proven track record of creating successful partnerships and innovative solutions.'],
            ['name'=>'Tinotenda M Muyengwa','role'=>'Network Architect/Infrastructure Engineer','img'=>'images/tino.jpeg','desc'=>'With extensive expertise in telecommunications and a strong foundation in engineering, Tinotenda is the cornerstone of our technical infrastructure. He is responsible for designing and maintaining the robust systems that power our services.'],
            ['name'=>'Zanele Danisa','role'=>'Customer Support Engineer and Trainer','img'=>'images/zanele.jpeg','desc'=>'Zanele is dedicated to ensuring a seamless experience for every client. She not only resolves technical challenges but also trains our support staff to deliver the highest level of customer care and product knowledge.'],
            ['name'=>'Kudakwashe Kunaka','role'=>'Chief Communications Officer/Media Relations Manager','img'=>'images/kuda.png','desc'=>'Kudakwashe directs our communication strategies and manages media relations. With a background in project management, he ensures that our brand message is clear, consistent, and effectively reaches our audience.'],
            ['name'=>'Alois T Chipfurutse','role'=>'Chief Business Officer','img'=>'images/tadiwa.jpeg','desc'=>'As our Business Development Manager, Alois is a driving force behind our growth. Her focus on client acquisition and relationship-building is essential to expanding our market reach and connecting with new partners.']
        ];
        foreach($teamMembers as $member): ?>
        <div class="swiper-slide">
            <div class="team-card bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center transition-transform hover:scale-105 transform">
                <!-- Updated Image Wrapper -->
                <div class="w-48 h-60 rounded-xl overflow-hidden mb-4 border-4 border-gray-200 transition-all duration-300 hover:border-blue-600">
                    <img src="<?= $member['img'] ?>" alt="<?= $member['name'] ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="space-y-1">
                    <h4 class="text-xl font-bold text-gray-800"><?= $member['name'] ?></h4>
                    <p class="text-sm text-blue-600 font-medium"><?= $member['role'] ?></p>
                    <p class="text-gray-500 text-sm mt-2"><?= $member['desc'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-16 md:py-20 text-center">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-bold">Interested in Joining Our Team?</h2>
        <p class="text-lg mt-4 mb-8">We are always looking for passionate and talented individuals to join our growing family. Explore our open positions and find your next opportunity.</p>
        <a href="contact.php#contact" class="inline-block bg-white text-blue-600 font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 hover:bg-[#e66a33]">Explore Opportunities</a>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.team-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>
