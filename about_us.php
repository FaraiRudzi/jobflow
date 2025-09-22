<?php 
require_once 'config.php';

$pageTitle = 'About Us - Job Flow';
$currentPage = 'about';

require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="reveal" data-animation="fade-in-up">Transforming Business and Empowering the World</h1>
    </div>
</section>

<section class="section">
    <div class="container content-grid reveal" data-animation="fade-in-up">
        <div class="content-text">
            <h2>Our Story</h2>
            <p>
                At Job Flow Digital Solutions, we saw an opportunity to connect global businesses with the incredible talent pool globally. We founded our company to be more than just an outsourcing provider; we're a <b>pioneering force for economic empowerment.</b> By bridging the gap between businesses seeking top-tier talent at competitive rates and highly educated, English-speaking professionals in Africa, we create a win-win solution.
            </p>
            <p>
                Our model not only enhances your productivity and efficiency but also provides dignified, empowering opportunities that foster growth and self-worth across the continent.
            </p>
        </div>
        <div class="content-image">
            <img src="<?php echo BASE_URL; ?>images/professionals.png" alt="A team of diverse professionals collaborating in a modern office environment.">
        </div>
    </div>
</section>



<section class="section mission-vision-section">
  <div class="container">
    <div class="text-center reveal" data-animation="fade-in-up">
      <h2 class="section-title">Our Vision & Mission</h2>
      <p class="lead text-muted mx-auto section-description">
        Our core beliefs define our purpose and drive us to create a lasting impact.
      </p>
    </div>

    <div class="mission-vision-grid d-grid mt-5">
      <!-- Vision -->
      <div class="mission-vision-card reveal" data-animation="fade-in-up" data-delay="100">
        <div class="icon-box-lg"><i class="fas fa-eye fa-3x text-primary"></i></div>
        <h3>Our Vision</h3>
        <p>
          To be a global leader in business process outsourcing, recognized for our excellence, 
          integrity, and unwavering commitment to creating a positive impact.
        </p>
      </div>

      <!-- Mission -->
      <div class="mission-vision-card reveal" data-animation="fade-in-up" data-delay="200">
        <div class="icon-box-lg"><i class="fas fa-rocket fa-3x text-primary"></i></div>
        <h3>Our Mission</h3>
        <p>
          Our mission is to empower businesses with efficient, scalable solutions while transforming the World
          through excellence and innovation. We foster a dynamic work environment that enables our team 
          members to thrive and deliver impactful services that benefit the continent.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="text-center reveal" data-animation="fade-in-up">
      <h2 class="section-title">Our Guiding Principles</h2>
      <p class="lead text-muted mx-auto section-description">
        These principles guide every decision we make and are the foundation of our success.
      </p>
    </div>

    <div class="core-values-grid mt-5">
      <div class="value-card reveal" data-animation="fade-in-up" data-delay="100">
        <div class="icon-box"><i class="fas fa-star"></i></div>
        <h5>Excellence</h5>
        <p class="text-muted small">We deliver superior results with quality and consistency.</p>
      </div>

      <div class="value-card reveal" data-animation="fade-in-up" data-delay="200">
        <div class="icon-box"><i class="fas fa-shield-alt"></i></div>
        <h5>Integrity</h5>
        <p class="text-muted small">We operate with honesty, transparency, and accountability.</p>
      </div>

      <div class="value-card reveal" data-animation="fade-in-up" data-delay="300">
        <div class="icon-box"><i class="fas fa-lightbulb"></i></div>
        <h5>Innovation</h5>
        <p class="text-muted small">We embrace creativity and technology to solve challenges.</p>
      </div>

      <div class="value-card reveal" data-animation="fade-in-up" data-delay="400">
        <div class="icon-box"><i class="fas fa-fist-raised"></i></div>
        <h5>Empowerment</h5>
        <p class="text-muted small">We create opportunities for people to thrive and grow.</p>
      </div>

      <div class="value-card reveal" data-animation="fade-in-up" data-delay="500">
        <div class="icon-box"><i class="fas fa-users"></i></div>
        <h5>Collaboration</h5>
        <p class="text-muted small">We work together to achieve shared goals and success.</p>
      </div>

      <div class="value-card reveal" data-animation="fade-in-up" data-delay="600">
        <div class="icon-box"><i class="fas fa-heart"></i></div>
        <h5>Faithfulness</h5>
        <p class="text-muted small">We are loyal and committed to building lasting trust.</p>
      </div>
    </div>
  </div>
</section>


<section class="banner reveal" data-animation="fade-in-up">
    <div class="container text-center">
        <h2>Ready to Partner With Us?</h2>
        <p class="lead my-4">Discover how our team can help your business thrive. Get a free, no-obligation consultation to learn more about our tailored solutions.</p>
        <a href="about_us.php#contact" class="btn btn-light btn-lg cta-banner">Get Started Today</a>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>