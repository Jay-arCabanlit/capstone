<html>

	<form action="/function/sms.php" method="POST">
		<input type="text" name="message" required>
		<button type="submit" name="sms">Send</button>
	</form>

	<?php 

	if(isset($_GET['status'])) {
		echo '<h1>'.$_GET['status'].'</h1>';
	} 

	?>

</html>
