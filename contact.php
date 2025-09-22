<?php
$page_title  = 'Contact Us - Job Flow';
$currentPage = 'contact';
require_once 'config.php';
require_once 'includes/header.php';

$status = $_GET['status'] ?? null;
if ($status) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {";

    if ($status === 'success') {
        echo "Swal.fire({
            icon: 'success',
            title: 'Message Sent',
            text: 'Your message has been sent successfully!'
        });";
    } elseif ($status === 'error') {
        echo "Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'There was an error sending your message. Please try again.'
        });";
    } elseif ($status === 'invalid_email') {
        echo "Swal.fire({
            icon: 'error',
            title: 'Invalid Email',
            text: 'Please enter a valid email address.'
        });";
    }

    echo "});
    </script>";
}
?>



<!-- Page Header -->
<section class="page-header">
  <div class="container text-center">
    <h1>Get in Touch</h1>
    <p>We’d love to hear from you. Send us a message and we’ll get back to you shortly.</p>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
  <div class="container contact-wrapper">
    <!-- Contact Form -->
    <div class="contact-form-wrapper">
      <h3>Send Us a Message</h3>
      <form action="send_mail.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info-wrapper">
      <h3>Contact Information</h3>
      <p>You can also reach us through the following:</p>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i> Harare, Zimbabwe</li>
        <li><i class="fas fa-envelope"></i> info@jobflow.com</li>
        <li><i class="fas fa-phone"></i> +263 71 438 4422</li>
       <li><i class="fas fa-phone"></i> + 1 (321) 978-2455</li>
      </ul>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>

<?php
// SweetAlert for success/error messages
if (isset($_GET['status'])) {
    if ($_GET['status'] === 'success') {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Message Sent!',
            text: 'Thank you for contacting us. We will get back to you shortly.',
            confirmButtonColor: '#3085d6'
        });
        </script>";
    } elseif ($_GET['status'] === 'error') {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'There was an error sending your message. Please try again later.',
            confirmButtonColor: '#d33'
        });
        </script>";
    }
}



?>
<?php if (isset($_GET['testimonial']) && $_GET['testimonial'] == 'success'): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        icon: 'success',
        title: 'Thank you!',
        text: 'Your testimonial has been submitted successfully.',
        confirmButtonColor: '#3085d6'
    });
});
</script>
<?php endif; ?>