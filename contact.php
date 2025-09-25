<?php
$page_title = 'Contact Us - Job Flow';
$currentPage = 'contact';
require_once 'config.php';
require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Get in Touch</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">We'd love to hear from you. Send us a message and our team will get back to you promptly.</p>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-16" id="contact">
    <div class="container mx-auto px-6 max-w-6xl">
        <div class="bg-[#a2bfde] shadow-xl rounded-2xl grid grid-cols-1 md:grid-cols-2 overflow-hidden">
            
            <!-- Form Column -->
            <div class="p-8 md:p-12">
                <h3 class="text-3xl font-bold text-[#072a50] mb-6">Send Us a Message</h3>
                <form action="send_mail.php" method="POST" class="space-y-5">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#077cf8]">
                    </div>
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="you@example.com" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#077cf8]">
                    </div>
                    <!-- Subject Input -->
                    <div>
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="e.g., Service Inquiry" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#077cf8]">
                    </div>
                    <!-- Message Textarea -->
                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                        <textarea name="message" id="message" rows="5" placeholder="Please describe your needs..." required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#077cf8]"></textarea>
                    </div>

                    <!-- REFACTORED: Privacy Policy Checkbox -->
                    <div class="pt-2">
                        <div class="flex items-start space-x-3">
                            <input type="checkbox" name="privacy_agree" id="privacy_agree" required class="h-5 w-5 mt-1 text-[#077cf8] border-gray-300 rounded focus:ring-[#077cf8]">
                            <label for="privacy_agree" class="text-gray-600 text-sm">
                                By submitting this form, I acknowledge and agree to the terms outlined in the <a href="privacy_policy.php" class="text-blue-600 hover:underline">Privacy Policy</a>.
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full py-3 bg-[#077cf8] text-white font-bold rounded-full shadow-lg hover:bg-[#072a50] transition-all duration-300 transform hover:-translate-y-1">Send Message</button>
                    </div>
                </form>
            </div>

            <!-- Contact Info Column -->
            <div class="bg-[#e2b9a7] p-8 md:p-12 text-white flex flex-col">
                <h3 class="text-3xl font-bold mb-6">Contact Information</h3>
                <p class="opacity-90 mb-8">You can also reach us through the following channels:</p>
                <div class="space-y-6 mt-auto">
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-map-marker-alt text-2xl w-6 text-center"></i>
                        <span>Harare, Zimbabwe</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-envelope text-2xl w-6 text-center"></i>
                        <a href="mailto:info@jobflow.com" class="hover:underline">info@jobflow.com</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-phone text-2xl w-6 text-center"></i>
                        <a href="tel:+263714384422" class="hover:underline">+263 71 438 4422</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-phone text-2xl w-6 text-center"></i>
                        <a href="tel:+13219782455" class="hover:underline">+1 (321) 978-2455</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="text-center text-sm text-gray-500 mt-8 pt-4 border-t">
            <p><strong>Disclaimer:</strong> The information you provide will only be used to respond to your inquiry. JobFlow will never share your details with third parties without your explicit consent.</p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Ready to Partner With Us?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">Discover how our team can help your business thrive. Get a free, no-obligation consultation to learn more about our tailored solutions.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-[#077cf8] font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Get Started Today</a>
    </div>
</section>


<?php require_once 'includes/footer.php'; ?>

<?php
// SweetAlert for success/error messages
$status = $_GET['status'] ?? null;

if ($status) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {";

    switch ($status) {
        case 'success':
            echo "Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: 'Thank you for contacting us. We will get back to you shortly.',
                confirmButtonColor: '#3085d6'
            });";
            break;
        case 'error':
            echo "Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'There was an error sending your message. Please try again later.',
                confirmButtonColor: '#d33'
            });";
            break;
        case 'invalid_email':
             echo "Swal.fire({
                icon: 'error',
                title: 'Invalid Email',
                text: 'Please enter a valid email address.',
                confirmButtonColor: '#d33'
            });";
            break;
    }

    echo "});
    </script>";
}
?>