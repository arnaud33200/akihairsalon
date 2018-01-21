<?php

	// if (is_ajax() == false) {

	// }	

// if (isset($_POST["action"]) && !empty($_POST["action"])) { 

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

sendConfirmationUser($email);

$successMessage = false;
if (sendCopyToAki($name, $email, $message)) {
	$successMessage = true;
}

$return["sent"] = json_encode($successMessage);
echo json_encode($return);


function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function sendConfirmationUser($destEmail) {

	$subject = "Thanks for contacting";

	if ($name !== '') {
		$name = " " . $name;
	}

	// $message = "Thanks" . $name . " for contacting us today! Aki will get back at you as soon as possible. If you need to make a reservation, please book online on bookeo: <web address>";

	$message = getConfirmationEmailBody();

	return sendEmail($destEmail, $subject, $message);
}

function sendCopyToAki($name, $contactEmail, $messageWritten) {

	$destEmail = "akiimamura1021@gmail.com";
	$subject = "New Message Aki Website";

	$message = getMessageToFowardToOwner($name, $contactEmail, $messageWritten);

	// Compose a simple HTML email message
	// $message = '<html><body>';
	// $message .= '<h1 style="color:#f40;">Hi!</h1>';
	// $message .= '<p style="color:#080;font-size:18px;">Thanks for contacting Us</p>';
	// $message .= '</body></html>';

	return sendEmail($destEmail, $subject, $message);
}

function sendEmail($destEmail, $subject, $message) {
	$to = $destEmail;
	$from = 'aki imamura';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Create email headers
	$headers .= 'From: ' . $from . "\r\n" . 'Reply-To: '. $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

	// Sending email
	return mail($to, $subject, $message, $headers);
}

function getConfirmationEmailBody() {
	$message = "<html style=\"-webkit-box-sizing: border-box;box-sizing: border-box;font-family: &quot;Roboto&quot;, sans-serif;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 1.5;font-weight: normal;color: rgba(0,0,0,0.87);\"><head style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"> <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"> <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"></script> </head><body style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0;\"><style style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">footer-dev { display: block; text-align: right;}footer-left { display: block; text-align: left;}</style><div class=\"container\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0 auto;max-width: 1280px;width: 90%;\"><h5 style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: 400;line-height: 110%;font-size: 1.64rem;margin: .82rem 0 .656rem 0;\">Thanks for contacting!</h5><blockquote style=\"border-left: 5px solid #eeff41;-webkit-box-sizing: inherit;box-sizing: inherit;margin: 20px 0;padding-left: 1.5rem;\"> <p style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">Your message has been sent, Aki will get back at you as soon as possible.</p><p style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">If you desire to make an appointment, please <a href=\"https://bookeo.com/akiimamura\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;background-color: transparent;color: #039be5;text-decoration: none;-webkit-tap-highlight-color: transparent;\">Book Online</a></p><p style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">Visit the website if you want to know about the prices, the opening hours or the location.</p><a class=\"waves-effect waves-light btn grey-text text-darken-3 lime accent-2\" href=\"http://aki-imamura.com/\" target=\"_blank\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;background-color: #eeff41 !important;color: #424242 !important;text-decoration: none;-webkit-tap-highlight-color: transparent;-webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);border: none;border-radius: 2px;display: inline-block;height: 36px;line-height: 36px;padding: 0 2rem;text-transform: uppercase;vertical-align: middle;font-size: 1rem;outline: 0;text-align: center;letter-spacing: .5px;-webkit-transition: .3s ease-out;transition: .3s ease-out;cursor: pointer;position: relative;overflow: hidden;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;z-index: 1;\">Website</a> </blockquote> <div class=\"col s12\" style=\"opacity: 0.3;-webkit-box-sizing: inherit;box-sizing: inherit;\"><div id=\"footer-section\" class=\"divider\" style=\"margin: 40px -10px 10px -10px;height: 2px;background-color: #384750;-webkit-box-sizing: inherit;box-sizing: inherit;overflow: hidden;\"></div><div class=\"row\" style=\"margin-bottom: 0px;-webkit-box-sizing: inherit;box-sizing: inherit;margin-left: -.75rem;margin-right: -.75rem;\"><div class=\"col s6\" style=\"-webkit-box-sizing: border-box;box-sizing: border-box;float: left;padding: 0 .75rem;min-height: 1px;width: 50%;margin-left: auto;left: auto;right: auto;\"><footer-left style=\"-webkit-box-sizing: inherit;box-sizing: inherit;display: block;text-align: left;\">Aki Imamura Hairstylist</footer-left></br><footer-left style=\"-webkit-box-sizing: inherit;box-sizing: inherit;display: block;text-align: left;\">email: akiimamura1021@gmail.com</footer-left></br><footer-left style=\"-webkit-box-sizing: inherit;box-sizing: inherit;display: block;text-align: left;\">website: http://aki-imamura.com/</footer-left></div><div class=\"col s6\" style=\"-webkit-box-sizing: border-box;box-sizing: border-box;float: left;padding: 0 .75rem;min-height: 1px;width: 50%;margin-left: auto;left: auto;right: auto;\"><!-- put social network link later --><footer-dev style=\"-webkit-box-sizing: inherit;box-sizing: inherit;display: block;text-align: right;\"></footer-dev></div></div></div> </div></body></html>";
	return $message;
}

