<?php
  // prevent cross-site request forgery (CSRF) attacks
  if (!isset($_POST["submit"]) || !hash_equals($_SESSION["token"], $_POST["token"])) {
    echo "Invalid request";
    exit;
  }

  // validate inputs
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $class_section = filter_var($_POST["class_section"], FILTER_SANITIZE_STRING);

  // validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
    exit;
  }

  // send the email
  $to = "recipient@example.com";
  $subject = "Form Submission from $name";
  $body = "Name: $name\nEmail: $email\nMessage: $message\nClass Section: $class_section";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Form submitted successfully";
  } else {
    echo "Error sending email";
  }
?>
