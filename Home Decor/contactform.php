<?php
$name= $_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$messgae=$_POST['message'];

$email_from='harshyard@gmail.com';
$email_subject="New Form Submission";
$email_body="User name: $name.\n".
    "User email: $visitor_email.\n".
    "Subject: $subject. \n".
    "Message: $message. \n";
$to= "harshyard@gmail.com";
$headers= "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subejct,$email_body,$headers);
header("Location:contact.html");

    
?>