<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $budget = $_POST["budget"];
    // Email configuration
    $to = "vchoo10@gmail.com"; // Replace with recipient's email address
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\nMessage: $message\Budget: $budget";
    $headers = "From: vigneshayanikodan@gmail.com"; // Replace with your email address

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    }
} else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit;
}
?>
