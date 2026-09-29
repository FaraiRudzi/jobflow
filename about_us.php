<?php
require_once 'config.php';

$pageTitle = 'About JobFlow | Outsourcing Company';
$currentPage = 'about';
$pageDescription = 'Meet JobFlow Digital Solutions, an outsourcing company connecting global businesses with skilled African professionals. Our story, vision, mission and values.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'AboutPage','name'=>'About JobFlow Digital Solutions','url'=>$site.'/about_us.php','description'=>$pageDescription,'about'=>['@type'=>'Organization','name'=>'JobFlow Digital Solutions','url'=>$site]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],
    ['@type'=>'ListItem','position'=>2,'name'=>'About Us','item'=>$site.'/about_us.php']]],
]];

$principles = [
  ['star','Excellence','We hold every project to a high standard, so your operations run consistently and accountably.'],
  ['shield-halved','Integrity','Honest reporting and ethical practices in every client and team relationship.'],
  ['lightbulb','Innovation','Better systems and smarter processes that make outsourcing simpler and more efficient.'],
  ['hand-fist','Empowerment','Dignified careers that build skills, confidence and self-worth for African professionals.'],
  ['users','Collaboration','Clients and teams working as one, with clear communication at every step.'],
  ['heart','Faithfulness','Reliability and care in keeping every promise we make.'],
];
require_once 'includes/header.php';
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb">
      <a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">About us</span>
    </nav>
    <h1 class="jf-title">About JobFlow: transforming business and empowering the world</h1>
    <p class="lead">We are an <a href="<?= BASE_URL ?>services.php">outsourcing company </a> that connects global businesses with skilled, university-educated African professionals.</p>
    <div class="hero-actions">
      <a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Talk to our team</a>
      <a href="<?= BASE_URL ?>team.php" class="secondary-btn">Meet the team</a>
    </div>
  </div>
</section>

<section class="section-solid">
  <div class="container jf-split">
    <div data-aos="fade-right">
      <span class="eyebrow">Our story</span>
      <h2>Global businesses. African talent. One win-win.</h2>
      <p>At JobFlow Digital Solutions, we saw an opportunity to connect global businesses with the incredible talent pool worldwide. We are more than an outsourcing provider: we are a <strong>pioneering force for economic empowerment</strong>.</p>
      <p>By bridging the gap between businesses seeking top-tier talent and highly educated professionals in Africa, we enhance productivity and offer dignified opportunities that foster growth and self-worth. Explore our <a href="<?= BASE_URL ?>talent_acquisition.php" class="jf-link">talent acquisition</a>, <a href="<?= BASE_URL ?>customer_support.php" class="jf-link">customer support</a> and <a href="<?= BASE_URL ?>bpo.php" class="jf-link">BPO services</a>.</p>
    </div>
    <figure class="jf-figure" data-aos="fade-left">
      <img src="<?= BASE_URL ?>images/professionals.png" alt="African professionals at JobFlow Digital Solutions delivering outsourcing services" width="800" height="600" loading="lazy">
    </figure>
  </div>
</section>

<section class="section-alt">
  <div class="container jf-split rev">
    <figure class="jf-figure" data-aos="fade-right">
      <img src="<?= BASE_URL ?>images/vision.jpg" alt="JobFlow vision: a global leader in business process outsourcing" width="800" height="600" loading="lazy">
    </figure>
    <div data-aos="fade-left">
      <span class="eyebrow">Our vision</span>
      <h2>A global leader in business process outsourcing.</h2>
      <p>To be recognized for our excellence, integrity and unwavering commitment to creating a positive impact for clients, team members and communities.</p>
    </div>
  </div>
</section>

<section class="section-solid">
  <div class="container jf-split">
    <div data-aos="fade-right">
      <span class="eyebrow">Our mission</span>
      <h2>Efficient, scalable solutions that change lives.</h2>
      <p>Our mission is to empower businesses with efficient, scalable solutions while transforming the world through excellence and innovation. We foster a dynamic work environment that enables our team members to thrive and deliver impactful services.</p>
      <a href="<?= BASE_URL ?>services.php" class="primary-btn">See our services</a>
    </div>
    <figure class="jf-figure" data-aos="fade-left">
      <img src="<?= BASE_URL ?>images/mission.jpg" alt="JobFlow mission: empowering businesses with scalable outsourcing solutions" width="800" height="600" loading="lazy">
    </figure>
  </div>
</section>

