<?php 

// Required if your environment does not handle autoloading
require __DIR__ . '/../vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC418da46149b758eb8c6672a8220e74d5';
$token = '2520d19d4c22e532585da4b5db3b34e2';
$client = new Client($sid, $token);

if(isset($_POST['sms'])) {
	$num = $_POST['number'];
	$msg = $_POST['message'];

	//validation
	if(strlen($num) != 14) {
		$url = $_SERVER['HTTP_REFERER'].'?status=error&message="Length Invalid!"';
		header("Location: {$url}");
	}
	else if(!is_numeric($num)) {
		$url = $_SERVER['HTTP_REFERER'].'?status=error&message="Invalid Input!"';
		header("Location: {$url}");
	}

	if(strlen($msg) == 0){
		$url = $_SERVER['HTTP_REFERER'].'?status=error&message="No message to send!"';
		header("Location: {$url}");
	}

	// Use the client to do fun stuff like send text messages!
	$client->messages->create(
	    // the number you'd like to send the message to
	    '+'.$num,
	    array(
	        // A Twilio phone number you purchased at twilio.com/console
	        'from' => '+12193361316',
	        // the body of the text message you'd like to send
	        'body' => $msg
	    )
	);

	$url = $_SERVER['HTTP_REFERER'].'?status=success';
	header("Location: {$url}");
}
else {
	(isset($_SERVER['HTTP_REFERER']))? $url = $_SERVER['HTTP_REFERER'].'?status=unauthorized' : $url = '../send.php?status=unauthorized!';
	header("Location: {$url}");
}


?>