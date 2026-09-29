<?php
require_once 'config.php';

$pageTitle = 'Meet the JobFlow Team | Outsourcing Experts in Harare';
$currentPage = 'team';
$pageDescription = 'Meet the leaders and specialists behind JobFlow Digital Solutions, a Harare outsourcing company delivering skilled African talent to businesses worldwide.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');

$teamMembers = [
  ['name'=>'Trish F Chivangu','role'=>'CEO & Founder','img'=>'images/trish.jpg','desc'=>'As the visionary behind JobFlow, Trish provides the strategic direction and leadership that drives our mission to empower businesses and African talent. She has a proven track record of creating successful partnerships and innovative solutions.'],
  ['name'=>'Tinotenda M Muyengwa','role'=>'Network Architect/Infrastructure Engineer','img'=>'images/tino.jpeg','desc'=>'With extensive expertise in telecommunications and a strong foundation in engineering, Tinotenda is the cornerstone of our technical infrastructure. He is responsible for designing and maintaining the robust systems that power our services.'],
  ['name'=>'Zanele Danisa','role'=>'Customer Support Engineer and Trainer','img'=>'images/zanele.jpeg','desc'=>'Zanele is dedicated to ensuring a seamless experience for every client. She not only resolves technical challenges but also trains our support staff to deliver the highest level of customer care and product knowledge.'],
  ['name'=>'Kudakwashe Kunaka','role'=>'Chief Communications Officer/Media Relations Manager','img'=>'images/kuda.png','desc'=>'Kudakwashe directs our communication strategies and manages media relations. With a background in project management, he ensures that our brand message is clear, consistent, and effectively reaches our audience.'],
  ['name'=>'Alois T Chipfurutse','role'=>'Chief Business Officer','img'=>'images/tadiwa.jpeg','desc'=>'As our Business Development Manager, Alois is a driving force behind our growth. Her focus on client acquisition and relationship-building is essential to expanding our market reach and connecting with new partners.'],
];
$pillars = [
  ['handshake','Experienced professionals','Our team members have extensive experience in their respective fields, with a deep understanding of the challenges and complexities of their work. We leverage a wide range of expertise to provide comprehensive and effective solutions.'],
  ['graduation-cap','Expertise & training','We believe in continuous learning. Our team is trained in the latest techniques and technologies, so we can provide cutting-edge solutions that keep you ahead of the curve.'],
  ['users','Collaborative approach','Teamwork is at the heart of our operations. Our team works together seamlessly, ensuring every project is handled with care and precision from start to finish.'],
];
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'CollectionPage','name'=>'JobFlow Digital Solutions Team','url'=>$site.'/team.php','description'=>$pageDescription,
   'mainEntity'=>['@type'=>'ItemList','itemListElement'=>array_map(fn($m,$i)=>['@type'=>'ListItem','position'=>$i+1,'item'=>['@type'=>'Person','name'=>$m['name'],'jobTitle'=>$m['role'],'image'=>$site.'/'.$m['img'],'worksFor'=>['@type'=>'Organization','name'=>'JobFlow Digital Solutions','url'=>$site]]], $teamMembers, array_keys($teamMembers))]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],['@type'=>'ListItem','position'=>2,'name'=>'Our Team','item'=>$site.'/team.php']]],
]];
require_once 'includes/header.php';
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb"><a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Our team</span></nav>
    <h1 class="jf-title">Meet the experts behind JobFlow</h1>
    <p class="lead">Our talented team drives innovation and empowers businesses worldwide through reliable <a href="<?= BASE_URL ?>services.php">outsourcing services</a>.</p>
  </div>
</section>

<section class="section-solid">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up">
      <span class="eyebrow">The driving force behind our success</span>
      <h2>Seasoned professionals, united by a passion for excellence.</h2>
      <p>Our success is built on the expertise and dedication of our team. Each member is passionate about delivering exceptional results and the highest level of service to our clients. Learn more <a href="<?= BASE_URL ?>about_us.php" class="jf-link">about JobFlow</a>.</p>
    </div>
    <div class="jf-cards">
      <?php foreach ($pillars as [$ic,$t,$d]): ?>
      <article data-aos="fade-up"><i class="fa-solid fa-<?= $ic ?>"></i><h3><?= $t ?></h3><p><?= $d ?></p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-alt">
  <div class="container">
    <div class="section-head" data-aos="fade-up"><span class="eyebrow">Our leadership</span><h2>The people you will work with.</h2></div>
    <div class="swiper team-slider">
      <div class="swiper-wrapper">
        <?php foreach ($teamMembers as $m): ?>
        <div class="swiper-slide">
          <article class="jf-member">
            <figure><img src="<?= BASE_URL.$m['img'] ?>" alt="<?= htmlspecialchars($m['name']) ?>, <?= htmlspecialchars($m['role']) ?> at JobFlow Digital Solutions" width="400" height="500" loading="lazy" onerror="this.style.display='none'"></figure>
            <div class="jf-member-body"><h3><?= htmlspecialchars($m['name']) ?></h3><b><?= htmlspecialchars($m['role']) ?></b><p><?= htmlspecialchars($m['desc']) ?></p></div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev" aria-label="Previous"></div>
      <div class="swiper-button-next" aria-label="Next"></div>
    </div>
  </div>
</section>

<section class="section-solid jf-extwrap">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Learn more</span><h2>Reading on building great remote teams.</h2></div>
    <div class="jf-ext">
      <a href="https://www.shrm.org" target="_blank" rel="noopener"><small>shrm.org</small><h3>SHRM</h3><p>Human resource management insight and hiring best practice.</p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      <a href="https://www.ilo.org" target="_blank" rel="noopener"><small>ilo.org</small><h3>International Labour Organization</h3><p>Global research on decent work and skills development.</p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
    </div>
  </div>
</section>

<section class="cta-section" style="padding:2.5rem 0 4rem">
  <div class="container cta-panel" data-aos="fade-up">
    <div><span class="eyebrow light">Careers at JobFlow</span><h2>Interested in joining our team?</h2><p class="cta-sub">We are always looking for passionate and talented people to join our growing family. Get in touch and find your next opportunity.</p></div>
    <div class="cta-actions"><a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Explore opportunities</a></div>
  </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>

<?php require_once 'includes/footer.php'; ?>
