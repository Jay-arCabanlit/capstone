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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/reg.css">
	</head>
	<body>

	<div class="container">
		<div></div>
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" action="function/sms.php" method="post" enctype="multipart/form-data">
				<h2>Please Sign Up <small>It's free and always will be.</small></h2>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">

	                        <input type="text" name="username" id="first_name" class="form-control input-lg" placeholder="Username" tabindex="1" required>

						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">

							<input type="password" name="password" id="last_name" class="form-control input-lg" placeholder="Password" tabindex="2" required>
						</div>
					</div>
				</div>
				<div class="form-group">

					<input type="text" name="firstname" id="display_name" class="form-control input-lg" placeholder="Firstname" tabindex="3" required>
				</div>
				<div class="form-group">
					<input type="text" name="lastname" id="email" class="form-control input-lg" placeholder="Lastname" tabindex="4" required>

				</div>
					<div class="form-group">
						 <div class="formbox">
          <div class="bday">Birthday</div>
        </div>
        <div class="formbox">
          <span data-type="selectors">
            <span>
              <select title="Month" class="selectbody" name="bday"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
              <select title="Day" class="selectbody fl" name="bday"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
              <select title="Year" class="selectbody fl" name="bday"><option value="0" selected="1">Year</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option></select>
            </span>
            <div class="fb1 why h"></div></div>
						<!-- <label>Birthday</label>
							<input type="date" name="bday" class="form-control input-lg" placeholder="Birtdate" tabindex="6" required> -->
						</div>
					<div class="form-group">
					<input type="text" name="address"  class="form-control input-lg" placeholder="Address" tabindex="4" required>
				</div>
							<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">

							<select type="text" name="govid" id="password" class="form-control input-lg" placeholder="" tabindex="5" required>
								<option value="Passport">Passport</option>
								<option value="Drivers License">Driver's License</option>
								<option value="SSS ID">SSS ID</option>
								<option value="Phil Health">Phil Health</option>
								<option value="Tin ID">Tin ID</option>
								<option value="Voters ID">Voter's ID</option>
								<option value="Senior Citizen ID">Senior Citizen ID</option>
								<option value="Business Permit">Business Permit</option>
							</select> 

						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="idnumber" id="password_confirmation" class="form-control input-lg" placeholder="ID Number"  required>
					</div>	
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
								<label>Upload your valid Id here!</label>
							   <input class="form-control input-lg" name="img" type="file" placeholder="Select product image5">			
					</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<label>Your Phone Number</label>
								<input type="text" name="phonenumber"class="form-control input-lg" placeholder="63912345678">
							</div>
						</div>
						<div class="custom-control custom-checkbox">
	  <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="enableBtn()">
	  <label class="custom-control-label" for="customCheck1">I accept the <a href=""  data-toggle="modal" data-target="#myModal">Terms and condition</a></label>
	</div>
					</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" id="myBtn" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" disabled></div>
				</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Modal -->
	 <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title"><strong>WEBSITE DESCLAIMER</strong></h4>
	        </div>
	        <div class="modal-body">
	          <p style="text-align: center; text-align:justify; padding: 20px;"><strong>INTRODUCTION</strong>
	<br> <br>
		The information provided by the OMATD (Online Mindanao Agricultural Tourism <br>Destination) is for general information purposes only. All information on the Site is <br>provided in good faith, however we make no representation or warranty of any kind, <br>express or implied, regarding the accuracy, validity, availability or completeness <br> of any information on the said website.
	<br><br>
		Under no circumstances shall we have any liability to you for any loss or damage of <br> any kind incurred as a result of the use of the site or reliance on any <br>information provided on the site. Your use of the site OMATD and your reliance on <br>any information on the site is solely at your own risk. <br><br><br>



	<strong>EXTERNAL LINKS DESCLAIMER FOR WEBSITE </strong>	
	<br><br>
		The website OMATD (Online Mindanao Agricultural Tourism Destination) may contain links <br>to other websites or content belonging to or originating from third parties or links <br>to websites and features in banner or other advertising. Such external links are <br>not investigated, monitored or checked for accuracy, validity, availability or completeness by us.</p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>
	<!-- /.modal -->
	</body>
	</html>

	<script type="text/javascript">
		function enableBtn() {
	    document.getElementById("myBtn").disabled = false;
	}
	</script>