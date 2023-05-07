<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate form data
  if (!empty($name) && !empty($email) && !empty($message)) {

    // Send email
    $to = "jessemorgan@titaniumvault.ca";
    $subject = "Website Contact Inquiry";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo "Thank you for contacting us!";
    } else {
      echo "There was an error sending your message. Please try again.";
    }

  } else {
    echo "Please fill in all fields.";
  }

}

?>

<!DOCTYPE html>
