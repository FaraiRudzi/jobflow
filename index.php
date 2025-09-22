<?php
    // --- SETUP ---
    // Always include config first to define BASE_URL
    require_once 'config.php';
    
    $pageTitle = 'Job Flow - Transforming Businesses, Empowering Talent';
    $currentPage = 'home';
    $pageDescription = 'Job Flow Digital Solutions offers comprehensive digital services for businesses and job seekers, specializing in talent acquisition, web development, and digital marketing.';
    
    // Header includes all CSS, fonts, and the top navigation
    require_once 'includes/header.php';
?>

<section class="hero-slider-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide" style="background-image: url('<?php echo BASE_URL; ?>images/solutions.jpg')">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="display-3 fw-bold reveal" data-animation="fade-in-up" data-delay="0">Transforming Businesses, Empowering Africa</h1>
                    <p class="lead my-4 reveal" data-animation="fade-in-up" data-delay="200">We connect top-tier African talent with global businesses, providing innovative outsourcing solutions that drive growth.</p>
                    <a href="<?php echo BASE_URL; ?>about_us.php" class="btn btn-primary btn-lg cta-hero reveal" data-animation="fade-in-up" data-delay="400">Discover Our Mission</a>
                </div>
            </div>
            <div class="swiper-slide hero-slide" style="background-image: url('<?php echo BASE_URL; ?>images/customer.jpg')">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="display-3 fw-bold reveal" data-animation="fade-in-up" data-delay="0">Unlock Unmatched Value & Efficiency</h1>
                    <p class="lead my-4 reveal" data-animation="fade-in-up" data-delay="200">Leverage our pool of highly-educated professionals at rates up to 70% below US pricing.</p>
                    <a href="<?php echo BASE_URL; ?>services.php" class="btn btn-primary btn-lg cta-hero reveal" data-animation="fade-in-up" data-delay="400">Explore Our Services</a>
                </div>
            </div>
            <div class="swiper-slide hero-slide" style="background-image: url('<?php echo BASE_URL; ?>images/finance.webp')">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="display-3 fw-bold reveal" data-animation="fade-in-up" data-delay="0">A Full Suite of Professional Solutions</h1>
                    <p class="lead my-4 reveal" data-animation="fade-in-up" data-delay="200">From Finance and IT to Customer Support, we provide end-to-end solutions to streamline your business.</p>
                    <a href="<?php echo BASE_URL; ?>about_us.php#contact" class="btn btn-primary btn-lg cta-hero reveal" data-animation="fade-in-up" data-delay="400">Get a Free Quote</a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>



<section class="section">
    <div class="container">
        <div class="text-center reveal" data-animation="fade-in-up">
            <h2 class="section-title">Why Partner With Job Flow?</h2>
            <p class="lead text-muted mx-auto section-description">We go beyond traditional outsourcing. We build partnerships that foster growth, drive innovation, and create lasting value for your business and our talent pool.</p>
        </div>
        <div class="mt-5 why-partner-grid">
            <div class="feature-card reveal" data-animation="fade-in-up" data-delay="100">
                <div class="icon-box-lg"><i class="fas fa-lightbulb"></i></div>
                <h3>Innovation</h3>
                <p>We leverage cutting-edge technology and creative strategies to solve your most complex challenges, ensuring you stay ahead of the curve.</p>
            </div>
            <div class="feature-card reveal" data-animation="fade-in-up" data-delay="200">
                <div class="icon-box-lg"><i class="fas fa-handshake"></i></div>
                <h3>Partnership</h3>
                <p>Our team becomes a dedicated extension of yours, fully invested in understanding your goals and committed to your long-term success.</p>
            </div>
            <div class="feature-card reveal" data-animation="fade-in-up" data-delay="300">
                <div class="icon-box-lg"><i class="fas fa-fist-raised"></i></div>
                <h3>Empowerment</h3>
                <p>Our business model provides life-changing opportunities to talented professionals, contributing to sustainable economic growth in Africa.</p>
            </div>
        </div>
    </div>
</section>



