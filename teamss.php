<?php
// ALWAYS load config.php first!
require_once 'config.php';

$pageTitle = 'Our Team - Job Flow';
$currentPage = 'team';

require_once 'includes/header.php';
?>

<section class="bg-gray-100 py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-5xl font-extrabold text-primary-dark">Meet the Experts</h1>
    </div>
</section>

---

<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl reveal text-center" data-animation="fade-in-up">
        <h2 class="text-4xl font-bold text-primary-dark mb-5">The Driving Force Behind Our Success</h2>
        <p class="text-lg leading-relaxed text-gray-600 mx-auto max-w-4xl">Our success is built on the expertise and dedication of our team. Each member is a seasoned professional passionate about delivering exceptional results and providing the highest level of service to our clients. Our team is a collective of skilled individuals united by a passion for excellence and a commitment to our clients.</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-10 items-center mt-12 reveal" data-animation="fade-in-up">
        <div class="p-5">
            <h5 class="text-2xl font-bold text-primary-dark mb-2">Experienced Professionals</h5>
            <p class="text-gray-600 leading-relaxed">Our team members have extensive experience in their respective fields, with a deep understanding of the challenges and complexities of their work. We leverage a wide range of expertise to ensure we provide comprehensive and effective solutions.</p>
        </div>
        <div class="p-5 text-center md:text-right">
            <i class="fas fa-handshake text-5xl text-primary"></i>
        </div>
    </div>

    <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-10 items-center mt-12 reveal" data-animation="fade-in-up" data-delay="100">
        <div class="p-5 text-center md:text-left">
            <i class="fas fa-graduation-cap text-5xl text-primary"></i>
        </div>
        <div class="p-5">
            <h5 class="text-2xl font-bold text-primary-dark mb-2">Expertise & Training</h5>
            <p class="text-gray-600 leading-relaxed">We believe in continuous learning. Our team is trained in the latest techniques and technologies, ensuring we have the skills and knowledge needed to provide cutting-edge solutions that keep you ahead of the curve.</p>
        </div>
    </div>

    <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-10 items-center mt-12 reveal" data-animation="fade-in-up" data-delay="200">
        <div class="p-5">
            <h5 class="text-2xl font-bold text-primary-dark mb-2">Collaborative Approach</h5>
            <p class="text-gray-600 leading-relaxed">Teamwork is at the heart of our operations. Our team works together seamlessly, ensuring every project is handled with care and precision, from start to finish. We are committed to a unified approach for guaranteed success.</p>
        </div>
        <div class="p-5 text-center md:text-right">
            <i class="fas fa-users text-5xl text-primary"></i>
        </div>
    </div>
</section>

---

<section class="py-16">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <h2 class="text-4xl font-bold text-primary-dark mb-10">Our Team</h2>

        <div class="swiper reveal group" data-animation="fade-in-up">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 text-center">
                        <div class="relative w-48 h-48 rounded-full overflow-hidden mb-4 transition-all duration-400 group-hover:scale-110">
                            <img src="images/trish.jpg" alt="Trish Faith Chivangu" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-center">
                            <h4 class="text-2xl font-bold text-primary-dark">Trish Faith Chivangu</h4>
                            <p class="text-lg font-medium text-primary">CEO & Founder</p>
                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">As the visionary behind Job Flow, Trish provides the strategic direction and leadership that drives our mission to empower businesses and African talent. She has a proven track record of creating successful partnerships and innovative solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 text-center">
                        <div class="relative w-48 h-48 rounded-full overflow-hidden mb-4 transition-all duration-400 group-hover:scale-110">
                            <img src="images/tino.jpg" alt="Tinotenda M Muyengwa" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-center">
                            <h4 class="text-2xl font-bold text-primary-dark">Tinotenda M Muyengwa</h4>
                            <p class="text-lg font-medium text-primary">Network Architect/Infrastructure Engineer</p>
                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">With extensive expertise in telecommunications and a strong foundation in engineering, Tinotenda is the cornerstone of our technical infrastructure. He is responsible for designing and maintaining the robust systems that power our services.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 text-center">
                        <div class="relative w-48 h-48 rounded-full overflow-hidden mb-4 transition-all duration-400 group-hover:scale-110">
                            <img src="images/zanele.jpeg" alt="Zanele Danisa" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-center">
                            <h4 class="text-2xl font-bold text-primary-dark">Zanele Danisa</h4>
                            <p class="text-lg font-medium text-primary">Customer Support Engineer and Trainer</p>
                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">Zanele is dedicated to ensuring a seamless experience for every client. She not only resolves technical challenges but also trains our support staff to deliver the highest level of customer care and product knowledge.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 text-center">
                        <div class="relative w-48 h-48 rounded-full overflow-hidden mb-4 transition-all duration-400 group-hover:scale-110">
                            <img src="images/avatar.png" alt="Kudakwashe Kunaka" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-center">
                            <h4 class="text-2xl font-bold text-primary-dark">Kudakwashe Kunaka</h4>
                            <p class="text-lg font-medium text-primary">Chief Communications Officer/Media Relations Manager</p>
                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">Kudakwashe directs our communication strategies and manages media relations. With a background in project management, he ensures that our brand message is clear, consistent, and effectively reaches our audience.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 text-center">
                        <div class="relative w-48 h-48 rounded-full overflow-hidden mb-4 transition-all duration-400 group-hover:scale-110">
                            <img src="images/avatar.png" alt="Alois Tadiwa Chipfurutse" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-center">
                            <h4 class="text-2xl font-bold text-primary-dark">Alois Tadiwa Chipfurutse</h4>
                            <p class="text-lg font-medium text-primary">Business Development Manager/Client Acquisition Specialist</p>
                            <p class="mt-2 text-gray-600 text-sm leading-relaxed">As our Business Development Manager, Alois is a driving force behind our growth. Her focus on client acquisition and relationship-building is essential to expanding our market reach and connecting with new partners.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination mt-6"></div>
            <div class="swiper-button-next text-primary"></div>
            <div class="swiper-button-prev text-primary"></div>
        </div>
    </div>
</section>

---

<section class="bg-primary text-white py-16 text-center reveal" data-animation="fade-in-up">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Interested in Joining Our Team?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">We are always looking for passionate and talented individuals to join our growing family. Explore our open positions and find your next opportunity.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-primary font-bold rounded-full shadow-lg hover:bg-gray-200 transition-all duration-300 transform hover:-translate-y-1">Explore Opportunities</a>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>