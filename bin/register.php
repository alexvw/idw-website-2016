<?php

//this page acts as a gatekeeper for resource downloads

//check if our cookie exists

error_reporting(E_ALL);
ini_set('display_errors', 'On');

//constants
$cookie_name = "IDWIsRegistered";
$base_url = "https://s3.amazonaws.com/docs.iddw/";

//check to see if cookie is set
if(!isset($_COOKIE[$cookie_name])) {
	//if not
		//display registration form
		?>
		<!-- redirect to page where user can enter their registration info and get cookie -->
		
		<!-- when user submits information, on success, redirect to content  -->
		<?php
	
	
	
	echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
	//if so
		//notify of download
		
		//redirect to content
	echo "Cookie '" . $cookie_name . "' is set!<br>";
	echo "Value is: " . urldecode($_COOKIE[$cookie_name]);
}
	
	
//$cookie_value = urlencode('Alex Vander Woude / alex.vander.woude@gmail.com');
//setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/"); // 86400 = 1 day, so two months

/*if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . urldecode($_COOKIE[$cookie_name]);
}*/

// check if fields passed are empty
/* 
	$cookie_value = urlencode($name . " / " . $email_address);
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day, so two months //TODO: PUT back to 60 days
	
	 */
?>

<!-- window.location.replace("<?php echo $redir; ?>"); -->
