<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$when = $_POST['when'];
$message = $_POST['message'];

// Set up the email message
$to = 'rileystaceyopus@gmail.com';
$subject = 'New form submission';
$message_body = "Name: $name\nEmail: $email\nWhen: $when"\nMessage: $message";

// Send the email
$headers = "From: $email";
mail($to, $subject, $message_body, $headers);

// Redirect the user to a "thank you" page
header('Location: thank-you.html');
?>