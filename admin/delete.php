<?php 
session_start();
include "../connect/connection.php";
global $connect;

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$stmt = $connect->prepare("DELETE FROM main_cat WHERE cat_id = '$id'");
	if ($stmt->execute()) {
		echo "<script>window.open('main_category.php','_self');alert('Category Successfully delete');</script>";
	}else{
		echo "ERROR";
	}
	
}

if (isset($_GET['subcatid'])) {
	$id = $_GET['subcatid'];

	$stmt = $connect->prepare("DELETE FROM sub_cat WHERE sub_cat_id = '$id'");

	if ($stmt->execute()) {
		echo "<script>window.open('sub_category.php','_self');alert('Subcategory Successfully delete');</script>";
		# code...
	}else{
		echo "ERROR";
	}
}

if (isset($_GET['productid'])) {
	$id = $_GET['productid'];

	$stmt = $connect->prepare("DELETE FROM products WHERE pro_id = '$id'");
	if ($stmt->execute()) {
		echo "<script>window.open('product_list.php','_self');alert('Product Successfully delete');</script>";
		# code...
	}else{
		echo "ERROR";
	}

	# code...
}

 ?>