<?php

//First, generate a verification code and store it in your database along with the user's email and other registration data.
// Generate a random verification code
$verificationCode = rand(100000, 999999);

// Store the verification code and email in the database
$stmt = $pdo->prepare("INSERT INTO users (email, password, verification_code) VALUES (?, ?, ?)");
$stmt->execute([$email, $passwordHash, $verificationCode]);






?>