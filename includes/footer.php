</main> <!-- This closing tag should be in the file that includes the footer -->

    <footer class="bg-[#072a50] text-gray-300 py-16">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                
                <!-- About Column -->
                <div class="space-y-4 pr-4">
                    <h4 class="text-white text-xl font-semibold mb-3">Job Flow Digital Solutions</h4>
                    <p class="text-sm leading-relaxed text-gray-400">A pioneering outsourcing company connecting businesses with top-tier African talent to enhance productivity and drive growth globally.</p>
                    <div class="flex space-x-5 pt-2">
                        <a href="https://www.facebook.com/yourjobflowpage" target="_blank" rel="noopener noreferrer" aria-label="Connect on Facebook" class="text-gray-400 hover:text-[#e66a33] transition-colors duration-300"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="https://twitter.com/yourjobflowhandle" target="_blank" rel="noopener noreferrer" aria-label="Connect on Twitter" class="text-gray-400 hover:text-[#e66a33] transition-colors duration-300"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="https://www.instagram.com/job_flow_digital_solutions?igsh=MWViMmJvMGQ0NGM5NQ%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" aria-label="Connect on Instagram" class="text-gray-400 hover:text-[#e66a33] transition-colors duration-300"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://www.linkedin.com/company/yourjobflowcompany" target="_blank" rel="noopener noreferrer" aria-label="Connect on LinkedIn" class="text-gray-400 hover:text-[#e66a33] transition-colors duration-300"><i class="fab fa-linkedin-in text-xl"></i></a> 
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h4 class="text-white text-xl font-semibold mb-3">Quick Links</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="<?= BASE_URL ?>index.php" class="hover:text-[#e66a33] transition-colors duration-300">Home</a></li>
                        <li><a href="<?= BASE_URL ?>about_us.php" class="hover:text-[#e66a33] transition-colors duration-300">About Us</a></li>
                        <li><a href="<?= BASE_URL ?>services.php" class="hover:text-[#e66a33] transition-colors duration-300">Services</a></li>
                        <li><a href="<?= BASE_URL ?>contact.php" class="hover:text-[#e66a33] transition-colors duration-300">Contact Us</a></li>
                        <li><a href="<?= BASE_URL ?>privacy_policy.php" class="hover:text-[#e66a33] transition-colors duration-300">Privacy Policy</a></li> 
                    </ul>
                </div>

                <!-- Contact Us Column -->
                <div>
                    <h4 class="text-white text-xl font-semibold mb-3">Contact Us</h4>
                    <address class="not-italic text-gray-400">
                        <ul class="space-y-3">
                            <li class="flex items-start"><i class="fas fa-map-marker-alt mt-1 mr-3 text-lg"></i><span>Harare, Zimbabwe</span></li>
                            <li class="flex items-start"><i class="fas fa-phone mt-1 mr-3 text-lg"></i><a href="tel:+13219782455" class="hover:text-[#e66a33] transition-colors duration-300">+1 (321) 978-2455</a></li>
                            <li class="flex items-start"><i class="fas fa-phone mt-1 mr-3 text-lg"></i><a href="tel:+263714384422" class="hover:text-[#e66a33] transition-colors duration-300">+263 71 438 4422</a></li>
                            <li class="flex items-start"><i class="fas fa-envelope mt-1 mr-3 text-lg"></i><a href="mailto:info@jobflow.com" class="hover:text-[#e66a33] transition-colors duration-300">info@jobflow.com</a></li>
                        </ul>
                    </address>
                    <a href="https://wa.me/263773976934" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-full shadow-lg transition-all duration-300 mt-4 transform hover:-translate-y-1">
                            <i class="fab fa-whatsapp text-xl mr-2"></i>
                            Chat with us on WhatsApp
                        </a>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between text-sm text-gray-500">
                <p>&copy; <?= date('Y') ?> Job Flow Digital Solutions. All Rights Reserved.</p>
                <a href="#top" class="back-to-top mt-4 md:mt-0 text-gray-400 hover:text-white transition-colors duration-300" aria-label="Back to Top">
                    <div class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[#e66a33] flex items-center justify-center">
                        <i class="fas fa-arrow-up text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </footer>

    <!-- Floating Action Button (FAB) - Example: Chatbot -->
    <div class="fixed bottom-6 right-6 z-50">
        <button class="flex items-center justify-center w-14 h-14 bg-[#077cf8] rounded-full text-white shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:scale-110" aria-label="Open Chatbot">
            <i class="fas fa-question-circle text-2xl"></i>
        </button>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="<?= BASE_URL ?>js/script.js"></script>

</body>
</html>