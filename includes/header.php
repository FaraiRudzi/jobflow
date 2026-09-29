<?php
/** @var string|null $currentPage Set by the including page */
$currentPage = $currentPage ?? '';
$pageMeta = [
 'index.php'=>['JobFlow Digital Solutions | Outsourcing & African Talent','JobFlow Digital Solutions connects global businesses with skilled African talent through reliable outsourcing, customer support, IT, finance, and digital services.'],
 'about_us.php'=>['About JobFlow Digital Solutions | Global Talent Partner','Learn how JobFlow Digital Solutions empowers businesses and African professionals through ethical, scalable outsourcing partnerships.'],
 'services.php'=>['Outsourcing Services for Growing Businesses | JobFlow','Explore JobFlow services, including talent acquisition, IT support, finance and accounting, dental support, BPO, and customer service outsourcing.'],
 'contact.php'=>['Contact JobFlow Digital Solutions','Talk to JobFlow Digital Solutions about dependable outsourcing, skilled African talent, and tailored support for your business.'],
 'team.php'=>['Meet the JobFlow Digital Solutions Team','Meet the people behind JobFlow Digital Solutions and our commitment to excellent global outsourcing partnerships.'],
 'talent_acquisition.php'=>['Talent Acquisition Services | JobFlow','Find and retain qualified professionals with JobFlow talent acquisition support for growing businesses.'],
 'it_services.php'=>['IT Services and Technical Support | JobFlow','Strengthen your operations with responsive IT services and technical support from JobFlow Digital Solutions.'],
 'finance_accounting.php'=>['Finance and Accounting Outsourcing | JobFlow','Improve financial accuracy and efficiency with JobFlow finance and accounting outsourcing services.'],
 'bpo.php'=>['Business Process Outsourcing Services | JobFlow','Scale efficiently with flexible business process outsourcing delivered by JobFlow Digital Solutions.'],
 'customer_support.php'=>['Customer Support Outsourcing | JobFlow','Deliver better customer experiences with dependable, professional customer support outsourcing from JobFlow.'],
 'dental_services.php'=>['Dental Practice Support Services | JobFlow','Give your dental practice reliable administrative and operational support through JobFlow outsourcing services.'],
 'other_services.php'=>['Business Support Services | JobFlow','Discover additional business support services tailored to your operational needs by JobFlow Digital Solutions.'],
 'privacy_policy.php'=>['Privacy Policy | JobFlow Digital Solutions','Read the JobFlow Digital Solutions privacy policy and learn how we handle personal information.'],
];
$currentFile = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$m = $pageMeta[$currentFile] ?? ['JobFlow Digital Solutions | Global Outsourcing Partner','JobFlow Digital Solutions helps businesses grow with skilled African talent and practical outsourcing solutions.'];
$pageTitle = $pageTitle ?? $m[0];
$pageDescription = $pageDescription ?? $m[1];
$siteUrl = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$canonicalPage = ['servicess.php'=>'services.php','teamss.php'=>'team.php'][$currentFile] ?? $currentFile;
$canonicalUrl = $siteUrl . '/' . $canonicalPage;
$socialImage = $siteUrl . '/images/logo1.png';
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$services = ['dental_services'=>'Dental Services','talent_acquisition'=>'Talent Acquisition','it_services'=>'IT Services','finance_accounting'=>'Finance & Accounting','bpo'=>'BPO Services','customer_support'=>'Customer Support','other_services'=>'Other Services'];
$nav = ['index'=>['home','Home'],'about_us'=>['about','About Us'],'team'=>['team','Our Team']];
$isService = array_key_exists($currentPage ?? '', $services);
?>
<!DOCTYPE html>
<html lang="en-ZW">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $e($pageTitle) ?></title>
<meta name="description" content="<?= $e($pageDescription) ?>">
<meta name="author" content="JobFlow Digital Solutions">
<meta name="theme-color" content="#0b1f3a">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="<?= $e($canonicalUrl) ?>">
<link rel="alternate" hreflang="en" href="<?= $e($canonicalUrl) ?>">
<link rel="alternate" hreflang="x-default" href="<?= $e($canonicalUrl) ?>">
<meta name="geo.region" content="ZW-HA"><meta name="geo.placename" content="Harare, Zimbabwe">
<?php if (($currentPage ?? '') === 'home'): ?><link rel="preload" as="image" href="<?= BASE_URL ?>images/professionals.png" fetchpriority="high"><?php endif; ?>
<meta property="og:type" content="website">
<meta property="og:site_name" content="JobFlow Digital Solutions">
<meta property="og:title" content="<?= $e($pageTitle) ?>">
<meta property="og:description" content="<?= $e($pageDescription) ?>">
<meta property="og:url" content="<?= $e($canonicalUrl) ?>">
<meta property="og:image" content="<?= $e($socialImage) ?>">
<meta property="og:locale" content="en_ZW">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $e($pageTitle) ?>">
<meta name="twitter:description" content="<?= $e($pageDescription) ?>">
<meta name="twitter:image" content="<?= $e($socialImage) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" href="<?= BASE_URL ?>images/logo1.png" type="image/png">
<link rel="apple-touch-icon" href="<?= BASE_URL ?>images/logo1.png">
<link rel="manifest" href="<?= BASE_URL ?>site.webmanifest">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css?v=<?= @filemtime(__DIR__ . "/../css/premium.css") ?: time() ?>">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>[x-cloak]{display:none!important}</style>
<?php
$offers = array_map(fn($f,$l)=>['@type'=>'Offer','itemOffered'=>['@type'=>'Service','name'=>$l,'url'=>$siteUrl.'/'.$f.'.php']], array_keys($services), $services);
$org = ['@context'=>'https://schema.org','@type'=>'ProfessionalService','name'=>'JobFlow Digital Solutions','url'=>$siteUrl,'logo'=>$socialImage,'image'=>$socialImage,
 'description'=>'Outsourcing company in Harare, Zimbabwe providing skilled African talent for customer support, IT, finance and accounting, dental practice support and BPO.',
 'address'=>['@type'=>'PostalAddress','addressLocality'=>'Harare','addressCountry'=>'ZW'],'telephone'=>'+263714384422','email'=>'info@jobflow.com','areaServed'=>'Worldwide',
 'knowsAbout'=>['Outsourcing','Business process outsourcing','Customer support outsourcing','Virtual assistants','Remote teams','Talent acquisition','Accounting outsourcing','IT support'],
 'sameAs'=>['https://www.facebook.com/yourjobflowpage','https://twitter.com/yourjobflowhandle','https://www.instagram.com/job_flow_digital_solutions','https://www.linkedin.com/company/yourjobflowcompany'],
 'hasOfferCatalog'=>['@type'=>'OfferCatalog','name'=>'Outsourcing services','itemListElement'=>$offers]];
