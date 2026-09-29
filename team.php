<?php
require_once 'config.php';

$pageTitle = 'Meet the JobFlow Team | Outsourcing Experts in Harare';
$currentPage = 'team';
$pageDescription = 'Meet the leaders and specialists behind JobFlow Digital Solutions, a Harare outsourcing company delivering skilled African talent to businesses worldwide.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');

$teamMembers = [
    ['name' => 'Trish F Chivangu', 'role' => 'CEO & Founder', 'img' => 'images/trish.jpg', 'desc' => 'As the visionary behind JobFlow, Trish provides the strategic direction and leadership that drives our mission to empower businesses and African talent. She has a proven track record of creating successful partnerships and innovative solutions.'],
    ['name' => 'Tinotenda M Muyengwa', 'role' => 'Network Architect/Infrastructure Engineer', 'img' => 'images/tino.jpeg', 'desc' => 'With extensive expertise in telecommunications and a strong foundation in engineering, Tinotenda is the cornerstone of our technical infrastructure. He is responsible for designing and maintaining the robust systems that power our services.'],
    ['name' => 'Zanele Danisa', 'role' => 'Customer Support Engineer and Trainer', 'img' => 'images/zanele.jpeg', 'desc' => 'Zanele is dedicated to ensuring a seamless experience for every client. She not only resolves technical challenges but also trains our support staff to deliver the highest level of customer care and product knowledge.'],
    ['name' => 'Kudakwashe Kunaka', 'role' => 'Chief Communications Officer/Media Relations Manager', 'img' => 'images/kuda.png', 'desc' => 'Kudakwashe directs our communication strategies and manages media relations. With a background in project management, he ensures that our brand message is clear, consistent, and effectively reaches our audience.'],
    ['name' => 'Alois T Chipfurutse', 'role' => 'Chief Business Officer', 'img' => 'images/tadiwa.jpeg', 'desc' => 'As our Business Development Manager, Alois is a driving force behind our growth. Her focus on client acquisition and relationship-building is essential to expanding our market reach and connecting with new partners.'],
];

$pillars = [
    ['handshake', 'Experienced professionals', 'Our team members have extensive experience in their respective fields, with a deep understanding of the challenges and complexities of their work. We leverage a wide range of expertise to provide comprehensive and effective solutions.'],
    ['graduation-cap', 'Expertise & training', 'We believe in continuous learning. Our team is trained in the latest techniques and technologies, so we can provide cutting-edge solutions that keep you ahead of the curve.'],
    ['users', 'Collaborative approach', 'Teamwork is at the heart of our operations. Our team works together seamlessly, ensuring every project is handled with care and precision from start to finish.'],
];

$extraSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'CollectionPage',
            'name' => 'JobFlow Digital Solutions Team',
            'url' => $site . '/team.php',
            'description' => $pageDescription,
            'mainEntity' => [
                '@type' => 'ItemList',
                'itemListElement' => array_map(fn($m, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'item' => [
                        '@type' => 'Person',
                        'name' => $m['name'],
                        'jobTitle' => $m['role'],
                        'image' => $site . '/' . $m['img'],
                        'worksFor' => [
                            '@type' => 'Organization',
                            'name' => 'JobFlow Digital Solutions',
                            'url' => $site
                        ]
                    ]
                ], $teamMembers, array_keys($teamMembers))
            ]
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site . '/index.php'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Our Team', 'item' => $site . '/team.php']
            ]
        ],
    ]
];

require_once 'includes/header.php';
$initials = fn($n) => strtoupper(mb_substr($n, 0, 1) . mb_substr(strrchr(' ' . $n, ' '), 1, 1));
?>

<script>document.documentElement.classList.add('tm-js');</script>
<style>
/* Layout Grids */
.jf-ext { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; }
.jf-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }

/* Swiper Slider Overrides */
.tm-stage { overflow: hidden; }
.team-slider { overflow: visible !important; padding: 0.5rem 0 3.25rem !important; }

/* Non-active side slides: dimmed and slightly scaled down */
.team-slider .swiper-slide { 
  display: block !important; 
  height: auto !important; 
  opacity: 0.4; 
  transform: scale(0.88); 
  filter: blur(2px);
  transition: opacity 0.5s ease, transform 0.5s ease, filter 0.5s ease; 
}

/* Active center slide: clear, full size, sharp */
.team-slider.swiper-initialized .swiper-slide-active { 
  opacity: 1; 
  transform: scale(1); 
  filter: blur(0px);
  z-index: 2; 
}

