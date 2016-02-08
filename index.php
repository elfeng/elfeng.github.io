<?php
/* submitting the form */

	if (isset($_POST["submit"])) {
    
    // declare variables to extract data 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
    
    // declare additional variables required to send email 
		$from = 'Demo Contact Form'; 
		$to = 'eleanor52@live.ca'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
    
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

    // If there are no errors, send the email
//    if (!$errName && !$errEmail && !$errMessage) {
//      if (mail ($to, $subject, $body, $from)) {
//        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
//      } else {
//        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
//      }
//    }
    
    // send email
$success = mail($to, $subject, $body, $email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
	}
?>