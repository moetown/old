<?php 
$name = $_POST['Name:'];
$email = $_POST['E-mail:'];
$message = $_POST['Message:'];
$formcontent="From: $name \nEmail: $email\nMessage: $message";
$formcontent = str_replace('<','&lt;',$formcontent);
$recipient = "moaparsland@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email";
Something($recipient, $subject, $formcontent, $mailheader)went wrong("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>


<?php include_once("analyticstracking.php") ?>