<?php 
session_start();
include "function/function.php";
include "connect/connection.php";
global $connect;
$users = new users;

if (isset($_POST['login'])) {
	# code...
	$user = $_POST['username'];
	$password = $_POST['password'];

	if ($users->getdata($user,$password)) {
		if ($user=="admin") {
			$stmt2 = $connect->prepare("select * from admin where username = :username");
			$stmt2->bindValue(':username',$user);
			$stmt2->execute();
			$account2 = $stmt2->fetch(PDO::FETCH_OBJ);
			header("Location: admin/index.html");
			// echo "success";
			# code...
		}
		else{
			$stmt2 = $connect->prepare("select * from users where username = :username");
			$stmt2->bindValue(':username',$user);
			$stmt2->execute();
			$account2 = $stmt2->fetch(PDO::FETCH_OBJ);
			// $username = $_SESSION['login'];
			echo "<script>window.open('index.php','_self');alert('succesfuly login')</script>";
		}
		# code...
	}
	else{
		echo "error";
	}
}

 ?>