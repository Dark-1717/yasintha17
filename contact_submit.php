<?php
// contact_submit.php

// Define page title and active page for header, although this page might not show full header in a real scenario
// For now, we'll include them for consistency if we decide to show a full page response.
$pageTitle = "Contact Form Submission";
$activePage = "contact"; // Or perhaps none, if it's just a processing script

$message = "";
$error_message = "";
$submitted_data_html = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    // Using htmlspecialchars to prevent XSS when echoing back the data for display
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : ''; // Optional
    $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $destination_interest = isset($_POST['destination_interest']) ? htmlspecialchars(trim($_POST['destination_interest'])) : ''; // Optional
    $user_message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Basic Validation
    if (empty($name)) {
        $error_message .= "Full Name is required.<br>";
    }
    if (empty($email)) {
        $error_message .= "Email Address is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message .= "Invalid Email Address format.<br>";
    }
    if (empty($subject)) {
        $error_message .= "Subject is required.<br>";
    }
    if (empty($user_message)) {
        $error_message .= "Your Message is required.<br>";
    }

    if (empty($error_message)) {
        // Process the form (e.g., send email, save to database)
        // For now, we'll just display a success message and the data

        $message = "Thank you for contacting us, " . $name . "! Your message has been received.";

        $submitted_data_html = "<h3>Submitted Details:</h3>";
        $submitted_data_html .= "<p><strong>Full Name:</strong> " . $name . "</p>";
        $submitted_data_html .= "<p><strong>Email:</strong> " . $email . "</p>";
        if (!empty($phone)) {
            $submitted_data_html .= "<p><strong>Phone:</strong> " . $phone . "</p>";
        }
        $submitted_data_html .= "<p><strong>Subject:</strong> " . $subject . "</p>";
        if (!empty($destination_interest)) {
            $submitted_data_html .= "<p><strong>Destination/Package Interest:</strong> " . $destination_interest . "</p>";
        }
        $submitted_data_html .= "<p><strong>Message:</strong><br>" . nl2br($user_message) . "</p>"; // nl2br to preserve line breaks

        // In a real application, you would NOT display user data like this without further processing
        // and you would typically redirect after successful submission (Post/Redirect/Get pattern).
        // mail($to, $email_subject, $email_body, $headers);
        // header("Location: thank_you.php");
        // exit;

    } else {
        // Retain submitted data to repopulate form (not implemented here for simplicity,
        // but in a real scenario you'd pass data back or use session).
        // For now, just show errors.
        $error_message = "<h3>Error:</h3><p>" . $error_message . "</p><p>Please go back and correct the errors.</p>";
    }
} else {
    // Not a POST request, redirect to contact page or show an error
    // For simplicity, we'll just say it wasn't submitted correctly.
    $error_message = "<p>Form was not submitted correctly. Please use the <a href='contact.php'>contact form</a>.</p>";
}

// Include header
include 'templates/header.php';
?>

<section id="submission-status" style="padding: 20px; max-width: 800px; margin: 20px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <h2 style="text-align:center;"><?php echo ($pageTitle); ?></h2>

    <?php if (!empty($message)): ?>
        <div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 15px;">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($error_message)): ?>
        <div style="padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 15px;">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($submitted_data_html)): ?>
        <div style="padding: 15px; background-color: #e9ecef; border: 1px solid #dee2e6; border-radius: 4px;">
            <?php echo $submitted_data_html; ?>
        </div>
    <?php endif; ?>

    <p style="text-align:center; margin-top:20px;">
        <a href="contact.php" class="btn-details" style="margin-right:10px;">Back to Contact Form</a>
        <a href="index.php" class="btn-details">Back to Home</a>
    </p>
    <div style="margin-top: 20px; padding:10px; background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 4px;">
        <strong>Note:</strong> This is a basic demonstration. In a production environment, never display user-submitted data directly without proper sanitization and consider redirecting after a successful POST request. Email sending and database storage are not implemented here.
    </div>
</section>

<?php
// Include footer
include 'templates/footer.php';
?>
