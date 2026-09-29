<?php
require_once 'config.php';

$pageTitle = 'Privacy Policy | Job Flow Digital Solutions';
$currentPage = 'privacy_policy';
$pageDescription = 'Read how Job Flow Digital Solutions collects, uses and protects your personal information, including contact form data, cookies and your rights.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$domain = 'jobflowdigitalsolutions.com';
$domainUrl = 'https://' . $domain;
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebPage','name'=>'Privacy Policy','url'=>$site.'/privacy_policy.php','description'=>$pageDescription,'dateModified'=>'2025-10-26'],
  ['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],['@type'=>'ListItem','position'=>2,'name'=>'Privacy Policy','item'=>$site.'/privacy_policy.php']]],
]];

$policy = [
 ['introduction','1. Introduction','<p>Welcome to <strong>Job Flow Digital Solutions</strong> ("we," "our," or "us"). We are committed to protecting the privacy of our website visitors and clients. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, <a href="'.$domainUrl.'">'.$domain.'</a>, and use our services.</p>'],
 ['information-we-collect','2. Information We Collect','<p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p><h3>Personal Data</h3><p>Personally identifiable information, such as your <em>name, email address, and telephone number</em>, that you voluntarily give to us when you fill out the <a href="'.BASE_URL.'contact.php#contact">contact form</a> on our website.</p><h3>Derivative Data</h3><p>Information our servers automatically collect when you access the Site, such as your <em>IP address, browser type, operating system, access times, and the pages you have viewed</em> directly before and after accessing the Site. This information is used for statistical purposes and to improve the user experience.</p>'],
 ['how-we-use-your-information','3. How We Use Your Information','<p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you to:</p><ul><li>Respond to your inquiries, questions, and comments and provide customer support.</li><li>Improve our website and service offerings.</li><li>Send you periodic emails regarding our services, with your consent.</li><li>Prevent fraudulent transactions, monitor against theft, and protect against criminal activity.</li></ul>'],
 ['data-security','4. Data Security','<blockquote>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</blockquote>'],
 ['disclosure','5. Disclosure of Your Information','<p><strong>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties</strong> unless we provide users with advance notice. This does not include trusted partners who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential.</p><p>We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others\' rights, property, or safety.</p>'],
 ['cookies','6. Policy for Cookies','<p>Cookies are small files that a site transfers to your computer\'s hard drive through your Web browser (if you allow). They enable the site\'s systems to recognize your browser and remember certain information. We may use cookies to help us compile aggregate data about site traffic so that we can offer better site experiences in the future. You can choose to turn off all cookies through your browser settings. Learn more at <a href="https://www.allaboutcookies.org" target="_blank" rel="noopener">allaboutcookies.org</a>.</p>'],
 ['your-rights','7. Your Rights','<p>You have the right to <strong>access, correct, or delete</strong> your personal data that we hold. If you wish to exercise any of these rights, please contact us using the information below. You can also learn about data protection in Zimbabwe from the <a href="https://www.potraz.gov.zw" target="_blank" rel="noopener">Postal and Telecommunications Regulatory Authority of Zimbabwe (POTRAZ)</a>.</p>'],
 ['changes','8. Changes to This Privacy Policy','<p>We may update this Privacy Policy from time to time. The updated version will be indicated by an updated <em>"Last Updated"</em> date. We encourage you to review this privacy policy frequently to be informed of how we are protecting your information.</p>'],
 ['contact-us','9. Contact Us','<p>If you have any questions or comments about this Privacy Policy, please do not hesitate to contact us:</p><div class="jf-addr"><strong>Job Flow Digital Solutions</strong><br>Harare, Zimbabwe<br>Email: <a href="mailto:info@jobflow.com">info@jobflow.com</a></div>'],
];
require_once 'includes/header.php';
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb"><a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Privacy policy</span></nav>
    <h1 class="jf-title">Privacy policy</h1>
    <p class="lead">Your privacy is important to us. We are committed to being transparent about how we collect, use, and protect your information.</p>
  </div>
</section>

<section class="section-alt">
  <div class="container jf-legal">
    <aside class="jf-toc" aria-label="On this page">
      <b>On this page</b>
      <?php foreach ($policy as [$id,$t]): ?><a href="#<?= $id ?>"><?= $t ?></a><?php endforeach; ?>
    </aside>
    <article class="jf-policy">
      <p class="jf-updated"><i class="fa-regular fa-calendar"></i> Last updated: October 26, 2025</p>
      <?php foreach ($policy as [$id,$t,$html]): ?>
      <section id="<?= $id ?>"><h2><?= $t ?></h2><?= $html ?></section>
      <?php endforeach; ?>
    </article>
  </div>
</section>

<section class="cta-section" style="padding:2.5rem 0 4rem">
  <div class="container cta-panel">
    <div><span class="eyebrow light">Your privacy matters</span><h2>Have questions about your privacy?</h2><p class="cta-sub">We are committed to transparency. If you have any questions about our data practices, please reach out.</p></div>
    <div class="cta-actions"><a href="<?= BASE_URL ?>contact.php#contact" class="primary-btn">Contact us</a><a href="<?= BASE_URL ?>services.php" class="secondary-btn light">Our services</a></div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>