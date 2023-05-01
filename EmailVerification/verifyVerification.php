<?php
//When the user clicks the verification link, check if the verification code matches the one in the database and update the user's account as verified.


// Verify the user's email address
$email = $_GET['email'];
$verificationCode = $_GET['code'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND verification_code = ?");
$stmt->execute([$email, $verificationCode]);
$user = $stmt->fetch();

if ($user) {
    // Update the user's account as verified
    $stmt = $pdo->prepare("UPDATE users SET verified = 1 WHERE id = ?");
    $stmt->execute([$user['id']]);

    // Redirect the user to the login page with a success message
    header("Location: login.php?msg=verified");
    exit;
} else {
    // Redirect the user to the login page with an error message
    header("Location: login.php?msg=invalid_verification_code");
    exit;
}




?>