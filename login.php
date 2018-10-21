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
			header("Location: admin/admin.php");
			// echo "success";
			# code...
		}
		else{
			$stmt2 = $connect->prepare("select * from users where username = :username");
			$stmt2->bindValue(':username',$user);
			$stmt2->execute();
			$account2 = $stmt2->fetch(PDO::FETCH_ASSOC);
			$count = $stmt2->rowCount();
					if($account2['password']==$password){
						$_SESSION['login'] = $account2['users_id'];
						header("Location:user_profile.php");
						
					}else{
						echo "<script>window.open('index.php','_self');alert('Wrong Details');</script>";
					}
			// $username = $_SESSION['login'];

			// $_SESSION['login'] = $account2->users_id;
			// $_SESSION['user_logged_in'] = $account2->username;
						// echo "<script>window.open('index.php','_self');alert('succesfuly login');</script>";

		}
		# code...
	}
	else{
		echo "error";
	}
}

 ?>