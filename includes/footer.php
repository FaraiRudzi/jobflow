</main>

<!-- Unified Styling Overrides for Logos -->
<style>
  .jf-foot-logo {
    max-width: 180px;
    height: auto;
    display: block;
    margin-bottom: 15px;
    object-fit: contain;
  }
  .jf-developer-wrap {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    vertical-align: middle;
    flex-wrap: wrap;
  }
  .jf-dev-logo {
    max-width: 110px;
    height: auto;
    object-fit: contain;
    display: inline-block;
    vertical-align: middle;
  }
  @media (max-width: 768px) {
    .jf-developer-wrap {
      justify-content: center;
      margin-top: 5px;
    }
  }
</style>

<footer class="jf-footer">
  <div class="container">
    <div class="jf-foot-grid">
      <!-- Brand & Correct JobFlow Logo Section -->
      <div class="jf-foot-brand">
        <div class="jf-foot-logo-wrap">
          <a href="<?= BASE_URL ?>index.php" aria-label="JobFlow Home">
            <!-- Corrected: JobFlow Logo Asset -->
            <img src="<?= BASE_URL ?>images/logo2.png" alt="JobFlow Digital Solutions Logo" class="jf-foot-logo" loading="lazy">
          </a>
        </div>
        <h4>JobFlow Digital Solutions</h4>
        <p>Connecting businesses with skilled African professionals to boost productivity and drive growth worldwide.</p>
        <div class="jf-social">
          <?php 
          $socials = [
              ['icon' => 'facebook-f', 'url' => 'https://facebook.com', 'name' => 'Facebook'],
              ['icon' => 'x-twitter',  'url' => 'https://twitter.com', 'name' => 'Twitter'],
              ['icon' => 'instagram',  'url' => 'https://instagram.com', 'name' => 'Instagram'],
              ['icon' => 'linkedin-in', 'url' => 'https://linkedin.com', 'name' => 'LinkedIn']
          ];
          foreach ($socials as $social): ?>
            <a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $social['name'] ?>">
              <i class="fab fa-<?= $social['icon'] ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Services Navigation -->
      <nav class="jf-foot-nav" aria-label="Services Links">
        <h4>Services</h4>
        <ul>
          <?php 
          $services = [
              'talent_acquisition' => 'Talent Acquisition',
              'customer_support'   => 'Customer Support',
              'finance_accounting' => 'Finance &amp; Accounting',
              'it_services'        => 'IT Support',
              'dental_services'    => 'Dental Practice Support',
              'bpo'                => 'BPO Services',
              'other_services'     => 'Other Services'
          ];
          foreach ($services as $file => $label): ?>
            <li><a href="<?= BASE_URL . $file ?>.php"><?= $label ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- Company Navigation -->
      <nav class="jf-foot-nav" aria-label="Company Links">
        <h4>Company</h4>
        <ul>
          <?php 
          $company = [
              'index'          => 'Home',
              'about_us'       => 'About JobFlow',
              'services'       => 'All Services',
              'team'           => 'Our Team',
              'contact'        => 'Contact Us',
              'privacy_policy' => 'Privacy Policy'
          ];
          foreach ($company as $file => $label): ?>
            <li><a href="<?= BASE_URL . $file ?>.php"><?= $label ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- Contact Info Section -->
      <div class="jf-foot-contact">
        <h4>Get in Touch</h4>
        <address>
          <p><i class="fas fa-map-marker-alt"></i> <span>Harare, Zimbabwe</span></p>
          <p><i class="fas fa-phone-alt"></i> <a href="tel:+13219782455">+1 (321) 978-2455</a></p>
          <p><i class="fas fa-phone-alt"></i> <a href="tel:+263714384422">+263 71 438 4422</a></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:info@jobflow.com">info@jobflow.com</a></p>
        </address>
        <a href="https://wa.me" target="_blank" rel="noopener noreferrer" class="wa-btn">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>

    <!-- Bottom Footer Bar with Correct Nexasoft Badge placement -->
    <div class="jf-foot-bottom">
      <div class="jf-copyright">
        <p>&copy; <?= date('Y') ?> JobFlow Digital Solutions. All rights reserved.</p>
        <p class="jf-developer">
          Designed by 
          <span class="jf-developer-wrap">
            <a href="mailto:farairudzi01@gmail.com" title="Contact Developer">Nexasoft Technologies</a>
            <!-- Corrected: Nexasoft Signature Logo Implemented -->
            <img src="<?= BASE_URL ?>images/logo.jpg" alt="Nexasoft Technologies Logo" class="jf-dev-logo" loading="lazy">
          </span>
          • <a href="https://wa.me" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> +263 77 397 6934</a>
        </p>
      </div>
      <a href="#top" aria-label="Back to top" class="jf-totop"><i class="fas fa-arrow-up"></i></a>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Action -->
<a href="https://wa.me" target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- Scripts Execution -->
<script src="https://jsdelivr.net"></script>
<script src="https://jsdelivr.net"></script>
<script src="<?= BASE_URL ?>js/script.js"></script>
<script>
  (function(){
    var h = document.querySelector('.site-header');
    if(!h) return;
    var f = function(){ h.classList.toggle('scrolled', window.scrollY > 10) };
    f();
    window.addEventListener('scroll', f, {passive: true});
  })();
</script>
</body>
</html>
