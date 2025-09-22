    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About Job Flow -->
                <div class="footer-col about-jobflow">
                    <h4>Job Flow Digital Solutions</h4>
                    <p>A pioneering outsourcing company connecting businesses with top-tier African talent to enhance productivity and drive growth globally.</p>
                    <div class="footer-socials">
                        <a href="https://www.facebook.com/yourjobflowpage" target="_blank" rel="noopener noreferrer" aria-label="Connect on Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/yourjobflowhandle" target="_blank" rel="noopener noreferrer" aria-label="Connect on Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/job_flow_digital_solutions?igsh=MWViMmJvMGQ0NGM5NQ%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" aria-label="Connect on Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/yourjobflowcompany" target="_blank" rel="noopener noreferrer" aria-label="Connect on LinkedIn"><i class="fab fa-linkedin-in"></i></a> 
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-col footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                        <li><a href="<?php echo BASE_URL; ?>about_us.php">About Us</a></li>
                        <li><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                        <li><a href="<?php echo BASE_URL; ?>team.php">Our Team</a></li>
                        <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                        <li><a href="<?php echo BASE_URL; ?>faq.php">FAQ</a></li>
                        <li><a href="<?php echo BASE_URL; ?>privacy.php">Privacy Policy</a></li> 
                        <li><a href="<?php echo BASE_URL; ?>terms.php">Terms & Conditions</a></li> <!-- Added Terms & Conditions -->
                    </ul>
                </div>

                <!-- Column 3: Contact Info -->
                <div class="footer-col footer-contact-info">
                    <h4>Contact Us</h4>
                    <address>
                        <ul>
                            <li><a href="https://www.google.com/maps/search/123+Innovation+Drive,+Harare,+ZW" target="_blank" rel="noopener noreferrer" aria-label="Find us on Google Maps"><i class="fas fa-map-marker-alt"></i> 123 Innovation Drive, Harare, ZW</a></li>
                            <li><a href="tel:+13219782455" aria-label="Call us at 1 321 978 2455"><i class="fas fa-phone"></i> +1 (321) 978-2455</a></li>
                            <li><a href="tel:+263714384422" aria-label="Call us at 263 71 438 4422"><i class="fas fa-phone"></i> +263 71 438 4422</a></li>
                            <li><a href="mailto:contact@jobflow.com" aria-label="Email us at contact@jobflow.com"><i class="fas fa-envelope"></i> contact@jobflow.com</a></li>
                        </ul>
                    </address>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Job Flow Digital Solutions. All Rights Reserved.</p>
                <a href="#top" class="back-to-top" aria-label="Back to Top"><i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </footer>

<!-- 1. Load the Swiper.js library FIRST -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- 2. SweetAlert2 should be loaded before your main script if your script uses it -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- 3. THEN load your own script that uses it -->
<script src="<?php echo BASE_URL; ?>js/script.js"></script>

</body>
</html>