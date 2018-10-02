<html>

<form action="/function/sms.php" method="POST">


	
	<p style="font-size: 12px; color: red"> Note: Only registered numbers <br>are available for twilio trial!* <br> Number must start with '63'*</p>

	<p>Number: </p>
	<input type="text" name="number" maxlength="12" placeholder="number" required><br>

	<p>Message: </p>
	<textarea name="message" id="" cols="30" rows="10" maxlength="150"></textarea>

	<button type="submit" name="sms">Send</button><br>	


</form>

<?php 

if(isset($_GET['status']) && $_GET['status'] != 'error') {
	echo '<h1>'.$_GET['status'].'</h1>';
} 

if(isset($_GET['status']) && $_GET['status'] == 'error') {
	echo '<h1 style="color:red">'.$_GET['message'].'</h1>';
}

?>

</html>