<section class="section bg-light py-5">
    <div class="container">
        <div class="text-center reveal mb-5" data-animation="fade-in-up">
            <h2 class="section-title">A Full Suite of Professional Services</h2>
            <p class="lead text-muted mx-auto section-description">
                From talent acquisition to IT support, we provide end-to-end solutions to streamline your business operations.
            </p>
        </div>

        <div class="services-wrapper">
            <div class="service-card reveal" data-animation="fade-in-up" data-delay="100">
                <div class="icon-box-lg service-icon-blue">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Talent Acquisition</h3>
                <p>Find, vet, and onboard top-tier professionals quickly and efficiently.</p>
            </div>

            <div class="service-card reveal" data-animation="fade-in-up" data-delay="200">
                <div class="icon-box-lg service-icon-blue">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3>Finance & Accounting</h3>
                <p>Streamline payroll, bookkeeping, and financial analysis with our experts.</p>
            </div>

            <div class="service-card reveal" data-animation="fade-in-up" data-delay="300">
                <div class="icon-box-lg service-icon-blue">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>IT Services</h3>
                <p>Get comprehensive support, from help desk to custom software development.</p>
            </div>
        </div>

        <div class="text-center mt-5 reveal" data-animation="fade-in-up">
            <a href="<?php echo BASE_URL; ?>services.php" class="btn cta-hero">View All Services</a>
        </div>
    </div>
</section>


<section class="stats-section section py-5">
    <div class="container">
        <div class="text-center reveal" data-animation="fade-in-up">
            <h2 class="section-title">Our Impact in Numbers</h2>
            <p class="lead text-muted mx-auto section-description">Our commitment to excellence is reflected in our tangible results.</p>
        </div>
        <div class="stats-grid">
            <div class="stat-item reveal" data-animation="fade-in-up" data-delay="100">
                <h3 class="stat-number" data-target="70">0</h3>
                <p>Cost Savings up to %</p>
            </div>
            
            <div class="stat-item reveal" data-animation="fade-in-up" data-delay="200">
                <h3 class="stat-number" data-target="500">0</h3>
                <p>Professionals Empowered</p>
            </div>
            
            <div class="stat-item reveal" data-animation="fade-in-up" data-delay="300">
                <h3 class="stat-number" data-target="98">0</h3>
                <p>Client Satisfaction %</p>
            </div>
        </div>
    </div>
</section>


<section class="testimonial-form-section section">
    <div class="container">
        <div class="text-center mb-5 reveal" data-animation="fade-in-up">
            <h2 class="section-title">Submit Your Testimonial</h2>
            <p class="lead text-muted section-description">
                Share your experience with Job Flow. Your feedback helps us improve and connect with more clients.
            </p>
        </div>

        <div class="contact-form-wrapper reveal" data-animation="fade-in-up" data-delay="200">
            <form action="submit_testimonial.php" method="POST" class="contact-form">
                <label for="testimonial-name" class="sr-only">Your Name</label>
                <input type="text" id="testimonial-name" name="name" placeholder="Your Name" required>
                
                <label for="testimonial-position" class="sr-only">Your Position / Company</label>
                <input type="text" id="testimonial-position" name="position" placeholder="Your Position / Company" required>
                
                <label for="testimonial-quote" class="sr-only">Your Testimonial</label>
                <textarea id="testimonial-quote" name="quote" rows="4" placeholder="Your Testimonial" required></textarea>
                
                <label for="testimonial-image" class="sr-only">Image URL (optional)</label>
                <input type="url" id="testimonial-image" name="image" placeholder="Image URL (optional)">
                
                <button type="submit" class="btn btn-primary">
                    Submit Testimonial
                </button>
            </form>
        </div>
    </div>
</section>



<?php
$testimonials = json_decode(file_get_contents('testimonials.json'), true);
if (!$testimonials) {
    $testimonials = [];
}
?>
<section class="testimonials-section section bg-light">
    <div class="container reveal" data-animation="fade-in-up">
        <h2 class="section-title">What Our Clients Say</h2>
        <?php if (!empty($testimonials)): ?>
            <div class="swiper testimonials-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $t): ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <p class="quote">"<?php echo htmlspecialchars($t['quote']); ?>"</p>
                                <div class="testimonial-author">
                                    <img src="<?php echo htmlspecialchars($t['image'] ?? BASE_URL . 'images/default-avatar.jpg'); ?>" alt="<?php echo htmlspecialchars($t['name'] ?? 'Anonymous'); ?>">
                                    <div>
                                        <h4><?php echo htmlspecialchars($t['name'] ?? 'Anonymous'); ?></h4>
                                        <p><?php echo htmlspecialchars($t['position'] ?? 'Client'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php else: ?>
            <p class="text-center lead text-muted">No testimonials yet. Be the first to share your experience!</p>
        <?php endif; ?>
    </div>
</section>



<section class="banner reveal" data-animation="fade-in-up">
    <div class="container text-center">
        <h2>Ready to Transform Your Business?</h2>
        <p class="lead my-4">Let's discuss how Job Flow can streamline your operations and drive growth.</p>
        <a href="<?php echo BASE_URL; ?>about_us.php#contact" class="btn btn-light btn-lg cta-banner">Request a Consultation</a>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>