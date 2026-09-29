<?php
require_once 'config.php';

$pageTitle = 'Contact JobFlow | Outsourcing in Harare, Zimbabwe';
$currentPage = 'contact';
$pageDescription = 'Contact JobFlow Digital Solutions in Harare for a free consultation on outsourcing, skilled African talent and tailored business support. We reply within 24 hours.';
$site = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$faqs = [
  ['How quickly will JobFlow respond to my message?','We aim to respond to every enquiry within 24 hours.'],
  ['Is the consultation really free?','Yes. Your first consultation is free and comes with no obligation. We listen to your goals and recommend the right outsourcing model.'],
  ['Where is JobFlow based?','JobFlow Digital Solutions is based in Harare, Zimbabwe, and serves businesses worldwide. You can reach us by form, email, phone or WhatsApp.'],
];
$extraSchema = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'ContactPage','name'=>'Contact JobFlow Digital Solutions','url'=>$site.'/contact.php','description'=>$pageDescription,
   'about'=>['@type'=>'ProfessionalService','name'=>'JobFlow Digital Solutions','email'=>'info@jobflow.com','telephone'=>'+263714384422','address'=>['@type'=>'PostalAddress','addressLocality'=>'Harare','addressCountry'=>'ZW'],
     'contactPoint'=>[['@type'=>'ContactPoint','telephone'=>'+263714384422','contactType'=>'customer service'],['@type'=>'ContactPoint','telephone'=>'+13219782455','contactType'=>'sales']]]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$site.'/index.php'],['@type'=>'ListItem','position'=>2,'name'=>'Contact','item'=>$site.'/contact.php']]],
  ['@type'=>'FAQPage','mainEntity'=>array_map(fn($q)=>['@type'=>'Question','name'=>$q[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$q[1]]], $faqs)],
]];
require_once 'includes/header.php';
?>

<section class="jf-pagehero">
  <div class="container">
    <nav class="jf-crumbs" aria-label="Breadcrumb"><a href="<?= BASE_URL ?>index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Contact</span></nav>
    <h1 class="jf-title">Get in touch with JobFlow</h1>
    <p class="lead">We'd love to hear from you. Send us a message and our team will get back to you promptly, usually within 24 hours.</p>
  </div>
</section>

<section class="section-solid" id="contact">
  <div class="container">
    <div class="jf-contact">
      <div class="jf-formpanel">
        <h2>Send us a message</h2>
        <p>Tell us about your business and the <a href="<?= BASE_URL ?>services.php" class="jf-link">outsourcing services</a> you need.</p>
        <form action="send_mail.php" method="POST" class="jf-form">
          <div class="jf-row">
            <div class="jf-field"><label for="name">Full name</label><input type="text" name="name" id="name" placeholder="John Doe" autocomplete="name" required></div>
            <div class="jf-field"><label for="email">Email address</label><input type="email" name="email" id="email" placeholder="you@example.com" autocomplete="email" required></div>
          </div>
          <div class="jf-field"><label for="subject">Subject</label><input type="text" name="subject" id="subject" placeholder="e.g., Service inquiry" required></div>
          <div class="jf-field"><label for="message">Your message</label><textarea name="message" id="message" rows="5" placeholder="Please describe your needs..." required></textarea></div>
          <label class="jf-check" for="privacy_agree"><input type="checkbox" name="privacy_agree" id="privacy_agree" required><span>By submitting this form, I acknowledge and agree to the terms outlined in the <a href="<?= BASE_URL ?>privacy_policy.php" class="jf-link">Privacy Policy</a>.</span></label>
          <button type="submit" class="primary-btn jf-submit">Send message</button>
        </form>
      </div>

      <aside class="jf-infopanel">
        <h2>Contact information</h2>
        <p>You can also reach us through the following channels.</p>
        <ul>
          <li><i class="fa-solid fa-location-dot"></i><span>Harare, Zimbabwe</span></li>
          <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@jobflow.com">info@jobflow.com</a></li>
          <li><i class="fa-solid fa-phone"></i><a href="tel:+263714384422">+263 71 438 4422</a></li>
          <li><i class="fa-solid fa-phone"></i><a href="tel:+13219782455">+1 (321) 978-2455</a></li>
        </ul>
        <a href="https://wa.me/13219782455" target="_blank" rel="noopener" class="wa-btn"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
      </aside>
    </div>
    <p class="jf-disclaimer"><strong>Disclaimer:</strong> The information you provide will only be used to respond to your inquiry. JobFlow will never share your details with third parties without your explicit consent.</p>
  </div>
</section>

<section class="section-alt">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Find us</span><h2>Our office in Harare, Zimbabwe.</h2></div>
    <div class="jf-map"><iframe title="JobFlow Digital Solutions location in Harare, Zimbabwe" src="https://www.google.com/maps?q=Harare,+Zimbabwe&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
  </div>
</section>

<section class="section-solid jf-faq">
  <div class="container">
    <div class="section-head narrow"><span class="eyebrow">Frequently asked questions</span><h2>Before you get in touch.</h2></div>
    <div class="jf-faq-list"><?php foreach ($faqs as $q): ?><details><summary><?= htmlspecialchars($q[0]) ?></summary><p><?= htmlspecialchars($q[1]) ?></p></details><?php endforeach; ?></div>
  </div>
</section>

<nav class="jf-related section-alt" aria-label="Explore JobFlow">
  <div class="container"><h2>Explore more</h2>
    <div>
      <a href="<?= BASE_URL ?>services.php">Outsourcing services</a>
      <a href="<?= BASE_URL ?>talent_acquisition.php">Talent acquisition</a>
      <a href="<?= BASE_URL ?>customer_support.php">Customer support</a>
      <a href="<?= BASE_URL ?>about_us.php">About JobFlow</a>
      <a href="<?= BASE_URL ?>team.php">Our team</a>
    </div>
  </div>
</nav>

<?php $status = $_GET['status'] ?? null;
$msgs = ['success'=>['success','Message sent!','Thank you for contacting us. We will get back to you shortly.'],
         'error'=>['error','Oops...','There was an error sending your message. Please try again later.'],
         'invalid_email'=>['error','Invalid email','Please enter a valid email address.']];
if ($status && isset($msgs[$status])): [$icon,$title,$text] = $msgs[$status]; ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  Swal.fire({ icon: <?= json_encode($icon) ?>, title: <?= json_encode($title) ?>, text: <?= json_encode($text) ?>, confirmButtonColor: '#f26b3a' });
});
</script>
<?php endif; ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });</script>

<?php require_once 'includes/footer.php'; ?>
