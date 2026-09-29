<?php
require_once 'config.php';
$pageTitle = 'Outsourcing Company in Zimbabwe | African Talent | JobFlow';
$currentPage = 'home';
$pageDescription = 'JobFlow Digital Solutions is a Harare outsourcing company providing skilled African talent for customer support, IT, finance, dental and BPO. Save up to 70%.';
$faqs = [
 ['What is JobFlow Digital Solutions?','JobFlow Digital Solutions is an outsourcing company. We connect businesses worldwide with skilled African professionals for customer support, IT, finance and accounting, dental practice support, talent acquisition and business process outsourcing (BPO).'],
 ['How much can I save by outsourcing to Africa?','Clients can save up to 70% compared with traditional in-house hiring, depending on the role, experience level and scope of work. Book a consultation and we will scope the exact cost for your team.'],
 ['Which outsourcing services does JobFlow offer?','We offer talent acquisition, IT support, finance and accounting outsourcing, dental practice support, customer support outsourcing, virtual assistants and end-to-end BPO solutions.'],
 ['Can JobFlow support dental practices?','Yes. Our dental practice support teams handle front-office administration and operational tasks so your clinicians can focus on patients and practice growth.'],
 ['How do I get started with outsourcing?','Contact us to book a consultation. We assess your goals and workflows, build the right team, launch with onboarding and SOPs, and keep improving performance. We respond within 24 hours.'],
];
$extraSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($q) {
        return [
            '@type' => 'Question',
            'name' => $q[0],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $q[1]
            ]
        ];
    }, $faqs)
];
require_once 'includes/header.php';
?>

<section class="jf-carousel" aria-label="Featured outsourcing services">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <?php
            $slides = [
              ['h1','images/professionals.png','Team of African professionals providing remote outsourcing services for global businesses','Outsourcing to skilled African talent, built for growing businesses','JobFlow Digital Solutions is an outsourcing company. We place dedicated remote professionals in customer support, IT, finance, dental administration and executive support, at up to 70% lower cost than traditional hiring.','contact.php','Book a consultation','services.php','Explore outsourcing services'],
              ['h2','images/customer.png','Customer support agent wearing a headset assisting international clients','Customer support and virtual assistants who work like your own team','Friendly, well-trained agents handle your calls, chats and inbox, so customers get fast answers and your staff can focus on growth.','customer_support.php','See customer support outsourcing','contact.php','Talk to our team'],
              ['h2','images/it.png','Finance and IT specialists collaborating at laptops in a modern office','Finance, IT and dental practice support at a fraction of the cost','Bookkeeping, technical support and front-office administration from trained specialists who plug straight into your workflow.','finance_accounting.php','Explore finance outsourcing','dental_services.php','Dental practice support'],
            ];
            foreach ($slides as $i => [$tag,$img,$alt,$title,$lead,$l1,$t1,$l2,$t2]): ?>
            <div class="swiper-slide jf-slide">
                <img src="<?= BASE_URL.$img ?>" alt="<?= htmlspecialchars($alt) ?>" width="1920" height="1080" <?= $i===0 ? 'fetchpriority="high"' : 'loading="lazy"' ?> onerror="this.style.display='none'">
                <div class="jf-slide-inner container">
                    <<?= $tag ?> class="jf-title"><?= htmlspecialchars($title) ?></<?= $tag ?>>
                    <p class="lead"><?= htmlspecialchars($lead) ?></p>
                    <div class="hero-actions">
                        <a href="<?= BASE_URL.$l1 ?>" class="primary-btn"><?= $t1 ?></a>
                        <a href="<?= BASE_URL.$l2 ?>" class="secondary-btn"><?= $t2 ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev" aria-label="Previous slide"></div>
        <div class="swiper-button-next" aria-label="Next slide"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<div class="jf-strip">
    <div class="container jf-unique">
        <h2>What makes us different</h2>
        <ul>
            <li><i class="fa-solid fa-check"></i>Up to 70% cost-efficient staffing</li>
            <li><i class="fa-solid fa-check"></i>Dedicated, skilled specialists</li>
            <li><i class="fa-solid fa-check"></i>Response within 24 hours</li>
            <li><i class="fa-solid fa-check"></i>Trusted by growing businesses</li>
        </ul>
    </div>
