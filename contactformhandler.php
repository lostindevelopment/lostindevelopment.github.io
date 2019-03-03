<?php
	$name = $_POST['name'];
	$Visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'chris128049@gmail';

	$email_subject = "lostnDev";

	$email_body = "User Name: $name.\n".
						"User Email: $Visitor_email.\n".
								"User Message: $message.\n";


	$to = "chris128049@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitory_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contactme.html");




?>
