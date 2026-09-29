<?php
require_once 'config.php';

$pageTitle = 'Outsourcing Services for Growing Businesses | JobFlow';
$currentPage = 'services';
$pageDescription = 'Explore JobFlow services, including talent acquisition, IT support, finance and accounting, dental support, BPO, and customer service outsourcing.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');

$sections = [
 ['talent','talent_acquisition','Talent Acquisition','Find the right talent to drive your success','Our expert Talent Acquisition service provides comprehensive recruitment and staffing solutions, helping you build a stronger team and a more successful business.',['Access top talent','Streamlined process','Cost-effective solutions'],[
   ['user-tie','Permanent Recruitment','We help you find the right permanent employees to build a stable and skilled team.'],
   ['clock','Temporary Staffing','Flexible staffing solutions for short-term projects or to cover temporary needs.'],
   ['briefcase','Executive Search','Specialized recruiting of senior-level talent for key leadership positions.'],
   ['gears','Recruitment Process Outsourcing','We can manage your entire recruitment process, from sourcing to onboarding.']]],
 ['it','it_services','IT Services','Information Technology services','Optimize your productivity by leveraging the expertise of our IT professionals. Focus on strategic business priorities while we manage essential tasks.',['Enhanced efficiency','Improved security','Custom solutions'],[
   ['gears','Software Development & Maintenance','Designing, developing, and maintaining software applications.'],
   ['network-wired','Network Management','Maintaining networks to ensure uptime, security, and connectivity.'],
   ['headset','Help Desk Services','Support for end-users via phone, email, or ticketing systems.'],
   ['server','IT Support System','Technical assistance for your IT infrastructure.'],
   ['code','Programming & Coding','Custom code for applications, tools, or software.']]],
 ['finance','finance_accounting','Finance & Accounting','Financial and accounting services','Our finance and accounting services help businesses manage their financial operations efficiently and effectively, from payroll to financial analysis.',['Improved accuracy','Reduced costs','Informed decisions'],[
   ['file-invoice-dollar','Payroll Processing','Accurate, on-time pay with full tax compliance and benefits administration.'],
   ['calculator','Accounting & Bookkeeping','Accurate record-keeping and reporting, including payables and receivables.'],
   ['chart-column','Financial Analysis & Planning','Insights, budgeting, and strategic planning for informed decisions.']]],
 ['bpo','bpo','BPO','Business process outsourcing (BPO)','Our BPO services help businesses improve efficiency and reduce costs by outsourcing non-core functions to our experienced team.',['Improved productivity','Reduced costs','Enhanced customer experience'],[
   ['phone','Customer Service','Inbound and outbound support via phone, email, chat, and social media.'],
   ['file-invoice-dollar','Finance & Accounting','Accounts payable, accounts receivable, and financial reporting.'],
   ['users','Human Resources','Recruitment, payroll processing, and employee onboarding.'],
   ['database','Data Entry & Management','Accurate data entry, processing, and analytics.']]],
 ['support','customer_support','Customer Support','Customer support services','Our services are designed to help businesses provide exceptional customer experiences, increasing loyalty and enhancing brand reputation.',['Exceptional experiences','Increased loyalty','Enhanced reputation'],[
   ['comment-dots','Customer Service','Timely and efficient support via phone, email, and chat.'],
   ['ticket','Ticketing System','Automated ticket creation and prioritization for efficient handling.'],
   ['comments','Multichannel Support','Support across multiple channels, including social media and live chat.']]],
 ['dental','dental_services','Dental & Medical','Dental & medical services','We handle the operational details of billing, coding, practice management, and administrative tasks for medical practices.',[],[
   ['tooth','Dental Billing & Coding','Expert claim handling to ensure timely reimbursements.'],
   ['clipboard-list','Dental Practice Management','Solutions to enhance day-to-day practice efficiency.'],
   ['user-doctor','Medical Support Services','Billing, coding, and administrative help for medical practices.']]],
 ['marketing','other_services','Marketing','Marketing services','Our marketing services help businesses enhance their brand and reach new customers with targeted campaigns.',[],[
   ['bullhorn','Digital Marketing',"Effective online strategies to boost your brand's presence."],
   ['chart-line','Campaign Management','Campaigns overseen from concept to execution to analysis.'],
   ['tag','Brand Promotion','Strategies to promote your brand and increase market awareness.']]],
 ['fleet','other_services','Fleet Management','Fleet management services','Our comprehensive fleet management services are designed to improve efficiency, safety, and cost control for your business.',[],[
   ['map-location-dot','24/7 Fleet Tracking','Real-time monitoring of vehicle location, status, and performance.'],
   ['road','Route Management','Optimized routes to improve efficiency and reduce fuel consumption.'],
   ['handshake-angle','Driver Support','24/7 assistance for issues like breakdowns and accidents.'],
   ['dolly','Transportation Logistics','Vehicle leasing, hiring, or outsourcing to meet business demands.']]],
 ['virtual','other_services','Virtual Assistance','Virtual assistance','Our virtual support services provide administrative, technical, and creative support to help you focus on strategic business priorities.',[],[
   ['list-check','Administrative Support','Day-to-day administrative tasks handled to improve your efficiency.'],
   ['laptop','Technical Support','Technical assistance and troubleshooting for your business.'],
   ['paintbrush','Creative Support','Support for creative projects, presentations, and content creation.']]],
];
$faqs = [
 ['What outsourcing services does JobFlow offer?','JobFlow offers talent acquisition, IT services, finance and accounting, business process outsourcing, customer support, dental and medical support, marketing, fleet management and virtual assistance.'],
 ['How do I get started with JobFlow?','Start with a free consultation. We learn your goals, build a customized strategy and team, and partner with you for long-term growth.'],
 ['Can I outsource just one function?','Yes. You can start with a single service, such as customer support or bookkeeping, and add more as your business grows.'],
];
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'CollectionPage','name'=>'JobFlow Outsourcing Services','url'=>$site.'/services.php','description'=>$pageDescription,
   'mainEntity'=>['@type'=>'ItemList','itemListElement'=>array_map(fn($s,$i)=>['@type'=>'ListItem','position'=>$i+1,'item'=>['@type'=>'Service','name'=>$s[3],'url'=>$site.'/'.$s[1].'.php','provider'=>['@type'=>'ProfessionalService','name'=>'JobFlow Digital Solutions']]], $sections, array_keys($sections))]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],['@type'=>'ListItem','position'=>2,'name'=>'Services','item'=>$site.'/services.php']]],
  ['@type'=>'FAQPage','mainEntity'=>array_map(fn($q)=>['@type'=>'Question','name'=>$q[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$q[1]]], $faqs)],
]];
require_once 'includes/header.php';
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb"><a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Services</span></nav>
    <h1 class="jf-title">Our comprehensive outsourcing solutions</h1>
    <p class="lead">Explore how we help businesses grow with tailored outsourcing services, designed to streamline your operations, reduce costs, and free you to focus on your core business.</p>
    <div class="hero-actions"><a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Get a free consultation</a></div>
  </div>
