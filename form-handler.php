<?php

// define variables and set to empty values
$fname_error = $lname_error = $email_error = "";
$fname = $lname = $email = $phone = $message = $url = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["fname"])){
		$fname_error = "First Name is required";
	} else {
		$fname = test_input($_POST["fname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fname_error = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["lname"])){
		$lname_error = "Last Name is required";
	} else {
		$lname = test_input($_POST["lname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lname_error = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])){
		$email_error = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email format";
		}
	}

	if (empty($_POST["message"])){
		$message = "";
	} else {
		$message = test_input($_POST["message"]);
		
	}

	if ($fname_error == '' and $lname_error == '' and $email_error == ''){
		$message_body = "First Name: $fname.\n".
						"Last Name: $lname.\n".
						"User Email: $email.\n".
						"User Email: $reason.\n".
						"User Message: $message.\n";
		/*$message_body = '';
		unset($_POST as $key => $value){
			$message_body .= "$key: $value\n";
		}*/

		$to = 'wilton.mcnair@gmail.com';
		$subject = 'Contact Form Submit';
		if (mail($to, $subject, $message_body)){
			$success = "Message sent, thank you for contacting us!";
			$fname = $lname = $email = $reason = $message = '';
		}
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>