function getMessageToFowardToOwner($name, $email, $contactMessage) {
	$fromInfo = "";
	if ($name !== "") {
		$fromInfo = "<p style=\"margin-bottom: -10px;-webkit-box-sizing: inherit;box-sizing: inherit;\"><b style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: bold;\">FROM</b>: " . $name . "</p>";
	}
	$emailInfo = "<p style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"><b style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: bold;\">E-MAIL</b>: " . $email . "</p>";

	$message = "<html style=\"-webkit-box-sizing: border-box;box-sizing: border-box;font-family: &quot;Roboto&quot;, sans-serif;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 1.5;font-weight: normal;color: rgba(0,0,0,0.87);\"><head style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"> <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"> <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"></script> <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\"> </head><body style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0;\"><style style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">footer-dev { display: block; text-align: right;}footer-left { display: block; text-align: left;}</style><div class=\"container\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;margin: 0 auto;max-width: 1280px;width: 90%;\"><h5 style=\"-webkit-box-sizing: inherit;box-sizing: inherit;font-weight: 400;line-height: 110%;font-size: 1.64rem;margin: .82rem 0 .656rem 0;\">New Message</h5><blockquote style=\"border-left: 5px solid #eeff41;-webkit-box-sizing: inherit;box-sizing: inherit;margin: 20px 0;padding-left: 1.5rem;\">" . $fromInfo . $emailInfo . "<div style=\"margin-left: 20px;padding: 10px;background: #f9f9f9;-webkit-box-sizing: inherit;box-sizing: inherit;\">" . $contactMessage . "</div><p style=\"-webkit-box-sizing: inherit;box-sizing: inherit;\">Click on the button below to send a message</p><a class=\"waves-effect waves-light btn grey-text text-darken-3 lime accent-2\" href=\"mailto:" . $email . "\" target=\"_blank\" style=\"-webkit-box-sizing: inherit;box-sizing: inherit;background-color: #eeff41 !important;color: #424242 !important;text-decoration: none;-webkit-tap-highlight-color: transparent;-webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);border: none;border-radius: 2px;display: inline-block;height: 36px;line-height: 36px;padding: 0 2rem;text-transform: uppercase;vertical-align: middle;font-size: 1rem;outline: 0;text-align: center;letter-spacing: .5px;-webkit-transition: .3s ease-out;transition: .3s ease-out;cursor: pointer;position: relative;overflow: hidden;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;z-index: 1;\">Answer</a> </blockquote> </div></body></html>";
	return $message;
}


?>