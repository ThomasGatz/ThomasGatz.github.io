<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$to = "tadavi24@asu.edu";
$subject = "Form Submission";
$message = "First Name: " . $_POST["fname"] . "\n";
$message .= "Last Name: " . $_POST["lname"] . "\n";
$message .= "Interested In: " . $_POST["interest"] . "\n";
$message .= "Additional Info: " . $_POST["message"];

mail($to, $subject, $message);
header("Location: index.html");
?>
