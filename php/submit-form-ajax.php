<?php

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
	die('Error: Missing variables');
}

$name=$_POST['name'];
$email=$_POST['email'];
$subject='Post from contact form';
$message=$_POST['message'];
$_email=$_POST['_email'];

$to=$_email;

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = $subject;
$body='You have got a new message from the contact form on your website.'."\n\n";
$body.='Name: '.$name."\n";
$body.='Email: '.$email."\n";
$body.='Subject: '.$subject."\n";
$body.='Message: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('Mail sent');
} else {
	die('Error: Mail failed');
}

?>