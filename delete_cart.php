	<?php 
	session_start();
	include "connect/connection.php";
	global $connect;

	if (isset($_GET['delete_id'])) {
		$id = $_GET['delete_id'];

		$stmt = $connect->prepare("DELETE FROM cart WHERE pro_id = '$id'");
		if ($stmt->execute()) {
			echo "<script>window.open('checkout.php','_self');alert('product is deleted');</script>";
		}else{
			echo "ERROR";
		}
		
	}
	 ?>