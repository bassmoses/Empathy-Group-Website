<?php
// Check if the email and verification code are set in the URL
if (isset($_GET['email']) && isset($_GET['code'])) {
    $email = $_GET['email'];
    $verificationCode = $_GET['code'];

    // Connect to the database and check if the email and verification code match
    $db = new mysqli('localhost', 'username', 'password', 'empathyDB');
    $stmt = $db->prepare('SELECT id FROM users WHERE email = ? AND verification_code = ? AND verified = 0');
    $stmt->bind_param('ss', $email, $verificationCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Update the user's record in the database to mark them as verified
        $stmt = $db->prepare('UPDATE users SET verified = 1 WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->close();

        // Display a success message to the user
        echo "Your email has been verified. Thank you!";
    } else {
        // Display an error message to the user if the email and verification code don't match
        echo "Sorry, your email could not be verified.";
    }

    $db->close();
} else {
    // Display an error message to the user if the email and verification code are not set in the URL
    echo "Sorry, something went wrong. Please try again later.";
}
?>

<!-- This code first checks if the email and code parameters are set in the URL. If they are, it connects to the 
database and checks if the email and verification code match a record in the users table with a verified value of 0. 
If there is a match, it updates the user's record to mark them as verified and displays a success message. 
If there is no match, it displays an error message. If the email and code parameters are not set in the URL, 
it displays another error message. -->