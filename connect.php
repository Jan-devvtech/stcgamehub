<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $fullname = htmlspecialchars($_POST['fname']);
  $email = htmlspecialchars($_POST['email']);
  $number = htmlspecialchars($_POST['number']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);


  //If else statement 
  $subjectCategory = "";

  if ($subject == 'details') {
    $subjectCategory = "Details Inquiry";
  } else if ($subject == 'freelance') {
    $subjectCategory = "Freelance Services";
  } else if ($subject == 'support') {
    $subjectCategory = "Support Service";
  } else if ($subject == 'background') {
    $subjectCategory = 'Background Information';
  } else if ($subject == 'something-else') {
    $subjectCategory = "Other Concerns";
  } else {
    $subjectCategory = "Invalid Subject";
  }
  
  
  //Print for user's broswer
  echo "<!DOCTYPE html>";
  echo "<html lang='en'>";
  echo "<head><title>Form Received - STC Gamehub</title></head>";
  echo "<body>";

  echo "<h3>We received your message</h3>";
  echo "<p>Thank you for your coorperation</p>";

  echo "<hr>";
  echo "<h3>Your Information</h3>";
  echo "<ul>";
  echo "<li><strong>Full name: </strong>" . $fullname . "</li>";
  echo "<li><strong>Email: </strong>" . $email . "</li>";
  echo "<li><strong>Number: </strong>" . $number . "</li>";
  echo "<li><strong>Subject: </strong>" . $subjectCategory . " (" . $subject . ")</li>";
  echo "</ul>";
  
  echo "<br><a href='index.html'>Back to home</a>";
  
} else {
  echo "No information received. Please go back to the form.";
}
  



?>