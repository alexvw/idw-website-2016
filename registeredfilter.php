<?php

//this page acts as a gatekeeper for resource downloads

//check if our cookie exists

error_reporting(E_ALL);
ini_set('display_errors', 'On');

//constants
$cookie_name = "IDWIsRegistered";
$base_url = "https://s3.amazonaws.com/docs.iddw/";


if(
		empty($_GET['redir'])
		)
{
	$result_json = array('status' => 'fail', 'reason' => 'insufficient parameters');
	echo json_encode($result_json);
	return false;
}

$redir = $_GET['redir'];

//check to see if cookie is set
if(!isset($_COOKIE[$cookie_name])) {
	//if not
		//redirect to registration form
	header('Location: '.'/resources_template.php?redir='.$redir);
	exit;
	
	//echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
	//if so
		//notify of download
		
		//redirect to content
	//echo "Cookie '" . $cookie_name . "' is set!<br>";
	//echo "Value is: " . urldecode($_COOKIE[$cookie_name]);
	?>
	<script type="text/javascript">
		var sendData = {
			message:"test download message",
			//email:"sales@iddataweb.com",
			email:"sales@iddataweb.com",
			subject:"User downloaded file test"
			}
		$.ajax({
			  type: "POST",
			  url: "/bin/notify.php",
			  data: sendData,
			  success: null,
			  dataType: "json"
			});
	</script>
	<?php
	// Redirect
		header('Location: '.$base_url.$redir);
		exit;
	
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
