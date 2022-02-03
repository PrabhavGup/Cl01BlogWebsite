<?php

    
  
$Name = $_POST['name'];
$Email = $_POST['email']; 
$Message = $_POST['message'];

$to = "info@hermannrodrigues.com";
$body = "";

$body .= "From: ".$Name."\r\n";
$body .= "Email: ".$Email."\r\n";
$body .= "Message: ".$Message."\r\n";



if (mail ($to, $message, $body)) {
		echo '<p>Your message has been sent!</p>';
	} else {
		echo '<p class="error">Something went wrong, try again!</p>'; 
	} 

    
?>
