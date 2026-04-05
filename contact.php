<?php 
    $pageTitle = "Contact Us";
    $messageSent = false;

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = strip_tags(trim($_POST["message"]));
        
        // Your email address where you want to receive messages
        $to = "your-email@example.com";
        $subject = "New Contact Form Submission from $name";
        $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: noreply@yourwebsite.com"; // Your web host may require a specific from address

        // Attempt to send the email
        // Note: The mail() function's success depends on your web hosting server's configuration.
        if (mail($to, $subject, $body, $headers)) {
            $messageSent = true;
        }
    }

    include 'header.php'; 
?>

<style>
    .contact-form { max-width: 600px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 5px; }
    .contact-form input, .contact-form textarea { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; }
    .contact-form button { width: 100%; padding: 10px; background: #333; color: #fff; border: none; cursor: pointer; }
    .success-message { text-align: center; color: green; font-weight: bold; }
</style>

<div class="container">
    <div class="contact-form">
        <h2>Get In Touch</h2>
        
        <?php if ($messageSent): ?>
            <p class="success-message">Thank you for your message! We will get back to you soon.</p>
        <?php else: ?>
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
