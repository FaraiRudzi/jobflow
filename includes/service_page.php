<?php
/** @var array $svc Service data supplied by the including page */
/* Shared premium template for every service page. Each page only supplies a $svc array. */
require_once __DIR__ . '/../config.php';
if (!isset($svc) || !is_array($svc)) { http_response_code(500); exit('Service data missing.'); }
$h = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$all = [
  'talent_acquisition'=>['Talent Acquisition','users-gear'],
  'it_services'=>['IT Services','network-wired'],
  'finance_accounting'=>['Finance & Accounting','calculator'],
  'dental_services'=>['Dental Support','tooth'],
  'customer_support'=>['Customer Support','headset'],
  'bpo'=>['BPO Services','people-group'],
  'other_services'=>['Other Services','layer-group'],
];
$slug = $svc['slug'];
$currentPage = $slug;
$pageTitle = $svc['title'];
$pageDescription = $svc['desc'];
$url = $site.'/'.$slug.'.php';
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'Service','name'=>$svc['name'],'serviceType'=>$svc['name'],'description'=>$svc['desc'],'url'=>$url,'areaServed'=>'Worldwide',
   'provider'=>['@type'=>'ProfessionalService','name'=>'Job Flow Digital Solutions','url'=>$site]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Services','item'=>$site.'/services.php'],
    ['@type'=>'ListItem','position'=>3,'name'=>$svc['name'],'item'=>$url]]],
  ['@type'=>'FAQPage','mainEntity'=>array_map(fn($q)=>['@type'=>'Question','name'=>$q[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$q[1]]], $svc['faqs'])],
]];
require_once __DIR__ . '/header.php';
$alt = 0; $tone = function () use (&$alt) { return ($alt++ % 2) ? 'section-alt' : 'section-solid'; };
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb">
      <a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span>
      <a href="<?= BASE_URL ?>services.php">Services</a><span aria-hidden="true">/</span>
      <span aria-current="page"><?= $h($svc['name']) ?></span>
    </nav>
    <h1 class="jf-title"><?= $h($svc['h1']) ?></h1>
    <p class="lead"><?= $h($svc['lead']) ?></p>
    <div class="hero-actions">
      <a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Get a free consultation</a>
      <a href="<?= BASE_URL ?>services.php" class="secondary-btn">All services</a>
    </div>
  </div>
</section>

<?php foreach (($svc['groups'] ?? []) as $g): ?>
<section class="<?= $tone() ?>">
  <div class="container">
    <?php if (!empty($g['title'])): ?>
    <div class="section-head narrow" data-aos="fade-up">
      <h2><?= $h($g['title']) ?></h2>
      <?php if (!empty($g['intro'])): ?><p><?= $h($g['intro']) ?></p><?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="jf-cards">
      <?php foreach ($g['items'] as [$ic,$t,$d]): ?>
      <article data-aos="fade-up"><i class="fa-solid fa-<?= $ic ?>"></i><h3><?= $h($t) ?></h3><p><?= $h($d) ?></p></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<?php if (!empty($svc['process'])): ?>
<section class="<?= $tone() ?>">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up"><h2><?= $h($svc['process']['title']) ?></h2><p><?= $h($svc['process']['intro']) ?></p></div>
    <div class="jf-steps">
      <?php foreach ($svc['process']['steps'] as $i => [$t,$d]): ?>
      <div class="jf-step" data-aos="fade-up"><b><?= $i+1 ?></b><div><h3><?= $h($t) ?></h3><p><?= $h($d) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($svc['benefits'])): $b = $svc['benefits']; ?>
<section class="<?= $tone() ?>">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up"><h2><?= $h($b['title']) ?></h2></div>
    <?php if ($b['type'] === 'img'): foreach ($b['items'] as $i => [$t,$d,$img,$al]): ?>
    <div class="jf-split jf-benefit <?= $i%2 ? 'rev' : '' ?>">
      <?php $fig = '<figure class="jf-figure" data-aos="fade-up"><img src="'.BASE_URL.$img.'" alt="'.$h($al).'" width="800" height="600" loading="lazy" onerror="this.closest(\'.jf-benefit\').classList.add(\'noimg\');this.parentNode.remove()"></figure>'; ?>
      <?php if ($i%2) echo $fig; ?>
      <div data-aos="fade-up"><h3><?= $h($t) ?></h3><p><?= $h($d) ?></p></div>
      <?php if (!($i%2)) echo $fig; ?>
    </div>
    <?php endforeach; else: ?>
    <div class="jf-cards">
      <?php foreach ($b['items'] as [$t,$d,$ic]): ?>
      <article data-aos="fade-up"><i class="fa-solid fa-<?= $ic ?>"></i><h3><?= $h($t) ?></h3><p><?= $h($d) ?></p></article>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($svc['industries'])): ?>
<section class="<?= $tone() ?>">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up"><h2>Industries we serve</h2></div>
    <div class="jf-industries">
      <?php foreach ($svc['industries'] as [$t,$img]): ?>
      <figure data-aos="fade-up"><img src="<?= BASE_URL.$img ?>" alt="<?= $h($t) ?> industry recruitment and staffing" loading="lazy" width="400" height="300" onerror="this.style.display='none'"><figcaption><?= $h($t) ?></figcaption></figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="<?= $tone() ?> jf-faq">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up"><h2>Frequently asked questions</h2></div>
    <div class="jf-faq-list">
      <?php foreach ($svc['faqs'] as $q): ?><details><summary><?= $h($q[0]) ?></summary><p><?= $h($q[1]) ?></p></details><?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($svc['ext'])): ?>
<section class="<?= $tone() ?> jf-extwrap">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Learn more</span><h2>Helpful resources from trusted sources.</h2></div>
    <div class="jf-ext">
      <?php foreach ($svc['ext'] as [$t,$dom,$d,$u]): ?>
      <a href="<?= $u ?>" target="_blank" rel="noopener"><small><?= $dom ?></small><h3><?= $h($t) ?></h3><p><?= $h($d) ?></p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<nav class="jf-related section-alt" aria-label="Related services">
  <div class="container">
    <h2>Related services</h2>
    <div>
      <?php foreach ($all as $f => [$n,$ic]): if ($f === $slug) continue; ?>
      <a href="<?= BASE_URL.$f ?>.php" title="<?= $h($n) ?> outsourcing"><i class="fa-solid fa-<?= $ic ?>"></i> <?= $h($n) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</nav>

<section class="cta-section" style="padding:2.5rem 0 4rem">
  <div class="container cta-panel" data-aos="fade-up">
    <div><span class="eyebrow light">Let's talk</span><h2><?= $h($svc['cta'][0]) ?></h2><p class="cta-sub"><?= $h($svc['cta'][1]) ?></p></div>
    <div class="cta-actions"><a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Get a free consultation</a></div>
  </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>

<?php require_once __DIR__ . '/footer.php'; ?>