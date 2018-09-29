<?php 
session_start();
include "connect/connection.php";
global $connect;

if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['uname'];
	$password = $_POST['pword'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$gender = $_POST['gender'];
	$birthday = $_POST['bday'];
	$address = $_POST['address'];

	$query = $connect->prepare("INSERT INTO `users` (`id`, `username`, `password`, `Fname`, `Lname`, `Gender`, `Bday`, `Address`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$gender', '$birthday', '$address')");
	if ($query->execute()) {
		echo "<script>window.open('index.php'.'_self');alert('you are succesfully login')</script>";
	}
	else {
		echo "error";
	}
}




 ?>