<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'queries@hnbgu.com';

$email_subject = 'New Question Asked';

$email_body = "User Name: $name.\n".
            "User email: $email.\n".
            "Subject: $subject.\n".
            "Question: $message.\n";

$to = 'rajveer.neeraj1206@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
