<?php 
session_start();
include "../connect/connection.php";

global $connect;



if (isset($_POST['add_review'])) {
	// $reviewId = $_POST['reviewid'];
	$pro_id = $_POST['proid'];
	$UsersName = $_POST['username'];
	$Email = $_POST['email'];
	$Review = $_POST['review'];
	$ratings = $_POST['ratings'];
	# code...

	$add_review = $connect->prepare("INSERT INTO `product_review` (`review_id`, `pro_id`, `users_name`, `users_email`, `review`, `review_added_date`, `rating`) VALUES (NULL, '$pro_id', '$UsersName', '$Email', '$Review', NOW(), '$ratings')");

	if ($add_review->execute()) {
		echo "<script>window.open('product-page.php?prodetails=".$pro_id."','_self');alert('review submit successfully');</script>";
	}else{
		echo "ERROR";
	}
}


 ?>