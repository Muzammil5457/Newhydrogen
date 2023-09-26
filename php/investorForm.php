<?php
if (!isset($_SESSION)) session_start();
if (!$_POST) exit;
include dirname(__FILE__) . '/settings/settings.php';
require 'phpmailertesting/PHPMailer/class.phpmailer.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$guestname = strip_tags(trim($_POST["name"]));
	$firstname = strip_tags(trim($_POST["fname"]));
	$lastname = strip_tags(trim($_POST["lname"]));
	$emailaddress = strip_tags(trim($_POST["email"]));
	$subject = strip_tags(trim($_POST["subject"]));
	$comment = strip_tags(trim($_POST["message"]));



	$google_recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_secret_key = "6LeWVeAnAAAAAFueSyTW-Eo4L7lvGmTffwoLp3f-";
	$set_recaptcha_response = $_POST['recaptcha_response'];

	$get_recaptcha_response = file_get_contents($google_recaptcha_url . '?secret=' . $recaptcha_secret_key . '&response=' . $set_recaptcha_response);

	$get_recaptcha_response = json_decode($get_recaptcha_response);

	if ($get_recaptcha_response->success == true && $get_recaptcha_response->score >= 0.5 && $get_recaptcha_response->action == "submit") {

		if ($errors) {
			//Output errors in a list
			$errortext = "";
			foreach ($errors as $error) {
				$errortext .= '<li>' . $error . "</li>";
			}

			echo '<div class="alert notification alert-error">Error:<br><ul>' . $errortext . '</ul></div>';
		} else {
			$mail = new PHPMailer;
			$mail->CharSet = "UTF-8";
			$mail->AddReplyTo($emailaddress, $firstname);
			$mail->addAddress('info@newhydrogen.com');
			// $mail->Subject  = $guestname + '';
			$mail->Subject = $firstname . $lastname;
			$mail->IsHTML(true);
			$mail->Body    = '<html>

		 
		 <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			
			     
            	 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">First Name:</span> ' . $firstname . '</p>
            	 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Last Name:</span> ' . $lastname . '</p>
				 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Email:</span> ' . $emailaddress . '</p>
				 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Subject:</span> ' . $subject . '</p>
			 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Message:</span> ' . $comment . ' </p>			
			
							 
				
			 
		 </body>
		 </html>';
			$mail->send();
			if ($redirectForm == true) {
				echo '<script>setTimeout(function () { window.location.replace("' . $redirectForm_url . '") }, 1000); </script>';
			}
		}
	} else {
		echo "Something went wrong. Please try again after sometime";
	}
}
