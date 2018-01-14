<?php

	// if (is_ajax() == false) {

	// }	

// if (isset($_POST["action"]) && !empty($_POST["action"])) { 

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

sendConfirmationUser($email, $email);

$successMessage = false;
if (sendCopyToAki($email, $message)) {
	$successMessage = true;
}

$return["sent"] = json_encode($successMessage);
echo json_encode($return);


function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function sendConfirmationUser($destEmail, $name) {

	$subject = "Thanks for contacting";

	if ($name !== '') {
		$name = " " . $name;
	}

	$message = "Thanks" . $name . " for contacting us today! Aki will get back at you as soon as possible. If you need to make a reservation, please book online on bookeo: <web address>";

	// Compose a simple HTML email message
	// $message = '<html><body>';
	// $message .= '<h1 style="color:#f40;">Hi!</h1>';
	// $message .= '<p style="color:#080;font-size:18px;">Thanks for contacting Us</p>';
	// $message .= '</body></html>';

	return sendEmail($destEmail, $subject, $message);
}

function sendCopyToAki($destEmail, $messageWritten) {

	$destEmail = "arnaud33200@gmail.com";
	$subject = "Website Contact";

	$message = "you received a message a new message on your website: " . $messageWritten;

	// Compose a simple HTML email message
	// $message = '<html><body>';
	// $message .= '<h1 style="color:#f40;">Hi!</h1>';
	// $message .= '<p style="color:#080;font-size:18px;">Thanks for contacting Us</p>';
	// $message .= '</body></html>';

	return sendEmail($destEmail, $subject, $message);
}

function sendEmail($destEmail, $subject, $message) {
	$to = $destEmail;
	$from = 'contact@aki-imamura.com';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Create email headers
	$headers .= 'From: ' . $from . "\r\n" . 'Reply-To: '. $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

	

	// Sending email
	return mail($to, $subject, $message, $headers);
}



?>