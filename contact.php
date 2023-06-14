<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info@mywebsitename.com";
$email_subject = "New Form Submission";
$email_body = "User Name: .$name.\n".
              "User Email: .$email.\n".
              "Subject: .$subject.\n".
              "User Message: .$message.\n";
$to = "xhamm2010@gmail.com";
$header = "From: .$email_from.\n";
$header .= "Reply to: .$email.\n";
mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");