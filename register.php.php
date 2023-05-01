<?php
if(isset($_POST['register'])){
    // connect to database
    $conn = mysqli_connect('localhost', 'username', 'password', 'empathyDB');
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    // get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // check if email is already registered
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "Email already registered";
    }else{
        // generate verification code
        $verificationCode = rand(100000, 999999);

        // insert user data into database
        $sql = "INSERT INTO users (name, email, password, verification_code) VALUES ('$name', '$email', '$password', '$verificationCode')";
        if(mysqli_query($conn, $sql)){
            // send verification email to user
            $to = $email;
            $subject = "Verify your email address";
            $message = "Your verification code is: " . $verificationCode . ". Click the link below to verify your email address.\n\n";
            $message .= "http://example.com/verify.php?email=" . urlencode($email) . "&code=" . urlencode($verificationCode);
            $headers = "From: noreply@example.com\r\n";
            mail($to, $subject, $message, $headers);

            echo "Registration successful. Please check your email to verify your account.";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }

    // close database connection
    mysqli_close($conn);
}
?>
