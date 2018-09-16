<?php 
session_start();
include "../connect/connection.php";
global $connect;

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$stmt = $connect->prepare("DELETE FROM main_cat WHERE cat_id = '$id'");
	if ($stmt->execute()) {
		echo "<script>success</script>";
	}else{
		echo "<script>ERROR</script>";
	}
	
}

 ?>