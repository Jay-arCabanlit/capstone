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
		$birthday = $_POST['bday'];
		$address = $_POST['address'];
		$Govtypeid = $_POST['govtypeid'];
		$GovIdNumber = $_POST['idnumber'];


		$userImg = $_FILES['userImg'] ['name'];
				$userImg_tmp = $_FILES['userImg'] ['tmp_name'];

		move_uploaded_file($userImg_tmp,"users_img/$userImg");

		$phone = $_POST['phonenumber'];

		$query = $connect->prepare("INSERT INTO `users` (`users_id`, `username`, `password`, `Fname`, `Lname`, `Bday`, `Address`, `id_type`, `id_number`, `users_img`, `phone`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$birthday', '$address', '$Govtypeid', '$GovIdNumber', '$userImg', '$phone')");

		// $query = $connect->prepare("INSERT INTO `users` (`users_id`, `username`, `password`, `Fname`, `Lname`, `Bday`, `Address`, `id_type`, `id_number`, `users_img`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$birthday', '$address', '$Govtypeid', '$GovIdNumber', '$userImg')");
		
		if ($query->execute()) {
			echo "<script>window.open('index.php','_self');alert('Good job!', 'You clicked the button', 'success');</script>";
		}
		else {
			echo "error";
		}
	}




	 ?>