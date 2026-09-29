</main>

<footer class="jf-footer">
  <div class="container">
    <div class="jf-foot-grid">
      <div class="jf-foot-brand">
        <h4>JobFlow Digital Solutions</h4>
        <p>Connecting businesses with skilled African professionals to boost productivity and drive growth worldwide.</p>
        <div class="jf-social">
          <?php foreach ([['facebook-f','https://www.facebook.com/yourjobflowpage','Facebook'],['twitter','https://twitter.com/yourjobflowhandle','Twitter'],['instagram','https://www.instagram.com/job_flow_digital_solutions?igsh=MWViMmJvMGQ0NGM5NQ%3D%3D&utm_source=qr','Instagram'],['linkedin-in','https://www.linkedin.com/company/yourjobflowcompany','LinkedIn']] as [$i,$u,$n]): ?>
            <a href="<?= $u ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $n ?>"><i class="fab fa-<?= $i ?>"></i></a>
          <?php endforeach; ?>
        </div>
      </div>

      <nav aria-label="Services">
        <h4>Services</h4>
        <ul>
          <?php foreach (['talent_acquisition'=>'Talent Acquisition','customer_support'=>'Customer Support','finance_accounting'=>'Finance &amp; Accounting','it_services'=>'IT Support','dental_services'=>'Dental Practice Support','bpo'=>'BPO Services','other_services'=>'Other Services'] as $f=>$l): ?>
            <li><a href="<?= BASE_URL.$f ?>.php"><?= $l ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <nav aria-label="Company">
        <h4>Company</h4>
        <ul>
          <?php foreach (['index'=>'Home','about_us'=>'About JobFlow','services'=>'All Services','team'=>'Our Team','contact'=>'Contact Us','privacy_policy'=>'Privacy Policy'] as $f=>$l): ?>
            <li><a href="<?= BASE_URL.$f ?>.php"><?= $l ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div>
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

    <div class="jf-foot-bottom">
      <p>&copy; <?= date('Y') ?> JobFlow Digital Solutions. All rights reserved.</p>
      <a href="#top" aria-label="Back to top" class="jf-totop"><i class="fas fa-arrow-up"></i></a>
    </div>
  </div>
</footer>

<a href="https://wa.me/13219782455" target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="<?= BASE_URL ?>js/script.js"></script>
<script>
  (function(){var h=document.querySelector('.site-header');if(!h)return;
  var f=function(){h.classList.toggle('scrolled',window.scrollY>10)};f();window.addEventListener('scroll',f,{passive:true});})();
</script>
</body>
</html>