</section>

<nav class="jf-jump" aria-label="Jump to a service">
  <div class="container">
    <?php foreach ($sections as $s): ?><a href="#<?= $s[0] ?>"><?= $s[2] ?></a><?php endforeach; ?>
  </div>
</nav>

<?php foreach ($sections as $i => [$id,$page,$label,$h2,$lead,$benefits,$items]): ?>
<section id="<?= $id ?>" class="<?= $i%2 ? 'section-alt' : 'section-solid' ?> jf-svcsec">
  <div class="container jf-svc">
    <div data-aos="fade-right">
      <span class="eyebrow"><?= $label ?></span>
      <h2><?= $h2 ?></h2>
      <p><?= $lead ?></p>
      <?php if ($benefits): ?><ul class="jf-benefits"><?php foreach ($benefits as $b): ?><li><i class="fa-solid fa-check"></i><?= $b ?></li><?php endforeach; ?></ul><?php endif; ?>
      <a href="<?= BASE_URL.$page ?>.php" class="primary-btn" title="<?= $label ?> outsourcing services">Learn more about <?= $label ?></a>
    </div>
    <div class="jf-mini">
      <?php foreach ($items as [$ic,$t,$d]): ?>
      <article data-aos="fade-up"><i class="fa-solid fa-<?= $ic ?>"></i><div><h3><?= $t ?></h3><p><?= $d ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section class="section-solid">
  <div class="container">
    <div class="section-head narrow" data-aos="fade-up"><span class="eyebrow">Our simple process</span><h2>Getting started is straightforward.</h2><p>We've streamlined our process to ensure a seamless experience.</p></div>
    <div class="jf-cards">
      <article data-aos="fade-up"><i class="fa-solid fa-comments"></i><h3>Consultation</h3><p>We start with a detailed consultation to understand your needs and goals.</p></article>
      <article data-aos="fade-up"><i class="fa-solid fa-gears"></i><h3>Strategy &amp; team building</h3><p>We develop a customized strategy and build the right team for your needs.</p></article>
      <article data-aos="fade-up"><i class="fa-solid fa-handshake"></i><h3>Partnership &amp; growth</h3><p>We partner with you for long-term success and continued business growth.</p></article>
    </div>
  </div>
</section>

<section class="section-alt jf-faq">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Frequently asked questions</span><h2>Outsourcing services: your questions answered.</h2></div>
    <div class="jf-faq-list"><?php foreach ($faqs as $q): ?><details><summary><?= htmlspecialchars($q[0]) ?></summary><p><?= htmlspecialchars($q[1]) ?></p></details><?php endforeach; ?></div>
  </div>
</section>

<section class="section-solid jf-extwrap">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Learn more</span><h2>Trusted resources on outsourcing and work.</h2></div>
    <div class="jf-ext">
      <a href="https://www.iaop.org" target="_blank" rel="noopener"><small>iaop.org</small><h3>IAOP</h3><p>Industry body for outsourcing standards and best practice.</p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
      <a href="https://www.ilo.org" target="_blank" rel="noopener"><small>ilo.org</small><h3>International Labour Organization</h3><p>Global research on decent work and employment.</p><span>Visit site <i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
    </div>
  </div>
</section>

<section class="cta-section" style="padding:2.5rem 0 4rem">
  <div class="container cta-panel" data-aos="fade-up">
    <div><span class="eyebrow light">Let's talk</span><h2>Ready to find the right service for your business?</h2></div>
    <div class="cta-actions"><a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Talk to our team</a><a href="<?= BASE_URL ?>about_us.php" class="secondary-btn light">About JobFlow</a></div>
  </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>

<?php require_once 'includes/footer.php'; ?>
