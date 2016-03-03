
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<input type="text" id="test-name">
<button id="email-test-button">Test Email Submit</button>
</body>

<script src="/relaunch/js/jquery.js"></script>

<script>
$('#email-test-button').click(function(){
		var contactURL = "http://home.maxconnector.com/bin/submit_contact.php";
		var postdata = {name:'Name',
						phone:'1234567890',
						email:'alex.vander.woude@gmail.com'}
		$.ajax({
        type: "POST",
        url: contactURL,
        data: postdata,
        dataType: "json",
        success: function(data) {
            //check return data. 
        	alert(data);
        }
    });
	});
</script>
</html>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

//require_once "Mail.php";

/*
// check if fields passed are empty
if(
	empty($_POST['name'])  		||
	empty($_POST['phone']) 		||
	empty($_POST['email'])
   )
   {
   echo "Insufficient Parameters";
	return false;
   }
   if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Invalid email";
	return false;
   }


$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];

*/


$name = "Test Name";
$phone = "Test Phone 1334";
$email_address = "alex.vander.woude@gmail.com";


/*
if(empty($_POST['message'])){
$message = "";
}else $message = $_POST['message'];


echo "\n\n".$name . ", " . $phone . ", " . $email_address;

$from = "admin@iddataweb.com";
$to = $email_address;
$subject = "New Reg: ".$name;
$body = "Name: ".$name."\n\nPhone: ".$phone."\n\nEmail:".$email_address."\n\n";
$host = "ssl://email-smtp.us-east-1.amazonaws.com";
$port = "465";
$username = "AKIAJCEWBBHTRGLSWYCQ";
$password = "AuX0LWmMKBx4zWqmPrc73d7xZCznKphhbRsoL56Kazky";
$headers = array ('From' => $from,   'To' => $to,   'Subject' => $subject);
$smtp = Mail::factory('smtp',   array ('host' => $host,     'port' => 
$port,     'auth' => true,     'username' => $username,
     'password' => $password));  $mail = $smtp->send($to, $headers, $body);
	 
if (PEAR::isError($mail)) 
	{   
		echo("<p>" . $mail->getMessage() . "</p>");
	} 
	else {   echo("<p>Message successfully sent!</p>");  }		
?>

<?php
/*
$cookie_name = "hasShared";
$cookie_value = $name;
setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/"); // 86400 = 1 day, so two months
?>

<?php
/*if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}*/
?>

<?php
// Pear Mail Library
require_once "Mail.php";

$from = 'iddw.axn@gmail.com';
$to = 'alex.vander.woude@gmail.com';
$subject = 'TEST';
$body = "Test email message";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'auth' => true,
        'username' => 'iddw.axn@gmail.com',
        'password' => 'iddwaxn123',
		'debug'=>true
    ));
echo 'About to send message...';
$mail = $smtp->send($to, $headers, $body);
echo 'SENT.';

if ((new PEAR)->isError($mail)) {
    echo('Error: <p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

?>