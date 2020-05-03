<?php
if (isset($_POST['send'])){
	$to = 'james.tietcheu39@gmail.com'; 
	$subject='Offre pour un Client Potentiel';
	$message= 'Nom' .$_POST['name']."\r\n\r\n";
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ($email){
		$success = mail($to, $subject, $message, $headers);
		$headers .="\r\nReply-To: $email";
	}
	$message= 'Email' .$_POST['email']."\r\n\r\n";
	$message= 'Message' .$_POST['message'];
	$headers = "From: webmaster@example.com\r\n";
	$headers .= 'content-Type: text/plain; charset=utf-8';
	$success = mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE>
<html>
	<body>
	<?php if (isset($success) && $success) { ?>
	<h1>Thank You</h1>
	Your Message has been sent.
	<?php } else { ?>
	<h1>Oops!</h1>
	Sorry, there was a problem sending your message.
	<?php } ?>
	</body>
</html>
	