/* Compact Team Card Design */
.tm-card {
  position: relative;
  height: 100%;
  display: flex;
  flex-direction: column;
  text-align: center;
  background: #fff;
  border: 1px solid var(--line, #e2e8f0);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: var(--sh-1, 0 4px 6px -1px rgba(0,0,0,0.1));
  transform: perspective(900px) rotateX(var(--rx, 0deg)) rotateY(var(--ry, 0deg));
  transition: transform .3s ease-out, box-shadow .4s;
  will-change: transform;
}
.tm-card::before {
  content: "";
  display: block;
  height: 84px;
  flex: none;
  background: radial-gradient(80% 140% at 100% 0%, rgba(242,107,58,.5), transparent 60%), linear-gradient(135deg, var(--navy-2, #1e293b), var(--navy, #0f172a));
}
.tm-card:hover {
  box-shadow: var(--sh-2, 0 10px 15px -3px rgba(0,0,0,0.1));
  transform: perspective(900px) rotateX(var(--rx, 0deg)) rotateY(var(--ry, 0deg)) translateY(-8px);
}

/* Figure & Image */
.tm-card figure {
  position: relative;
  width: 128px;
  height: 128px;
  flex: none;
  border-radius: 50%;
  margin: -64px auto 0;
  border: 4px solid #fff;
  box-shadow: var(--sh-1, 0 4px 6px -1px rgba(0,0,0,0.1));
  overflow: hidden;
  background: linear-gradient(135deg, var(--navy-2, #1e293b), var(--navy, #0f172a));
  z-index: 1;
}
.tm-card img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top;
  transition: transform .8s ease-out;
}
.tm-card:hover img { transform: scale(1.08); }
.tm-ini {
  position: absolute;
  inset: 0;
  display: grid;
  place-items: center;
  font-family: var(--serif, serif);
  font-size: 2rem;
  color: rgba(255,255,255,.4);
}

/* Card Body */
.tm-body { padding: 1rem 1.4rem 1.5rem; display: flex; flex-direction: column; flex: 1; }
.tm-body h3 { font-family: var(--serif, serif); font-weight: 500; font-size: 1.25rem; margin-bottom: .2rem; }
.tm-body h3::after {
  content: "";
  display: block;
  height: 3px;
  width: 28px;
  margin: .5rem auto 0;
  border-radius: 3px;
  background: var(--accent, #f26b3a);
  transition: width .45s cubic-bezier(.2,.7,.2,1);
}
.tm-card:hover h3::after { width: 64px; }
.tm-body b { color: var(--accent, #f26b3a); font-size: .85rem; line-height: 1.4; margin: .6rem 0 .7rem; display: block; }
.tm-body p { margin: 0; font-size: .9rem; line-height: 1.6; color: #475569; }

/* Swiper Navigation Controls */
.team-slider .swiper-button-prev,
.team-slider .swiper-button-next {
  top: 42%;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #fff;
  color: var(--navy, #0f172a) !important;
  box-shadow: var(--sh-2, 0 10px 15px -3px rgba(0,0,0,0.1));
  transition: background .25s, color .25s;
}
.team-slider .swiper-button-prev:hover,
.team-slider .swiper-button-next:hover { background: var(--accent, #f26b3a); color: #fff !important; }
.team-slider .swiper-button-prev::after,
.team-slider .swiper-button-next::after { font-size: 1rem !important; font-weight: 700; }
.team-slider .swiper-button-prev { left: .5rem; }
.team-slider .swiper-button-next { right: .5rem; }
.team-slider .swiper-pagination { bottom: .75rem !important; }

/* Entrance Animation */
.tm-js .team-slider { opacity: 0; transform: translateY(48px); filter: blur(8px); transition: opacity 1s ease, transform 1.1s cubic-bezier(.2,.7,.2,1), filter 1s ease; }
.tm-js .team-slider.in { opacity: 1; transform: none; filter: none; }

@media(max-width: 720px) {
  .team-slider .swiper-button-prev, .team-slider .swiper-button-next { display: none; }
}
@media(prefers-reduced-motion: reduce) {
  .tm-js .team-slider { opacity: 1; transform: none; filter: none; transition: none; }
  .team-slider .swiper-slide, .tm-card, .tm-card img { transition: none !important; }
}
</style>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb">
      <a href="<?= BASE_URL ?>index.php">Home</a>
      <span aria-hidden="true">/</span>
      <span aria-current="page">Our team</span>
    </nav>
    <h1 class="jf-title">Meet the experts behind JobFlow</h1>
    <p class="lead">Our talented team drives innovation and empowers businesses worldwide through reliable <a href="<?= BASE_URL ?>services.php">outsourcing services</a>.</p>
    <div class="hero-actions">
      <a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Work with us</a>
    </div>
  </div>
</section>

<section class="section-alt tm-stage">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up">
      <span class="eyebrow">Our leadership</span>
      <h2>The people you will work with.</h2>
    </div>
    <div class="swiper team-slider">
      <div class="swiper-wrapper">
        <?php foreach ($teamMembers as $m): ?>
        <div class="swiper-slide">
          <article class="tm-card">
            <figure>
              <span class="tm-ini" aria-hidden="true"><?= $initials($m['name']) ?></span>
              <img src="<?= BASE_URL . $m['img'] ?>" alt="<?= htmlspecialchars($m['name']) ?>, <?= htmlspecialchars($m['role']) ?> at JobFlow Digital Solutions" width="400" height="440" onerror="this.style.display='none'">
            </figure>
            <div class="tm-body">
              <h3><?= htmlspecialchars($m['name']) ?></h3>
              <b><?= htmlspecialchars($m['role']) ?></b>
              <p><?= htmlspecialchars($m['desc']) ?></p>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev" aria-label="Previous team member"></div>
      <div class="swiper-button-next" aria-label="Next team member"></div>
    </div>
  </div>
</section>

<section class="section-solid">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up">
      <span class="eyebrow">How our team works</span>
      <h2>Seasoned professionals, united by a passion for excellence.</h2>
      <p>Each member is passionate about delivering exceptional results and the highest level of service. Learn more <a href="<?= BASE_URL ?>about_us.php" class="jf-link">about JobFlow</a>.</p>
    </div>
    <div class="jf-cards">
      <?php foreach ($pillars as [$ic, $t, $d]): ?>
      <article data-aos="fade-up">
        <i class="fa-solid fa-<?= $ic ?>"></i>
        <h3><?= $t ?></h3>
        <p><?= $d ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-alt jf-extwrap">
  <div class="container">
    <div class="section-head narrow">
      <span class="eyebrow">Learn more</span>
      <h2>Reading on building great remote teams.</h2>
    </div>
    <div class="jf-ext">
      <a href="https://www.shrm.org" target="_blank" rel="noopener">
        <small>shrm.org</small>
        <h3>SHRM</h3>
        <p>Human resource management insight and hiring best practice.</p>
        <span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
      <a href="https://www.ilo.org" target="_blank" rel="noopener">
        <small>ilo.org</small>
        <h3>International Labour Organization</h3>
        <p>Global research on decent work and skills development.</p>
        <span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
    </div>
  </div>
</section>

<section class="cta-section" style="padding:2.5rem 0 4rem">
  <div class="container cta-panel" data-aos="fade-up">
    <div>
      <span class="eyebrow light">Careers at JobFlow</span>
      <h2>Interested in joining our team?</h2>
      <p class="cta-sub">We are always looking for passionate and talented people to join our growing family. Get in touch and find your next opportunity.</p>
    </div>
    <div class="cta-actions">
      <a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Explore opportunities</a>
    </div>
  </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Initialize AOS
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  }

  // Initialize Team Swiper Slider
  var slider = document.querySelector('.team-slider');
  if (!slider) return;

  slider.classList.add('in');

  if (typeof Swiper !== 'undefined') {
    var sw = new Swiper(slider, {
      loop: true,
      centeredSlides: true,
      speed: 600,
      autoplay: { delay: 5000, disableOnInteraction: false },
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: { el: '.team-slider .swiper-pagination', clickable: true },
      navigation: { nextEl: '.team-slider .swiper-button-next', prevEl: '.team-slider .swiper-button-prev' },
      breakpoints: {
        768: { slidesPerView: 2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 24 }
      }
    });

    // Pause on hover
    slider.addEventListener('mouseenter', function () { if (sw.autoplay) sw.autoplay.stop(); });
    slider.addEventListener('mouseleave', function () { if (sw.autoplay) sw.autoplay.start(); });
  }

  // 3D Card Hover Effect
  if (matchMedia('(hover: hover) and (pointer: fine)').matches && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    slider.addEventListener('mousemove', function (ev) {
      var c = ev.target.closest('.tm-card');
      if (!c) return;
      var r = c.getBoundingClientRect(), x = (ev.clientX - r.left) / r.width, y = (ev.clientY - r.top) / r.height;
      c.style.setProperty('--ry', ((x - .5) * 9).toFixed(2) + 'deg');
      c.style.setProperty('--rx', ((.5 - y) * 9).toFixed(2) + 'deg');
    });

    slider.addEventListener('mouseout', function (ev) {
      var c = ev.target.closest('.tm-card');
      if (!c || c.contains(ev.relatedTarget)) return;
      c.style.setProperty('--rx', '0deg');
      c.style.setProperty('--ry', '0deg');
    });
  }
});
</script>

<?php require_once 'includes/footer.php'; ?>