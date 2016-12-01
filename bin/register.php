<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

//on submit form handler:
//take in name, company, title, email, phone from POST
//send mail via aws ses
//set cookie with name, email info

$cookie_name = "hasShared";

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
	empty($_POST['n'])  		||
	empty($_POST['o']) 		||
	empty($_POST['t'])		||
	empty($_POST['p']) 		||
	empty($_POST['e'])		||
	empty($_POST['redir'])
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
$organization = $_POST['organization'];
$title = $_POST['title'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];

/*
if(empty($_POST['message'])){
$message = "";
}else $message = $_POST['message'];
*/

echo "<br>".$name . ", " . $phone . ", " . $email_address .", ".'admin@iddataweb.com';
    
    echo "<br>".'Preparing Environment...';
    
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
    echo "Name: ".$name."<br>Org: ".$organization."<br>Title: ".$title."<br>Phone: ".$phone;
	
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
													'Data' => "Name: ".$name."<br>Org: ".$organization."<br>Title: ".$title."<br>Phone: ".$phone // REQUIRED
													],
												'Text' => [
													'Data' => "Name: ".$name."<br>Org: ".$organization."<br>Title: ".$title."<br>Phone: ".$phone // REQUIRED
													],
												],
											'Subject' => [ // REQUIRED
												//'Charset' => '<string>',
												'Data' => 'ID DataWeb Registration Confirmation' // REQUIRED
												],
										],
									'ReplyToAddresses' => ['admin@iddataweb.com'],
									//'ReturnPath' => '<string>',
									//'ReturnPathArn' => '<string>',
									'Source' => 'admin@iddataweb.com', // REQUIRED
									//'SourceArn' => '<string>',
									]);
						
    echo "<br>".'Sent. Setting Cookie...';
	
	$cookie_value = urlencode($name . " / " . $email_address);
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day, so two months //TODO: PUT back to 60 days
	
	echo "<br>".'Cookie Set';
	
	
?>

window.location.replace("<?php echo $redir; ?>");
