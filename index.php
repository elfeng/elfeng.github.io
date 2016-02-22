<?php
/* submitting the form */

	if (isset($_POST['contact_submit'])) {
    
    // declare variables to extract data 
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = $_POST['message'];
    
    // declare additional variables required to send email 
		$to = 'eleanor52@live.ca'; 
		$subject = "$name sent your a message via your contact form";
		
		$body ="From: $name\n Email: $email\n Message:\n $message";
    
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
    if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body)) {
        $result='<div class="alert alert-success"><h2><span class="glyphicon glyphicon-ok"></span> Message sent!</h2><h3>Thank you for contacting us. Someone will be in touch with you soon.</h3></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Sorry there was a form processing error.</h2> <h3>Please try again later.</h3></div>';
       }
    }
  }

    
//    // send email
//$success = mail($to, $body, $email);
// 
//// redirect to success page
//if ($success){
//   echo "success";
//}else{
//    echo "invalid";
//}
//	}
?>