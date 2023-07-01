<?php	
	if (empty($_POST['name_24837']) && strlen($_POST['name_24837']) == 0 || empty($_POST['email_24837']) && strlen($_POST['email_24837']) == 0 || empty($_POST['message_24837']) && strlen($_POST['message_24837']) == 0)
	{
		return false;
	}
	
	$name_24837 = $_POST['name_24837'];
	$email_24837 = $_POST['email_24837'];
	$message_24837 = $_POST['message_24837'];
	$optin_24837 = $_POST['optin_24837'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_24837: $name_24837 \nEmail_24837: $email_24837 \nMessage_24837: $message_24837 \nOptin_24837: $optin_24837 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_24837";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>