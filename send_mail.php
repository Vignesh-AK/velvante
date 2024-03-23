<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "recipient@example.com"; // Replace with recipient's email address
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: sender@example.com"; // Replace with your email address

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Error: This script should be accessed via POST method.";
}
?>