?>
<script type="application/ld+json"><?= json_encode($org, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<script type="application/ld+json"><?= json_encode(['@context'=>'https://schema.org','@type'=>'WebSite','name'=>'JobFlow Digital Solutions','url'=>$siteUrl,'description'=>$pageDescription], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<?php if (!empty($extraSchema)): ?><script type="application/ld+json"><?= json_encode($extraSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script><?php endif; ?>
</head>
<body id="top" x-data="{ mobileMenuOpen: false }" :class="{'overflow-hidden': mobileMenuOpen}">
<a class="skip-link" href="#main-content">Skip to content</a>

<header class="site-header sticky top-0 z-50 py-3">
  <div class="mx-auto w-full max-w-none px-4 sm:px-6 lg:px-10 xl:px-14 flex items-center justify-between">
    <a href="<?= BASE_URL ?>index.php" class="flex items-center gap-3" aria-label="JobFlow Home">
      <img src="<?= BASE_URL ?>images/logo2.png" alt="JobFlow Digital Solutions logo - outsourcing company in Harare, Zimbabwe" class="h-14 md:h-16 w-auto">
      <span class="hidden md:block font-bold text-lg" style="color:var(--navy)">JobFlow <span class="font-medium" style="color:var(--muted)">Digital Solutions</span></span>
    </a>

    <nav class="hidden lg:flex items-center gap-9" aria-label="Main Navigation">
      <?php foreach (['index'=>['home','Home'],'about_us'=>['about','About Us']] as $f=>[$k,$l]): ?>
        <a href="<?= BASE_URL.$f ?>.php" class="hover:text-[#f26b3a] transition-colors" <?= $currentPage===$k?'aria-current="page" style="color:#f26b3a"':'' ?>><?= $l ?></a>
      <?php endforeach; ?>
      <div class="relative" x-data="{ open:false }" @mouseenter="open=true" @mouseleave="open=false" @keydown.escape="open=false">
        <button class="flex items-center gap-1.5 hover:text-[#f26b3a] transition-colors" :aria-expanded="open" @click="open=!open" <?= $isService?'style="color:#f26b3a"':'' ?>>
          Services <i class="fa-solid fa-chevron-down text-[.65rem] transition-transform" :class="{'rotate-180':open}"></i>
        </button>
        <ul x-show="open" x-cloak x-transition.opacity.duration.150ms class="absolute left-1/2 -translate-x-1/2 top-full pt-3 w-64">
          <div class="bg-white rounded-2xl border border-slate-200 p-2 shadow-2xl">
            <?php foreach ($services as $f=>$l): ?>
              <li><a href="<?= BASE_URL.$f ?>.php" class="block rounded-xl px-4 py-2.5 text-[.93rem] text-slate-700 hover:bg-slate-50 hover:text-[#f26b3a] transition-colors"><?= $l ?></a></li>
            <?php endforeach; ?>
          </div>
        </ul>
      </div>
      <a href="<?= BASE_URL ?>team.php" class="hover:text-[#f26b3a] transition-colors" <?= $currentPage==='team'?'aria-current="page" style="color:#f26b3a"':'' ?>>Our Team</a>
      <a href="<?= BASE_URL ?>contact.php" class="nav-cta">Contact us</a>
    </nav>

    <button @click="mobileMenuOpen=true" class="lg:hidden p-2 rounded-lg" aria-label="Open main menu"><i class="fa-solid fa-bars text-xl" style="color:var(--navy)"></i></button>
  </div>

  <div x-show="mobileMenuOpen" x-cloak class="lg:hidden">
    <div x-show="mobileMenuOpen" x-transition.opacity class="fixed inset-0 bg-[#0b1f3a]/60 backdrop-blur-sm z-40" @click="mobileMenuOpen=false"></div>
    <aside x-show="mobileMenuOpen" x-transition:enter="transition duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed inset-y-0 right-0 z-50 w-full max-w-sm bg-white p-7 overflow-y-auto shadow-2xl" x-data="{ s:false }">
      <div class="flex items-center justify-between mb-8">
        <span class="font-bold text-xl" style="color:var(--navy)">JobFlow</span>
        <button @click="mobileMenuOpen=false" class="p-2" aria-label="Close main menu"><i class="fa-solid fa-xmark text-xl"></i></button>
      </div>
      <nav class="space-y-1 text-lg font-semibold text-slate-800">
        <a href="<?= BASE_URL ?>index.php" class="block py-3 border-b border-slate-100">Home</a>
        <a href="<?= BASE_URL ?>about_us.php" class="block py-3 border-b border-slate-100">About Us</a>
        <button @click="s=!s" class="w-full flex justify-between items-center py-3 border-b border-slate-100">Services <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{'rotate-180':s}"></i></button>
        <ul x-show="s" x-transition class="pl-4 py-2 space-y-3 text-base font-medium text-slate-600 border-l-2 border-[#f26b3a]">
          <?php foreach ($services as $f=>$l): ?><li><a href="<?= BASE_URL.$f ?>.php" class="block"><?= $l ?></a></li><?php endforeach; ?>
        </ul>
        <a href="<?= BASE_URL ?>team.php" class="block py-3 border-b border-slate-100">Our Team</a>
        <a href="<?= BASE_URL ?>contact.php" class="nav-cta block text-center mt-6">Contact us</a>
      </nav>
    </aside>
  </div>
</header>

<main id="main-content">