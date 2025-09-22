<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $position = htmlspecialchars($_POST['position']);
    $quote = htmlspecialchars($_POST['quote']);
    $image = !empty($_POST['image']) ? htmlspecialchars($_POST['image']) : 'https://via.placeholder.com/100';

    // Path to testimonials JSON
    $file = 'testimonials.json';
    $maxTestimonials = 5; // max testimonials to keep

    // Read existing testimonials
    $testimonials = [];
    if (file_exists($file)) {
        $jsonData = file_get_contents($file);
        $testimonials = json_decode($jsonData, true);
    }

    // Add new testimonial at the end
    $testimonials[] = [
        'name' => $name,
        'position' => $position,
        'quote' => $quote,
        'image' => $image
    ];

    // Keep only the latest $maxTestimonials testimonials
    if (count($testimonials) > $maxTestimonials) {
        $testimonials = array_slice($testimonials, -$maxTestimonials);
    }

    // Save updated testimonials
    file_put_contents($file, json_encode($testimonials, JSON_PRETTY_PRINT));

    // Send email notification using PHPMailer
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'farairudzi01@gmail.com'; // your Gmail
        $mail->Password   = 'drcekbiqwiyiarfc';       // app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('farairudzi01@gmail.com', 'Job Flow');
        $mail->addAddress('farairudzi01@gmail.com', 'Job Flow'); // notification recipient

        $mail->isHTML(false);
        $mail->Subject = 'New Testimonial Submission';
        $mail->Body    = "Name: $name\nPosition: $position\nQuote: $quote\nImage: $image";

        $mail->send();
    } catch (Exception $e) {
        // Optional: log errors if needed
        // file_put_contents('error_log.txt', $mail->ErrorInfo.PHP_EOL, FILE_APPEND);
    }

    // Redirect with SweetAlert success
    header('Location: index.php?testimonial=success');
    exit;
}
?>
