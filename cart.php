	<?php 
	session_start();
	include "connect/connection.php";
	include "class_ip.php";
	global $connect;

	$IpDetails = new GetIp;
	$IpAdd = $IpDetails->GetIpAdd();

	if (isset($_POST['cart'])) {
		$ProID = $_POST['proid'];
		$ip = $IpAdd;

		$check_cart = $connect->prepare("SELECT * FROM cart where pro_id = '$ProID'");
		$check_cart->execute();
		$row_check = $check_cart->rowCount();

		if ($row_check==1) {
			# code...
			echo "<script>window.open('index.php','_self');alert('this product is already in cart');</script>";
		}else{
			$add_cart = $connect->prepare("INSERT INTO `cart` (`pro_id`, `qty`, `ip_add`) VALUES ('$ProID', '1', '$ip')
	");
		if ($add_cart->execute()) {
			# code...
			echo "<script>window.open('index.php','_self');alert('product add to cart');</script>";
		}else{
			echo "error";
		}

		}


		# code...
	}
	 ?>	