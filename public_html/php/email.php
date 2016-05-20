<?php
 
if(isset($_POST['email_from'])) {
	
    $email_to = 'shaas@timothygroup.com'; 

	$name = $_POST['user_name'];
	
	$email = $_POST['email_from'];
	
	$subject = $_POST['user_subject'];
	
	$message = $_POST['user_message'];
	 
	$headers = 'From: '.$email.'\r\n'.
	 
	'Reply-To: '.$email.'\r\n' .
	 
	'X-Mailer: PHP/' . phpversion();
}

$mail = @mail($email_to, $subject, $message, $headers);  
if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}
?>