</div>

<nav class="jf-sectors" aria-label="Outsourcing services we offer">
    <div class="container"><span>We support</span>
        <a href="<?= BASE_URL ?>customer_support.php">Customer Support</a>
        <a href="<?= BASE_URL ?>it_services.php">IT Services</a>
        <a href="<?= BASE_URL ?>finance_accounting.php">Finance &amp; Accounting</a>
        <a href="<?= BASE_URL ?>dental_services.php">Dental Practices</a>
        <a href="<?= BASE_URL ?>talent_acquisition.php">Talent Acquisition</a>
        <a href="<?= BASE_URL ?>bpo.php">BPO</a>
    </div>
</nav>

<section class="section-alt">
    <div class="container jf-split">
        <div data-aos="fade-right">
            <span class="eyebrow">Why partner with us</span>
            <h2>Africa's outsourcing partner for remote teams you can trust.</h2>
            <p>As a <a href="<?= BASE_URL ?>bpo.php" class="jf-link">business process outsourcing company</a>, we streamline repetitive work, shorten turnaround times and free your team to focus on growth. Whether you need one virtual assistant or a full outsourcing division, we build a team that scales with you. Explore our <a href="<?= BASE_URL ?>services.php" class="jf-link">outsourcing services</a> or meet <a href="<?= BASE_URL ?>team.php" class="jf-link">the team behind JobFlow</a>.</p>
            <a href="<?= BASE_URL ?>about_us.php" class="primary-btn">Learn about us</a>
        </div>
        <div class="jf-panel" data-aos="fade-left">
            <strong>+240%</strong>
            <span>Operational efficiency improvements for our clients</span>
            <dl>
                <div><dt>500+</dt><dd>Professionals placed</dd></div>
                <div><dt>98%</dt><dd>Client satisfaction</dd></div>
            </dl>
        </div>
    </div>
</section>

<section class="section-solid">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">How it works</span>
            <h2>From first call to first day, in four clear steps.</h2>
        </div>
        <div class="jf-steps">
            <?php foreach ([
                ['Understand your needs','We assess your goals, workflows, and bottlenecks to design the right outsourcing model.'],
                ['Build the right team','We identify the skills, experience, and roles that fit your business and budget.'],
                ['Launch with structure','Onboarding, SOPs, and communication systems keep execution smooth from day one.'],
                ['Optimize continuously','We review performance and refine support as your business evolves.'],
            ] as $i => [$t,$d]): ?>
            <div class="jf-step" data-aos="fade-up">
                <b><?= $i+1 ?></b>
                <div><h3><?= $t ?></h3><p><?= $d ?></p></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">What we do</span>
            <h2>Flexible support for the functions that move your business forward.</h2>
        </div>
        <div class="jf-services" data-aos="fade-up">
            <?php foreach ([
                ['briefcase','Talent acquisition','Hire the right people quickly with a recruitment process built around quality and speed.','talent_acquisition'],
                ['computer','IT support','Dependable technical assistance that keeps your systems and teams efficient.','it_services'],
                ['calculator','Finance & accounting','Accurate bookkeeping, reconciliation, reporting, and process management.','finance_accounting'],
                ['tooth','Dental support','Front-office and operational support designed for growing dental practices.','dental_services'],
                ['headset','Customer support','Friendly, professional teams that lift customer satisfaction and brand perception.','customer_support'],
                ['people-group','BPO solutions','End-to-end support for operations that need consistency and measurable processes.','bpo'],
            ] as [$ic,$t,$d,$f]): ?>
            <a class="jf-service" href="<?= BASE_URL.$f ?>.php" title="<?= $t ?> outsourcing services">
                <i class="fa-solid fa-<?= $ic ?>"></i><h3><?= $t ?></h3><p><?= $d ?></p><span>Learn more</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="stats-band">
    <div class="container stats-grid">
        <div class="stat-card" data-aos="fade-up"><strong class="counter" data-target="70">0</strong><span>Cost savings</span></div>
        <div class="stat-card" data-aos="fade-up" data-aos-delay="100"><strong class="counter" data-target="500">0</strong><span>Professionals placed</span></div>
        <div class="stat-card" data-aos="fade-up" data-aos-delay="150"><strong class="counter" data-target="98">0</strong><span>Client satisfaction</span></div>
        <div class="stat-card" data-aos="fade-up" data-aos-delay="200"><strong class="counter" data-target="24">0</strong><span>Hours response</span></div>
    </div>
