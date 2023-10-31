<?php
$to = "tadavi24@asu.edu";
$subject = "Form Submission";
$message = "First Name: " . $_POST["fname"] . "\n";
$message .= "Last Name: " . $_POST["lname"] . "\n";
$message .= "Interested In: " . $_POST["interest"] . "\n";
$message .= "Additional Info: " . $_POST["message"];

mail($to, $subject, $message);
header("Location: index.html");
?>
