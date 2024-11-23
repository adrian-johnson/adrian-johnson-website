<?php # includes/functions.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function addVisitorToDb() {
	//if (ENVIRONMENT != 'dev') {
		$visitor_info = getVisitorInfo();
	
		$visitor = new SiteVisitor($visitor_info);
		
		//$visitor->displayInfo();
	
		$visitor->add_visitor($visitor_info);
	//}
}

function add_user_login($user_id, $username, $status) {
	$accountObject = new Account();
	
	$now = date("Y-m-d H:i:s");
	$add_login_params = [
		'user_id' => $user_id,
		'username' => $username,
		'ip_address' => $_SERVER['REMOTE_ADDR'],
		'login_date' => $now,
		'status' => $status
	];
	$accountObject->add_user_login($add_login_params);
}

function email_contact_form($email, $name, $subject, $message) {
	$response = send_mail('contact', $email, $name, 'info@adrian-johnson.com', 'Adrian Johnson', $subject, $message);
	
	return $response;
}

function getVisitorInfo() {
	$visit_date = date("Y-m-d H:i:s");
	$visitor_ip = $_SERVER['REMOTE_ADDR'];  // IP address
	$user_agent = $_SERVER['HTTP_USER_AGENT'];  // User agent (browser and OS info)
	$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No referrer'; // Referrinf URL
	$current_page = $_SERVER['PHP_SELF'];       // Current page
	$query_string = $_SERVER['QUERY_STRING'];   // Query string

	// Get the request method (GET, POST, etc.)
	$request_method = $_SERVER['REQUEST_METHOD'];   // Request method (GET, POST, etc.)
	
	$geo_info = '';
	$city = '';
	$country = '';

	// Get geolocation information (Optional: requires external service)
	$geo_data = null;
	try {
		if ($visitor_ip != '::1') {
			$ipinfo_url = "http://ipinfo.io/{$visitor_ip}/json?token=4932222354d4be";
			
			$geo_info = @file_get_contents($ipinfo_url);
			
			if ($geo_info != null) {
				$geo_data = json_decode($geo_info);
				$city = $geo_data->city;
				$country = $geo_data->country;
			}
		}
	} catch (Exception $e) {
		// Error fetching geolocation information
		//$geo_data = (object) [
		//    'city' => 'Unknown',
		//    'country' => 'Unknown'
		//];
	}

	// Create an array with all visitor information
	return [
		'visit_date' => $visit_date,
		'ip_address' => $visitor_ip,
		'user_agent' => $user_agent,
		'referrer' => $referrer,
		'current_page' => $current_page,
		'query_string' => $query_string,
		'request_method' => $request_method,
		'geo_info' => $geo_info,
		'city' => $city,
		'country' => $country,
	];
}

function send_mail($email_type, $sendfrom_email, $sendfrom_name, $sendto_email, $sendto_name, $sendto_subject, $sendto_message) {
	try {
		$response_message = "Could not send email.";
		$response_type = 'danger';
		
		$mail = new \PHPMailer\PHPMailer\PHPMailer();
		
		//Server settings
		$mail->SMTPDebug = 0;                      					//Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'mail.adrian-johnson.com';              //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'info@adrian-johnson.com';              //SMTP username
		$mail->Password   = 'Ps8#El3ctr!C';                         //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		
		//Recipients
		$mail->setFrom($sendfrom_email, $sendfrom_name);
		//$mail->addAddress('info@adrian-johnson.com', 'Adrian Johnson');     //Add a recipient
		$mail->addAddress($sendto_email, $sendto_name);     //Add a recipient
		$mail->addReplyTo($sendto_email, $sendto_name);
		
		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $sendto_subject;
		$mail->Body    = $sendto_message;
		
		if (!$mail->send()) {
			$response_message = $mail->ErrorInfo;
			$response_type = 'danger';
		} else {
			switch ($email_type) {
				case 'forgot_password':
					$response_message = "<p>If your email is found on the system you will have been sent instructions to reset your password.</p>";
					break;
				case 'reset_password_confirmation':
					$response_message = "<p>Your password has been updated.</p>";
					break;
				case 'contact':
				default:
					$response_message = "<p>Thanks for your email - I'll read it as soon as I can.</p>";
					break;
			}
			
			$response_type = 'success';
		}
		
	} catch (Exception $e) {
		$response_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		$response_type = 'danger';
	}
	
	return [
		'response_type' => $response_type,
		'response_message' => $response_message,
	];
}

function valid_email($email) {
	if (is_array($email) || is_numeric($email) || is_bool($email) || is_float($email) || is_file($email) || is_dir($email) || is_int($email))
		return false;
	else
	{
		$email = trim(strtolower($email));
		if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) return $email;
		else {
			$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
			return (preg_match($pattern, $email) === 1) ? $email : false;
		}
	}
}
?>