<?php 
session_start();
include "connect/connection.php";

		if (isset($_POST['up_qty'])) {
		$Quantity = $_POST['qty'];

		foreach ($Quantity as $key => $value) {
									# code...
		$update_qty = $connect->prepare("UPDATE cart set qty='$value' where cart_id = '$key'");
		if ($update_qty->execute()) 
		{
		echo "<script>windows.open('checkout.php','_self');alert('update success!')</script>";
										# code...
		}else{
		echo "<script>alert('error')</script>";
			}
		}
								# code...
	}

 ?>