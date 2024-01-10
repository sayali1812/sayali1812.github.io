<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit; // Stop further execution
    }

    // Additional validation if needed (e.g., checking name, message length, etc.)

    // Send the email or save to a database, depending on your requirements
    // Example: Send email
    $to = "sayalisdhavale@email.com";
    $subject = "Hire";
    $headers = "From: $email";

    // Add any additional headers or processing logic here

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);

    // You can also redirect the user to a thank-you page
    if ($mailSent) {
        echo "Email sent successfully";
        exit; // Stop further execution
    } else {
        echo "Email not sent, handle the error";
    }
}
?>
