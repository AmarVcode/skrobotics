<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'Info@skrobotics.in';
  $headers = "From: $email";
  $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for contacting us.';
  } else {
    echo 'There was a problem sending the email.';
  }
}
?>
