<?php

	$UserName = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Msg = $_POST['Message'];

	$email_from = 'karan.n.singh0@gmail.com';

	$email_subject = 'New Form Submission';

	$email_body = "User Name: $UserName.\n".
					"User Email: $Email.\n".
					"User Message: $Msg.\n";

	$to = "karan.n.singh0@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Replay-To: $Email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact-us.html");
	
?>