<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $to = "prisacariuadelin@gmail.com"; // Replace with your own email address
    $subject = "Contact Us Form Submission";
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone: " . $phone . "\n";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
      echo "success";
    } else {
      echo "error";
    }
  }
?>