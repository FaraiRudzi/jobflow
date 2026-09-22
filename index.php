<?php
require_once 'config.php';
$pageTitle = 'JobFlow - Transforming Businesses, Empowering Talent';
$currentPage = 'home';
$pageDescription = 'Job Flow Digital Solutions offers comprehensive digital services for businesses and job seekers, specializing in talent acquisition, web development, and digital marketing.';
require_once 'includes/header.php';
?>

<section class="hero-modern">
    <div class="hero-backdrop"></div>
    <div class="container hero-inner">
        <div class="hero-copy" data-aos="fade-up">
            <span class="hero-badge">Global talent. Local impact.</span>
            <h1>Smarter outsourcing for businesses that want to scale with confidence.</h1>
            <p>Job Flow Digital Solutions helps companies access high-performing African professionals for customer support, IT operations, finance, dental administration, and executive support—without the overhead of traditional hiring.</p>
            <div class="hero-actions">
                <a href="<?= BASE_URL ?>services.php" class="primary-btn">Explore services</a>
                <a href="<?= BASE_URL ?>contact.php" class="secondary-btn">Book a consultation</a>
            </div>
            <ul class="mini-list">
                <li><i class="fa-solid fa-check"></i> 70% cost-efficient staffing</li>
                <li><i class="fa-solid fa-check"></i> Dedicated, skilled specialists</li>
                <li><i class="fa-solid fa-check"></i> Trusted by growing businesses</li>
            </ul>
        </div>

        <div class="hero-panel" data-aos="fade-left" data-aos-delay="150">
            <div class="hero-card stat-card featured">
                <span class="label">Client growth</span>
                <strong>+240%</strong>
                <small>Operational efficiency improvements</small>
            </div>
            <div class="hero-card info-card">
                <div class="card-topline">
                    <span class="dot"></span>
                    <span>Performance snapshot</span>
                </div>
                <div class="mini-metrics">
                    <div>
                        <strong>500+</strong>
                        <span>Professionals placed</span>
                    </div>
                    <div>
                        <strong>98%</strong>
                        <span>Client satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="trust-strip">
    <div class="container trust-inner">
        <span>Trusted by businesses across operations, support, finance, and digital services</span>
        <div class="trust-items">
            <span>Outsourcing</span>
            <span>Customer Support</span>
            <span>IT Services</span>
            <span>Talent Acquisition</span>
            <span>Finance</span>
        </div>
    </div>
</div>

<section class="section-alt">
    <div class="container">
        <div class="section-head" data-aos="fade-up">
            <span class="eyebrow">Why partner with us</span>
            <h2>Built for modern businesses that need speed, quality, and trust.</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-panel" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon"><i class="fa-solid fa-bolt"></i></div>
                <h3>Operational efficiency</h3>
                <p>We help businesses streamline repetitive tasks, improve turnaround time, and free internal teams to focus on growth.</p>
            </article>

            <article class="feature-panel" data-aos="fade-up" data-aos-delay="150">
                <div class="feature-icon"><i class="fa-solid fa-user-tie"></i></div>
                <h3>Qualified professionals</h3>
                <p>Our network includes trained specialists in admin support, customer service, accounting, technical operations, and more.</p>
            </article>

            <article class="feature-panel" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3>Scalable growth</h3>
                <p>Whether you need a small team or a large outsourcing division, we design solutions that grow with your business.</p>
            </article>
        </div>
    </div>
</section>

<section class="section-solid">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">What we deliver</span>
            <h2>Flexible solutions for the functions that move your business forward.</h2>
        </div>

        <div class="service-grid">
            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon"><i class="fa-solid fa-briefcase"></i></div>
                <h3>Talent acquisition</h3>
                <p>Hire the right people quickly with a smarter recruitment process built around quality and speed.</p>
                <a href="<?= BASE_URL ?>talent_acquisition.php">Learn more</a>
            </article>

            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="150">
                <div class="service-icon"><i class="fa-solid fa-computer"></i></div>
                <h3>IT support</h3>
                <p>Dependable technical assistance and operational support that keeps your systems and teams efficient.</p>
                <a href="<?= BASE_URL ?>it_services.php">Learn more</a>
            </article>

            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon"><i class="fa-solid fa-calculator"></i></div>
                <h3>Finance & accounting</h3>
                <p>Accurate support for bookkeeping, reconciliation, reporting, and financial process management.</p>
                <a href="<?= BASE_URL ?>finance_accounting.php">Learn more</a>
            </article>

            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="250">
                <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                <h3>Dental support</h3>
                <p>Efficient front-office and operational support designed for modern dental practice growth.</p>
                <a href="<?= BASE_URL ?>dental_services.php">Learn more</a>
            </article>

            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon"><i class="fa-solid fa-headset"></i></div>
                <h3>Customer support</h3>
                <p>Friendly, professional service teams that elevate customer satisfaction and brand perception.</p>
                <a href="<?= BASE_URL ?>customer_support.php">Learn more</a>
            </article>

            <article class="service-card-modern" data-aos="fade-up" data-aos-delay="350">
                <div class="service-icon"><i class="fa-solid fa-people-group"></i></div>
                <h3>BPO solutions</h3>
                <p>End-to-end support for operations that need reliability, consistency, and measurable processes.</p>
                <a href="<?= BASE_URL ?>bpo.php">Learn more</a>
            </article>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container process-wrap">
        <div class="section-head" data-aos="fade-up">
            <span class="eyebrow">How we work</span>
            <h2>A clear, consultative process designed around results.</h2>
        </div>

        <div class="process-grid">
            <article class="process-step" data-aos="fade-up" data-aos-delay="100">
                <span>01</span>
                <h3>Understand your needs</h3>
                <p>We assess your goals, workflows, and bottlenecks to design the right outsourcing model.</p>
            </article>
            <article class="process-step" data-aos="fade-up" data-aos-delay="150">
                <span>02</span>
                <h3>Build the right team</h3>
                <p>We identify the skills, experience, and roles needed to fit your business and budget.</p>
            </article>
            <article class="process-step" data-aos="fade-up" data-aos-delay="200">
                <span>03</span>
                <h3>Launch with structure</h3>
                <p>We implement onboarding, SOPs, and communication systems to keep execution smooth from day one.</p>
            </article>
            <article class="process-step" data-aos="fade-up" data-aos-delay="250">
                <span>04</span>
                <h3>Optimize continuously</h3>
                <p>We review performance, improve operations, and refine support as your business evolves.</p>
            </article>
        </div>
    </div>
