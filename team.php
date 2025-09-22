<?php
// ALWAYS load config.php first!
require_once 'config.php';

$pageTitle = 'Our Team - Job Flow';
$currentPage = 'team';

require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container text-center">
        <h1>Meet the Experts</h1>
    </div>
</section>

<section class="section">
    <div class="container team-intro reveal text-center">
        <h2>The Driving Force Behind Our Success</h2>
        <p>Our success is built on the expertise and dedication of our team. Each member is a seasoned professional passionate about delivering exceptional results and providing the highest level of service to our clients.
            Our team is a collective of skilled individuals united by a passion for excellence and a commitment to our clients.
                    
        </p>
    </div>
</section>


    <div class="container content-grid mt-5 reveal" data-animation="fade-in-up">
        <div class="content-text">
            <h5>Experienced Professionals</h5>
            <p>Our team members have extensive experience in their respective fields, with a deep understanding of the challenges and complexities of their work. We leverage a wide range of expertise to ensure we provide comprehensive and effective solutions.</p>
        </div>
        <div class="content-image">
            <i class="fas fa-handshake fa-5x text-primary"></i>
        </div>
    </div>

    <div class="container content-grid mt-5 reveal" data-animation="fade-in-up" data-delay="100">
        <div class="content-image">
            <i class="fas fa-graduation-cap fa-5x text-primary"></i>
        </div>
        <div class="content-text">
            <h5>Expertise & Training</h5>
            <p>We believe in continuous learning. Our team is trained in the latest techniques and technologies, ensuring we have the skills and knowledge needed to provide cutting-edge solutions that keep you ahead of the curve.</p>
        </div>
    </div>

    <div class="container content-grid mt-5 reveal" data-animation="fade-in-up" data-delay="200">
        <div class="content-text">
            <h5>Collaborative Approach</h5>
            <p>Teamwork is at the heart of our operations. Our team works together seamlessly, ensuring every project is handled with care and precision, from start to finish. We are committed to a unified approach for guaranteed success.</p>
        </div>
        <div class="content-image">
            <i class="fas fa-users fa-5x text-primary"></i>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="fw-bold">Our Team</h2>
        </div>
        
        <div class="swiper team-slider reveal" data-animation="fade-in-up">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card-image">
                            <img src="images/trish.jpg" alt="Trish Faith Chivangu">
                        </div>
                        <div class="team-card-content">
                            <h4>Trish Faith Chivangu</h4>
                            <p class="title">CEO & Founder</p>
                            <p class="bio">As the visionary behind Job Flow, Trish provides the strategic direction and leadership that drives our mission to empower businesses and African talent. She has a proven track record of creating successful partnerships and innovative solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card-image">
                            <img src="images/tino.jpg" alt="Tinotenda M Muyengwa">
                        </div>
                        <div class="team-card-content">
                            <h4>Tinotenda M Muyengwa</h4>
                            <p class="title">Network Architect/Infrastructure Engineer</p>
                            <p class="bio">With extensive expertise in telecommunications and a strong foundation in engineering, Tinotenda is the cornerstone of our technical infrastructure. He is responsible for designing and maintaining the robust systems that power our services.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card-image">
                            <img src="images/zanele.jpeg" alt="Zanele Danisa">
                        </div>
                        <div class="team-card-content">
                            <h4>Zanele Danisa</h4>
                            <p class="title">Customer Support Engineer and Trainer</p>
                            <p class="bio">Zanele is dedicated to ensuring a seamless experience for every client. She not only resolves technical challenges but also trains our support staff to deliver the highest level of customer care and product knowledge.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card-image">
                            <img src="images/avatar.png" alt="Kudakwashe Kunaka">
                        </div>
                        <div class="team-card-content">
                            <h4>Kudakwashe Kunaka</h4>
                            <p class="title">Chief Communications Officer/Media Relations Manager</p>
                           
                            <p class="bio">Kudakwashe directs our communication strategies and manages media relations. With a background in project management, he ensures that our brand message is clear, consistent, and effectively reaches our audience.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card-image">
                            <img src="images/avatar.png" alt="Tanatswa">
                        </div>
                        <div class="team-card-content">
                            <h4>Alois Tadiwa Chipfurutse</h4>
                            <p class="title">Business Development Manager/Client Acquisition Specialist</p>
                            
                            <p class="bio">As our Business Development Manager, Alois is a driving force behind our growth. Her focus on client acquisition and relationship-building is essential to expanding our market reach and connecting with new partners.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="banner reveal">
    <div class="container text-center">
        <h2>Interested in Joining Our Team?</h2>
        <p class="lead my-4">We are always looking for passionate and talented individuals to join our growing family. Explore our open positions and find your next opportunity.</p>
        <a href="contact.php#contact" class="btn btn-light btn-lg cta-banner">Explore Opportunities</a>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>