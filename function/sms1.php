<?php 
include '../connect/connection.php';
session_start();

global $connect;

if (isset($_POST['otpsubmit'])) {
	$otp = $_POST['otp'];
	if ($_SESSION['otp'] == $otp) {
		# code...
		$uname = $_SESSION['username'];
		$pword = $_SESSION['password'];
		$fname = $_SESSION['firstname'];
		$lname = $_SESSION['lastname'];
		$bday = $_SESSION['bday'];
		$address = $_SESSION['address'];
		$govid = $_SESSION['govid'];
		$idnumber = $_SESSION['idnumber'];
		// $img = $_SESSION['img'];
		
		 		$Img = $_SESSION['img'] ['name'];
				$Img_tmp = $_SESSION['img'] ['tmp_name'];

		move_uploaded_file($Img_tmp,"../users_img/$Img");

		$pnumber = $_SESSION['phonenumber'];

		$query = $connect->prepare("INSERT INTO `users` (`users_id`, `username`, `password`, `Fname`, `Lname`, `Bday`, `Address`, `id_type`, `id_number`, `users_img`, `phone`) VALUES (NULL, '$uname', '$pword', '$fname', '$lname', '$bday', '$address', '$govid', '$idnumber', '$Img', '$pnumber')");
		// var_dump($query);
		// die();

		if ($query->execute()) {
			# code...
			echo "<script>window.open('../index.php','_self');alert('Good job!', 'You clicked the button', 'success');</script>";
		}else{
			echo "erorr";
		}

	}else{
		echo "<div class='alert alert-danger' role='alert'>
  <strong>Oh snap!</strong> You have enter wrong verification code.
</div>";
	}
	# code...
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/verify.css">
	<title></title>
</head>
<body>
<!-- 	<div class="center col-md-3 col-md-offset-3">
		<form action="sms1.php" method="POST">
	<label>*PLEASE TYPE YOUR VERIFICATION CODE HERE*</label>
	<input type="text" name="otp" class="form-control form-control-lg">
	<br>	
	<button type="submit" class="btn btn-primary" name="otpsubmit">Submit</button></form>
	</div> -->

	<div class="container">
  <!-- Instructions -->
  <div class="row">
    <div class="alert alert-success col-md-12" role="alert" id="notes">
      <h4>NOTES</h4>
      <ul>
        <li>You will recieve a verification code on your phone after you registered. Enter that code below.</li>
<!--         <li>If somehow, you did not recieve the verification email then <a href="#">resend the verification email</a></li> -->
      </ul>
    </div>
  </div>
  <!-- Verification Entry Jumbotron -->
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron text-center">
        <h2>Enter the verification code</h2>
        <form method="post" action="sms1.php" role="form">
          <div class="col-md-9 col-sm-12">
            <div class="form-group form-group-lg">
              <input type="text" class="form-control col-md-6 col-sm-6 col-sm-offset-2" name="otp" required>
              <br><br>
              <input class="btn btn-primary btn-lg col-md-2 col-sm-2" type="submit" value="Verify" name="otpsubmit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>