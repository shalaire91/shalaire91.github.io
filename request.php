<?php 
if(isset(@_POST['submit'])){
	$firstName = $_POST['txtFirstName'];
	$lastName = $_POST['txtLastName'];
	$emailAddress = $_POST['txtEmailAddress'];
	$subject =  $_POST['txtSubject'];
	$message = $_POST['txtMessage'];
	
	$send_email_to = "shalaire91@gmail.com";
	$headers .= "From: ".$emailAddress. "\r\n";
	 $txt = "You have recieved an e-mail from".$firstName."."$lastName".\n\n."$message;
	
	mail($send_email_to, $email_subject, $message,$headers);
	header("Location: send_form_email.php?mailsend");
}
?>