</section>

<section class="section-solid">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">Why clients choose us</span>
            <h2>Support that feels like an extension of your team.</h2>
        </div>
        <div class="promise-grid">
            <div class="promise-box" data-aos="fade-up"><h3>Reliable expertise</h3><p>Specialists selected for skill, professionalism, and work ethic, so your operations stay consistent and accountable.</p></div>
            <div class="promise-box" data-aos="fade-up" data-aos-delay="100"><h3>Transparent communication</h3><p>Clear reporting and dependable collaboration keep you informed at every stage.</p></div>
            <div class="promise-box" data-aos="fade-up" data-aos-delay="200"><h3>Tailor-made strategy</h3><p>No one-size-fits-all arrangements. Each solution is built around your real needs and growth goals.</p></div>
        </div>
    </div>
</section>

<?php
$testimonials = json_decode(file_get_contents('testimonials.json'), true) ?: [];
if (!empty($testimonials)):
?>
<section class="section-alt testimonial-section">
    <div class="container">
        <div class="section-head" data-aos="fade-up">
            <span class="eyebrow">Client feedback</span>
            <h2>What businesses say after partnering with JobFlow.</h2>
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
                            <div><strong><?= htmlspecialchars($t['name'] ?? 'Anonymous'); ?></strong><span><?= htmlspecialchars($t['position'] ?? 'Client'); ?></span></div>
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

<section class="section-solid jf-faq">
    <div class="container">
        <div class="section-head narrow" data-aos="fade-up">
            <span class="eyebrow">Frequently asked questions</span>
            <h2>Outsourcing to Africa: your questions answered.</h2>
        </div>
        <div class="jf-faq-list">
            <?php foreach ($faqs as $q): ?>
            <details><summary><?= htmlspecialchars($q[0]) ?></summary><p><?= htmlspecialchars($q[1]) ?></p></details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section" style="padding:4rem 0 6rem">
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
    const calm = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    new Swiper('.hero-swiper', {
        loop: true, effect: 'fade', fadeEffect: { crossFade: true }, speed: 1200,
        autoplay: calm ? false : { delay: 6000, disableOnInteraction: false },
        pagination: { el: '.hero-swiper .swiper-pagination', clickable: true },
        navigation: { nextEl: '.hero-swiper .swiper-button-next', prevEl: '.hero-swiper .swiper-button-prev' }
    });
    new Swiper('.testimonials-slider', {
        loop: true, speed: 800, autoplay: { delay: 5000, disableOnInteraction: false },
        slidesPerView: 1, spaceBetween: 24,
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
    });
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target, target = Number(el.dataset.target), start = performance.now();
            (function tick(now) {
                const p = Math.min((now - start) / 1400, 1);
                el.textContent = p < 1 ? Math.floor(p * target) : target;
                if (p < 1) requestAnimationFrame(tick);
            })(start);
            io.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter').forEach((c) => io.observe(c));
});
</script>

<?php require_once 'includes/footer.php'; ?>
