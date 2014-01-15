<?php 

if (isset($_POST['contect_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name = $_POST['contect_name'];
	$contact_email = $_POST['contect_email'];
	$contact_text = $_POST['contect_text'];
	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
		if (strlen($contact_name) > 25 || strlen($contact_email) > 50 || strlen($contact_text) > 100) {
			echo 'Sorry, maxlength for some field has been exceeded.';
		} else {
			$to = 'b_tootoonchi@yahoo.com';
			$subject = 'Contact form submitted';
			$body = $contact_name."\n".$contact_text;
			$headers = 'From: '.$contact_email;
		
			if (mail($to, $subject, $body, $headers)) {
				echo 'Thanks for contacting us. We\'ll be in touch soon.';
			} else {
				echo 'Sorry error occurred. Please try again later.';
			}
		}
	} else {
		echo 'All fields are required!';
	}	
	
} else {
}
?>

<form action="index.php" method="POST">
	Name:<br><input type="text" name="contact_name" maxlength="25"><br><br>
	Email address:<br><input type="text" name="contact_eamil" maxlength="50"><br><br>
	Message:<br><textarea name="contact_text" rows="6" cols="30" maxlength="100"></textarea><br><br>
	<br><input type="submit" value="Send"><br><br>
</form>