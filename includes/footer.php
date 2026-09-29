</main>

<footer class="jf-footer">
  <div class="container">
    <div class="jf-foot-grid">
      <!-- Brand -->
      <div class="jf-foot-brand">
        <a href="<?= BASE_URL ?>index.php" class="jf-foot-logo-link" aria-label="JobFlow Home">
          <img src="<?= BASE_URL ?>images/logo2.png" alt="JobFlow Digital Solutions logo" class="jf-foot-logo" loading="lazy">
        </a>
        <h4>JobFlow Digital Solutions</h4>
        <p>Connecting businesses with skilled African professionals to boost productivity and drive growth worldwide.</p>
        <div class="jf-social">
          <?php
          $socials = [
              ['icon' => 'facebook-f',  'url' => 'https://www.facebook.com/yourjobflowpage', 'name' => 'Facebook'],
              ['icon' => 'x-twitter',   'url' => 'https://twitter.com/yourjobflowhandle',    'name' => 'X (Twitter)'],
              ['icon' => 'instagram',   'url' => 'https://www.instagram.com/job_flow_digital_solutions', 'name' => 'Instagram'],
              ['icon' => 'linkedin-in', 'url' => 'https://www.linkedin.com/company/yourjobflowcompany', 'name' => 'LinkedIn'],
          ];
          foreach ($socials as $social): ?>
            <a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $social['name'] ?>"><i class="fab fa-<?= $social['icon'] ?>"></i></a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Services -->
      <nav class="jf-foot-nav" aria-label="Services links">
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
              'other_services'     => 'Other Services',
          ];
          foreach ($services as $file => $label): ?>
            <li><a href="<?= BASE_URL . $file ?>.php"><?= $label ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- Company -->
      <nav class="jf-foot-nav" aria-label="Company links">
        <h4>Company</h4>
        <ul>
          <?php
          $company = [
              'index'          => 'Home',
              'about_us'       => 'About JobFlow',
              'services'       => 'All Services',
              'team'           => 'Our Team',
              'contact'        => 'Contact Us',
              'privacy_policy' => 'Privacy Policy',
          ];
          foreach ($company as $file => $label): ?>
            <li><a href="<?= BASE_URL . $file ?>.php"><?= $label ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- Contact -->
      <div class="jf-foot-contact">
        <h4>Get in touch</h4>
        <address>
          <p><i class="fas fa-location-dot"></i><span>Harare, Zimbabwe</span></p>
          <p><i class="fas fa-phone"></i><a href="tel:+13219782455">+1 (321) 978-2455</a></p>
          <p><i class="fas fa-phone"></i><a href="tel:+263714384422">+263 71 438 4422</a></p>
          <p><i class="fas fa-envelope"></i><a href="mailto:info@jobflow.com">info@jobflow.com</a></p>
        </address>
        <a href="https://wa.me/13219782455" target="_blank" rel="noopener noreferrer" class="wa-btn"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="jf-foot-bottom">
      <div class="jf-copyright">
        <p>&copy; <?= date('Y') ?> JobFlow Digital Solutions. All rights reserved.</p>
        <p class="jf-developer">
          Designed by
          <span class="jf-developer-wrap">
            <a href="mailto:farairudzi01@gmail.com" title="Contact the developer">Nexasoft Technologies</a>
            <img src="<?= BASE_URL ?>images/logo.jpg" alt="Nexasoft Technologies logo" class="jf-dev-logo" loading="lazy">
          </span>
          &bull; <a href="https://wa.me/263773976934" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> +263 77 397 6934</a>
        </p>
      </div>
      <a href="#top" aria-label="Back to top" class="jf-totop"><i class="fas fa-arrow-up"></i></a>
    </div>
  </div>
</footer>

<a href="https://wa.me/13219782455" target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>

<!-- Scripts: unpkg first, with fallbacks if a host is unreachable -->
<script src="https://unpkg.com/swiper@11/swiper-bundle.min.js"></script>
<script>window.Swiper||document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"><\/script>')</script>
<script>window.Swiper||document.write('<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"><\/script>')</script>
<script>window.Swiper||document.write('<script src="<?= BASE_URL ?>js/vendor/swiper-bundle.min.js"><\/script>')</script>
<script src="https://unpkg.com/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script>window.Swal||document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.10.1/sweetalert2.min.js"><\/script>')</script>
<script>window.Swal||document.write('<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"><\/script>')</script>
<script src="<?= BASE_URL ?>js/script.js"></script>
<script>
  (function () {
    var h = document.querySelector('.site-header');
    if (!h) return;
    var f = function () { h.classList.toggle('scrolled', window.scrollY > 10); };
    f();
    window.addEventListener('scroll', f, { passive: true });
  })();
</script>
</body>
</html>