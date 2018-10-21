<?php 
session_start();
// Required if your environment does not handle autoloading
require __DIR__ . '/../vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\ Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC418da46149b758eb8c6672a8220e74d5';
$token = '2520d19d4c22e532585da4b5db3b34e2';
$client = new Client($sid, $token);

$verifiedNum = ['639507550261', '639074239571', '639505402812','639381739787','639974136133','639082450555']; 

if(isset($_POST['sms'])) {
	$num = $_POST['number'];
	$msg = $_POST['message'];
	$error = 0;

	//number validation
	if(strlen($num) != 12) {
		$m = '&message="Length Invalid!"';
		$error++;
	}
	else if(!is_numeric($num)) {
		$m = '&message="Invalid Input!"';
		$error++;
	}
	//must have a msg or twilio will throw an exception
	if(strlen($msg) == 0){
		$m = '&message="No message to send!"';
		$error++;
	}
	//use verfied number for free sending
	if(!in_array($num, $verifiedNum)) {
		$m = '&message="Number not verified in twilio, pls use verified numbers!"';
		$error++;
	}

	//if there is an error then redirect back and die here
	if($error > 0) {
		$url = $_SERVER['HTTP_REFERER'].'?status=error'.$m;
		header("Location: {$url}");
		die();
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
}
// else {
// 	(isset($_SERVER['HTTP_REFERER']))? $url = $_SERVER['HTTP_REFERER'].'?status=unauthorized' : $url = '../send.php?status=unauthorized!';
// 	header("Location: {$url}");
// }

	if(isset($_POST['submit'])) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION['lastname'] = $_POST['lastname'];
	$_SESSION['bday'] = $_POST['bday'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['govid'] = $_POST['govid'];
	$_SESSION['idnumber'] = $_POST['idnumber'];
	$_SESSION['img'] = $_FILES['img'];
	$_SESSION['phonenumber'] = $_POST['phonenumber'];
	$_SESSION['otp'] = mt_rand(10000,99999);
	$num = $_SESSION['phonenumber'];
	$otp = $_SESSION['otp'];
	$msg = "Hello" . $_SESSION['username'] . "This your OTP:" . $otp;
	$error = 0;

	//number validation
	if(strlen($num) != 12) {
		$m = '&message="Length Invalid!"';
		$error++;
	}
	else if(!is_numeric($num)) {
		$m = '&message="Invalid Input!"';
		$error++;
	}
	//must have a msg or twilio will throw an exception
	if(strlen($msg) == 0){
		$m = '&message="No message to send!"';
		$error++;
	}
	//use verfied number for free sending
	if(!in_array($num, $verifiedNum)) {
		$m = '&message="Number not verified in twilio, pls use verified numbers!"';
		$error++;
	}

	//if there is an error then redirect back and die here
	if($error > 0) {
		$url = $_SERVER['HTTP_REFERER'].'?status=error'.$m;
		header("Location: {$url}");
		die();
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

	// $url = $_SERVER['HTTP_REFERER'].'?status=success';
	header("Location: sms1.php");
}
else {
	(isset($_SERVER['HTTP_REFERER']))? $url = $_SERVER['HTTP_REFERER'].'?status=unauthorized' : $url = '../send.php?status=error!';
	header("Location: {$url}");
}




?>