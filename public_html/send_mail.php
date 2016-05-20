<?php
 
if(isset($_POST['email'])) {
	
    $email_to = 'shaas@timothygroup.com'; 

	$name = $_POST['name'];
	
	$email = $_POST['email'];
	
	$subject = $_POST['subject'];
	
	$message = $_POST['message'];
	 
	$headers = 'From: '.$email_from.'\r\n'.
	 
	'Reply-To: '.$email_from.'\r\n' .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $subject, $message, $headers);  
 
	echo 'Thank you for contacting us. We will be in touch with you very soon.';
}
?>