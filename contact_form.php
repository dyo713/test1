<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process form data here
  // For example:
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // You can add code here to send an email or store the form data in a database
  // Example: Sending an email
  $to = "your_email@example.com";
  $subject = "New Contact Form Submission";
  $txt = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
  $headers = "From: " . $email;

  mail($to, $subject, $txt, $headers);
}
?>
