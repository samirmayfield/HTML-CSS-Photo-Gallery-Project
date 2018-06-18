<?php
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email = $_POST['emailaddress'];
$phone = $_POST['phonenumber'];
$formcontent= "\n From: $first $last \n Email Address: $email \n Phone Number: $phone";
$recipient = "samirmayfield@live.com";
$subject = "Reservation Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 
header("#"); 
exit();
?>