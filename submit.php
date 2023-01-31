<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // process form data
    
    // redirect to previous page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  
  } else {
    // show error message
    echo "Invalid request";
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
  $to = "johnmichaelg135@gmail.com";
  $subject = "Form Submission from $name";
  $body = "Name: $name\nEmail: $email\nMessage: $message\nClass Section: $class_section";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Form submitted successfully";
  } else {
    echo "Error sending email";
  }
?>
