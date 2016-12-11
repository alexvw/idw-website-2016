<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

//$cookie_value = urlencode('Alex Vander Woude / alex.vander.woude@gmail.com');
//setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/"); // 86400 = 1 day, so two months

/*if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . urldecode($_COOKIE[$cookie_name]);
}*/

// check if fields passed are empty


// headers for not caching the results
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

// headers to tell that result is JSON
header('Content-type: application/json');

	if(
		empty($_POST['name']) ||
			empty($_POST['email'])||
			empty($_POST['cookiename'])
	)
   {
   	$result_json = array('status' => 'fail', 'reason' => 'insufficient parameters');
   	echo json_encode($result_json);
	return false;
   }
   if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   	$result_json = array('status' => 'fail', 'reason' => 'invalid email');
   	echo json_encode($result_json);
	return false;
   }


	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$cookie_name = $_POST['cookiename'];

	$cookie_value = urlencode($name . " / " . $email_address);
	setcookie($cookie_name, $cookie_value, time()+60*60*24*90, "/"); // 86400 = 1 day, so two months
	
	
    //echo "<br>".'Sent';
	$result_json = array('status' => 'success', 'reason' => 'success');
	echo json_encode($result_json);
	
?>
