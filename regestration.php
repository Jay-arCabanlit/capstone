<?php 
session_start();
include "connect/connection.php";
global $connect;

if (isset($_POST['submit'])) {
	# code...
	echo "test2";
	$username = $_POST['uname'];
	$password = $_POST['pword'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$gender = $_POST['gender'];
	$birthday = $_POST['bday'];
	$address = $_POST['address'];

	$query = $connect->prepare("INSERT INTO `users` (`id`, `username`, `password`, `Fname`, `Lname`, `Gender`, `Bday`, `Address`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$gender', '$birthday', '$address')");
	if ($query->execute()) {
		echo "success";
	}
	else {
		echo "error";
	}
}




 ?>