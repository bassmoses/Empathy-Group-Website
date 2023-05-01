<?php
$email = "user@example.com"; // Replace with the actual email address

//Send an email to the user with the verification code and a link to verify their email.
// Send an email to the user with the verification code and verification link
$to = $email;
$subject = "Verify your email address";
$message = "Your verification code is: " . $verificationCode . ". Click the link below to verify your email address.\n\n";
$message .= "http://example.com/verify.php?email=" . urlencode($email) . "&code=" . urlencode($verificationCode);
$headers = "From: noreply@example.com\r\n";
mail($to, $subject, $message, $headers);
?>
