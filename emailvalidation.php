<?php 
$email = $_POST['email'];

// Check if email is empty
if(empty($email)) {
   echo "Email is required";
} else {
   // Check if email is valid
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
   } else {
      echo "Email is valid";
   }
}





?>