<section class="section-alt">
  <div class="container jf-split">
    <div data-aos="fade-right">
      <span class="eyebrow">Our guiding principles</span>
      <h2>The values behind every placement and partnership.</h2>
      <ul class="jf-values">
        <?php foreach ($principles as [$ic,$t,$d]): ?>
        <li><i class="fa-solid fa-<?= $ic ?>"></i><div><b><?= $t ?></b><span><?= $d ?></span></div></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="jf-orbit" aria-hidden="true" data-aos="zoom-in">
      <div class="jf-orbit-ring"></div>
      <div class="jf-orbit-hub">Our<br>principles</div>
      <div class="jf-orbit-spin">
        <?php foreach ($principles as $i => [$ic,$t]): ?>
        <div class="jf-node" style="--i:<?= $i ?>"><div class="jf-un"><div class="jf-item"><span class="jf-dot"><i class="fa-solid fa-<?= $ic ?>"></i></span><b><?= $t ?></b></div></div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section-solid">
  <div class="container jf-split">
    <div data-aos="fade-right">
      <span class="eyebrow">Our social contribution</span>
      <h2>Giving back across Zimbabwe and beyond.</h2>
      <p><a href="https://www.instagram.com/tsitsi_foundations" target="_blank" rel="noopener" class="jf-link">Tsitsi Foundation</a> uplifts communities and empowers youth through education, social programs and sustainability initiatives. Their work aligns with the UN's goal of <a href="https://sdgs.un.org/goals/goal8" target="_blank" rel="noopener" class="jf-link">decent work and economic growth</a>, and with the opportunities we create for professionals across <a href="https://www.worldbank.org/zimbabwe" target="_blank" rel="noopener" class="jf-link">Zimbabwe</a>.</p>
      <a href="https://www.instagram.com/tsitsi_foundations" target="_blank" rel="noopener" class="secondary-btn dark">Follow on Instagram</a>
    </div>
    <div class="jf-embed" data-aos="fade-left">
      <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DK5M_nJtzlw/?utm_source=ig_embed&utm_campaign=loading" data-instgrm-version="14" style="background:#FFF;border:0;border-radius:12px;margin:1px;max-width:100%;width:100%"></blockquote>
    </div>
  </div>
</section>

<section class="section-alt jf-extwrap">
  <div class="container">
    <div class="section-head narrow">
      <span class="eyebrow">Learn more</span>
      <h2>Trusted sources on work, growth and community in Africa.</h2>
    </div>
    <div class="jf-ext">
      <?php foreach ([
        ['Tsitsi Foundation','instagram.com','Our community partner, empowering youth and families across Zimbabwe.','https://www.instagram.com/tsitsi_foundations'],
        ['UN Sustainable Development Goal 8','sdgs.un.org','Decent work and economic growth: the global goal behind our mission.','https://sdgs.un.org/goals/goal8'],
        ['The World Bank in Zimbabwe','worldbank.org','Economic data and development insight on Zimbabwe.','https://www.worldbank.org/zimbabwe'],
        ['International Labour Organization','ilo.org','Global standards and research on decent, dignified employment.','https://www.ilo.org'],
      ] as [$t,$dom,$d,$u]): ?>
      <a href="<?= $u ?>" target="_blank" rel="noopener"><small><?= $dom ?></small><h3><?= $t ?></h3><p><?= $d ?></p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<nav class="jf-related section-alt" aria-label="Related pages">
  <div class="container">
    <h2>Keep exploring</h2>
    <div>
      <a href="<?= BASE_URL ?>services.php">Outsourcing services</a>
      <a href="<?= BASE_URL ?>it_services.php">IT support outsourcing</a>
      <a href="<?= BASE_URL ?>finance_accounting.php">Finance &amp; accounting</a>
      <a href="<?= BASE_URL ?>dental_services.php">Dental practice support</a>
      <a href="<?= BASE_URL ?>team.php">Our team</a>
    </div>
  </div>
</nav>

<section class="cta-section" style="padding:4rem 0 6rem">
  <div class="container cta-panel" data-aos="fade-up">
    <div>
      <span class="eyebrow light">Ready to partner with us?</span>
      <h2>Discover how our team can help your business thrive.</h2>
    </div>
    <div class="cta-actions">
      <a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Get a free consultation</a>
    </div>
  </div>
</section>

<script async src="//www.instagram.com/embed.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>

<?php require_once 'includes/footer.php'; ?>