</section>

<section class="stats-band">
    <div class="container stats-grid">
        <div class="stat-card" data-aos="zoom-in">
            <strong class="counter" data-target="70">0</strong>
            <span>Cost savings</span>
        </div>
        <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
            <strong class="counter" data-target="500">0</strong>
            <span>Professionals placed</span>
        </div>
        <div class="stat-card" data-aos="zoom-in" data-aos-delay="150">
            <strong class="counter" data-target="98">0</strong>
            <span>Client satisfaction</span>
        </div>
        <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
            <strong class="counter" data-target="24">0</strong>
            <span>Hours response</span>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">Why clients choose us</span>
            <h2>Professional support that feels like an extension of your team.</h2>
        </div>

        <div class="promise-grid">
            <div class="promise-box" data-aos="fade-right">
                <h3>Reliable expertise</h3>
                <p>Our specialists are selected for skill, professionalism, and a strong work ethic so your operations stay consistent and accountable.</p>
            </div>
            <div class="promise-box" data-aos="fade-up">
                <h3>Transparent communication</h3>
                <p>We maintain clear reporting, dependable communication, and strong collaboration so you’re always informed.</p>
            </div>
            <div class="promise-box" data-aos="fade-left">
                <h3>Tailor-made strategy</h3>
                <p>We do not force a one-size-fits-all arrangement. Each solution is built around your real needs and growth goals.</p>
            </div>
        </div>
    </div>
</section>

<?php
$testimonials = json_decode(file_get_contents('testimonials.json'), true) ?: [];
if (!empty($testimonials)):
?>
<section class="section-solid testimonial-section">
    <div class="container">
        <div class="section-head" data-aos="fade-up">
            <span class="eyebrow">Client feedback</span>
            <h2>What businesses say after partnering with Job Flow.</h2>
        </div>

        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide testimonial-slide">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p>“<?= htmlspecialchars($t['quote']); ?>”</p>
                            <div class="person">
                                <img src="<?= htmlspecialchars($t['image'] ?? BASE_URL . 'images/default-avatar.jpg'); ?>" alt="<?= htmlspecialchars($t['name'] ?? 'Anonymous'); ?>">
                                <div>
                                    <strong><?= htmlspecialchars($t['name'] ?? 'Anonymous'); ?></strong>
                                    <span><?= htmlspecialchars($t['position'] ?? 'Client'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="cta-section">
    <div class="container cta-panel" data-aos="fade-up">
        <div>
            <span class="eyebrow light">Let’s build your next advantage</span>
            <h2>Ready to scale smarter, faster, and more efficiently?</h2>
        </div>
        <div class="cta-actions">
            <a href="<?= BASE_URL ?>contact.php" class="primary-btn">Talk to our team</a>
            <a href="<?= BASE_URL ?>about_us.php" class="secondary-btn light">Learn about us</a>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({ duration: 1000, once: true, easing: 'ease-out-cubic' });

        new Swiper('.testimonials-slider', {
            loop: true,
            speed: 800,
            autoplay: { delay: 5000, disableOnInteraction: false },
            slidesPerView: 1,
            spaceBetween: 24,
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });

        const counters = document.querySelectorAll('.counter');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = Number(counter.getAttribute('data-target'));
                let value = 0;
                const duration = 1400;
                const start = performance.now();

                function update(now) {
                    const progress = Math.min((now - start) / duration, 1);
                    value = Math.floor(progress * target);
                    counter.textContent = value;
                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        counter.textContent = target;
                    }
                }

                requestAnimationFrame(update);
                counterObserver.unobserve(counter);
            });
        }, { threshold: 0.5 });

        counters.forEach((counter) => counterObserver.observe(counter));
    });
</script>

<?php require_once 'includes/footer.php'; ?>
