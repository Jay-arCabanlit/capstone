<?php 
session_start();
include "../connect/connection.php";
global $connect;

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$stmt = $connect->prepare("DELETE FROM main_cat WHERE cat_id = '$id'");
	if ($stmt->execute()) {
		echo "SUCCESS";
	}else{
		echo "ERROR";
	}
	
}

if (isset($_GET['subcatid'])) {
	$id = $_GET['subcatid'];

	$stmt = $connect->prepare("DELETE FROM sub_cat WHERE sub_cat_id = '$id'");

	if ($stmt->execute()) {
		echo "SUCCESS";
		# code...
	}else{
		echo "ERROR";
	}
}

if (isset($_GET['productid'])) {
	$id = $_GET['productid'];

	$stmt = $connect->prepare("DELETE FROM products WHERE pro_id = '$id'");
	if ($stmt->execute()) {
		echo "SUCCESS";
		# code...
	}else{
		echo "ERROR";
	}

	# code...
}

 ?>