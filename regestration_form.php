<?php 
session_start();
include "connect/connection.php";
global $connect;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="assets/css/reg_css.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="assets/js/reg_js.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

<div class="container">
	<div></div>
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="regestration.php" method="post" enctype="multipart/form-data">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="uname" id="first_name" class="form-control input-lg" placeholder="Username" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="pword" id="last_name" class="form-control input-lg" placeholder="Password" tabindex="2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="fname" id="display_name" class="form-control input-lg" placeholder="Firstname" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="text" name="lname" id="email" class="form-control input-lg" placeholder="Lastname" tabindex="4" required>
			</div>
				<div class="form-group">
						<input type="date" name="bday" class="form-control input-lg" placeholder="Birtdate" tabindex="6" required>
					</div>
				<div class="form-group">
				<input type="text" name="address"  class="form-control input-lg" placeholder="Address" tabindex="4" required>
			</div>
						<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select type="text" name="govtypeid" id="password" class="form-control input-lg" placeholder="" tabindex="5" required>
							<option value="Passport">Passport</option>
							<option value="Driver's License">Driver's License</option>
							<option value="SSS ID">SSS ID</option>
							<option value="Phil Health">Phil Health</option>
							<option value="Tin ID">Tin ID</option>
							<option value="Voter's ID">Voter's ID</option>
							<option value="Senior Citizen ID">Senior Citizen ID</option>
							<option value="Business Permit">Business Permit</option>
						</select> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="idnumber" id="password_confirmation" class="form-control input-lg" placeholder="ID Number" tabindex="6" required>
						<br>
						<label>Upload your valid Id here!</label>
						   <input class="form-control" name="userImg" type="file" placeholder="Select product image5">
						<br>	
				</div>
				<br>	

			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="" name="" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
<h1>TEST</h1>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

</body>
</html>