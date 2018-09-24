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

	$add_cart = $connect->prepare("INSERT INTO `cart` (`pro_id`, `qty`, `ip_add`) VALUES ('$ProID', '1', '$ip')
");
	if ($add_cart->execute()) {
		# code...
		echo "success";
	}else{
		echo "error";
	}
	# code...
}
 ?>	