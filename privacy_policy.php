<?php
    $page_title  = 'Privacy Policy - Job Flow';
    $currentPage = 'privacy_policy';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="bg-[#5a8bd5] py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">Privacy Policy</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto">Your privacy is important to us. We are committed to being transparent about how we collect, use, and protect your information.</p>
    </div>
</section>

<!-- Main Policy Content Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-4xl bg-white p-8 md:p-12 rounded-2xl shadow-lg">
        <div class="prose max-w-none text-gray-700 leading-relaxed">
            <p class="text-md font-semibold text-gray-600">Last Updated: October 26, 2025</p>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">1. Introduction</h2>
                <p>Welcome to <strong>Job Flow Digital Solutions</strong> ("we," "our," or "us"). We are committed to protecting the privacy of our website visitors and clients. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, <a href="<?= BASE_URL ?>" class="text-blue-600 hover:underline"><?= rtrim(str_replace('https://', '', BASE_URL), '/') ?></a>, and use our services.</p>
            </div>
            
            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">2. Information We Collect</h2>
                <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                
                <h3 class="font-semibold text-lg text-gray-800 mt-6 mb-2">Personal Data</h3>
                <p>Personally identifiable information, such as your <em>name, email address, and telephone number</em>, that you voluntarily give to us when you fill out the contact form on our website.</p>
                
                <h3 class="font-semibold text-lg text-gray-800 mt-6 mb-2">Derivative Data</h3>
                <p>Information our servers automatically collect when you access the Site, such as your <em>IP address, browser type, operating system, access times, and the pages you have viewed</em> directly before and after accessing the Site. This information is used for statistical purposes and to improve the user experience.</p>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">3. How We Use Your Information</h2>
                <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you to:</p>
                <ul class="list-disc list-inside space-y-2 pl-4 mt-4">
                    <li>Respond to your inquiries, questions, and comments and provide customer support.</li>
                    <li>Improve our website and service offerings.</li>
                    <li>Send you periodic emails regarding our services, with your consent.</li>
                    <li>Prevent fraudulent transactions, monitor against theft, and protect against criminal activity.</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">4. Data Security</h2>
                <blockquote class="border-l-4 border-[#e66a33] pl-4 italic text-gray-600 my-4">
                    We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.
                </blockquote>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">5. Disclosure of Your Information</h2>
                <p><strong>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties</strong> unless we provide users with advance notice. This does not include trusted partners who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential.</p>
                <p class="mt-4">We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety.</p>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">6. Policy for Cookies</h2>
                <p>Cookies are small files that a site transfers to your computer's hard drive through your Web browser (if you allow). They enable the site's systems to recognize your browser and remember certain information. We may use cookies to help us compile aggregate data about site traffic so that we can offer better site experiences in the future. You can choose to turn off all cookies through your browser settings.</p>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">7. Your Rights</h2>
                <p>You have the right to <strong>access, correct, or delete</strong> your personal data that we hold. If you wish to exercise any of these rights, please contact us using the information below.</p>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">8. Changes to This Privacy Policy</h2>
                <p>We may update this Privacy Policy from time to time. The updated version will be indicated by an updated <em>"Last Updated"</em> date. We encourage you to review this privacy policy frequently to be informed of how we are protecting your information.</p>
            </div>

            <div class="policy-section">
                <h2 class="text-[#072a50] font-bold text-2xl mb-4">9. Contact Us</h2>
                <p>If you have any questions or comments about this Privacy Policy, please do not hesitate to contact us:</p>
                <div class="bg-gray-100 p-4 rounded-lg mt-4">
                    <p><strong>Job Flow Digital Solutions</strong><br>
                    Harare, Zimbabwe<br>
                    Email: <a href="mailto:info@jobflow.com" class="text-blue-600 hover:underline">info@jobflow.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reusable CSS for policy pages -->
<style>
    .policy-section {
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
        border-bottom: 1px solid #e5e7eb; /* border-gray-200 */
    }
    .policy-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
</style>

<!-- Include CTA Banner for consistency -->
<section class="bg-[#077cf8] text-white py-16 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold mb-4">Have Questions About Your Privacy?</h2>
        <p class="text-lg mx-auto max-w-2xl my-4 opacity-90">We are committed to transparency. If you have any questions about our data practices, please don't hesitate to reach out.</p>
        <a href="contact.php#contact" class="inline-block px-8 py-3 bg-white text-[#077cf8] font-bold rounded-full shadow-lg hover:bg-[#e66a33] transition-all duration-300 transform hover:-translate-y-1">Contact Us</a>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>