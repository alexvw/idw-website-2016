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

	if(
		empty($_POST['message']) ||
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


$message = $_POST['message'];
$email_address = $_POST['email'];

    use Aws\Ses\SesClient;
    require '/usr/iddw/aws-php-sdk/aws-autoloader.php';
    //require 'vendor/autoload.php';
    
echo "<br>".'SDK Ready. Preparing Client...';
    //prepare client
    // Hardcoded credentials.
    $client = new SesClient([
                              'version'     => 'latest',
                              'region'      => 'us-east-1',
                              'credentials' => [
                              'key'    => 'AKIAJY4ZRA6K5U3KFHVQ',
                              'secret' => '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'
                              ]
                              ]);
    echo "<br>".'Client Success, sending mail...';
    //do send mail
    
	
	$result = $client->sendEmail([
									'Destination' => [ // REQUIRED
									'BccAddresses' => ['alex.vander.woude@gmail.com'],
									//'CcAddresses' => ['<string>', ...],
									'ToAddresses' => [$email_address],
									],
									'Message' => [ // REQUIRED
											'Body' => [ // REQUIRED
												'Html' => [
													//'Charset' => 'UTF-8',
													'Data' => $message // REQUIRED
													],
												'Text' => [
													'Data' => $message // REQUIRED
													],
												],
											'Subject' => [ // REQUIRED
												//'Charset' => '<string>',
												'Data' => 'ID DataWeb Notification' // REQUIRED
												],
										],
									'ReplyToAddresses' => ['admin@iddataweb.com'],
									//'ReturnPath' => '<string>',
									//'ReturnPathArn' => '<string>',
									'Source' => 'admin@iddataweb.com', // REQUIRED
									//'SourceArn' => '<string>',
									]);
							 
    echo "<br>".'Sent';
	
?>
