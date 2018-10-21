<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
// Check if users is logged in
if (!isset($_SESSION['login'])) {
	header('location:404.php');
}
global $connect;
include "connect/connection.php";
include "function/function.php";
include "function/class_product.php";
$user = new products;
$result = $user->viewcat();
$view = $user->viewsubcat();
$CRUD_user = new CRUD;
// $id = $_SESSION['login'];
//temporary id
$id = $_SESSION['login'];
$user_info = $CRUD_user->get_user($id);
$query = $connect->prepare("SELECT * FROM products WHERE users_id = $id");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['action']) && $_GET['action']=='delete'){
 	$sth = $connect->prepare("DELETE FROM products WHERE pro_id = :id");
 	$sth->bindValue('id',$_GET['deleteid']);
 	if ($sth->execute()) {
 		echo "<script>window.open('user_profile.php','_self');alert('Delete succesfuly');</script>";
 	}
 }
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Online Agriculture Products</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="img/logo1.png" alt="" style="width:200px;height:120px;">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase"><?php echo $user_info->Fname.' '; echo $user_info->Lname?></strong>
							</div>
							<a href="function/logout.php" class="text-uppercase">Logout</a>
						</li>
						<!-- /Account -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->
	<!-- /NAVIGATION -->
	<!-- section -->
	<div class="section" style="margin-top:-60px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Personal Information</a></li>
								<li><a data-toggle="tab" href="#tab2">Product Details</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<div class="container">
									  <h2><?php echo $user_info->Fname.' '; echo $user_info->Lname; ?></h2>
									  <form class="form-horizontal">
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="ID">ID:</label>
									      <div class="col-sm-3">
									        <p class="form-control" id="ID"><?php echo $user_info->id_number; ?></p>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="idtype">ID TYPE:</label>
									      <div class="col-sm-3">          
									        <p class="form-control" id="idtype"><?php echo $user_info->id_type; ?></p>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="uname">Username:</label>
									      <div class="col-sm-3">          
									        <p class="form-control" id="uname"><?php echo $user_info->username; ?></p>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="pwd">Password</label>
									      <div class="col-sm-3">
									        <p class="form-control" id="pwd"><?php echo $user_info->password; ?></p>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="bday">Birthday:</label>
									      <div class="col-sm-3">          
									        <p class="form-control" id="bday"><?php echo $user_info->Bday; ?></p>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="add">Address:</label>
									      <div class="col-sm-4">
									        <p class="form-control" id="add"><?php echo $user_info->Address; ?></p>
									      </div>
									    </div>
									    <!-- <button title="Update profile" name="update_profile" data-id="<?php echo $user_info->users_id?>" class="btn btn-xs btn-success update_profile" data-toggle="modal" data-target="#updateModal">
									        		<span class="fa fa-edit"></span>
									        	</button> -->
									        	<button type="button" name="update_profile" data-id="<?php echo $user_info->users_id; ?>" class="btn btn-info btn-md update_profile" data-toggle="modal" data-target="#updateModalProfile">
									        		<span class="fa fa-user-o">&nbsp;Edit Profile</span>
									        	</button>
									  </form><br>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="R4VCX4X3GBQS6">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


									</div>
								</div>
								<div id="tab2" class="tab-pane fade in">
									<div class="container">
									  <h2>YOUR PRODUCTS</h2>
									  <button class="btn btn-xs header-btns-icon btn-info" data-toggle="modal" data-target="#myModal">ADD PRODUCT</button>
									  <table class="table table-hover">
									    <thead>
									      <tr>
									        <th>Farm Name</th>
									        <th>Description</th>
<!-- 									        <th>Availability</th>
									        <th>Price</th> -->
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>
									  	<?php foreach ($results as $product):?>
									      <tr>
									        <td><?php echo $product['pro_name']; ?></td>
									        <td><?php echo $product['description']; ?></td>
									        <td>
									        	<a href="user_profile.php?deleteid=<?php echo $product['pro_id'];?>
											&action=delete" onclick="return confirm('Are you sure?')">
									        	<button class="btn btn-xs btn-danger">
									        		<span class="fa fa-trash"></span>
									        	</button>
									        	</a>
									        	<br> <br>
									        	<button title="Update" name="update" data-id="<?php echo $product['pro_id']?>" class="btn btn-xs btn-success update" data-toggle="modal" data-target="#updateModal">
									        		<span class="fa fa-edit"></span>
									        	</button>
									        </td>

									      </tr>
									  	<?php endforeach; ?>
									    </tbody>
									  </table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo2.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>PROMOTE THE DIFFERENT AGRICULTURAL FARMS THROUGH ONLINE AND TO SHOWCASE ALL FARMS IN MINDANAO</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
<!-- 						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul> -->
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
<!-- 						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul> -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Contact</h3>
												<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">cabanlit7@gmail.com</a></li>
							<li><a href="#">agritour</a></li>
							<!-- <li><a href="#">FAQ</a></li> -->
						</ul> 
<!-- 						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form> -->
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- M O D A L S -->
		<!-- ADD MODAL -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-md">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">	
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Add Farm</h4>
	        </div>
	        <div class="modal-body">
	          <form  action="admin/add_category.php" method="post" enctype="multipart/form-data">
                          <input class="form-control" type="text" placeholder="Farm Name" name="proname"><br>
                          <label>Select Region</label><br>
                          <select class="custom-select" name="catid">
                            <?php foreach ($result as $d): ?>
                          <option value="<?php echo $d->cat_id; ?>"><?php echo $d->cat_name; ?></option>
                           <?php endforeach; ?>
                        </select>
                        <input type="hidden" name="subcat" value="1">
                          <!-- <select class="custom-select" name="subcat">
                            <?php foreach ($view as $d): ?>
                          <option value="<?php echo $d->sub_cat_id; ?>"><?php echo $d->sub_cat_name; ?></option>
                           <?php endforeach; ?>
                        </select> --><br><br>
                          <input class="form-control" name="proimgone" type="file" placeholder="Select product image1"><br>
                          <input class="form-control" name="proimgtwo" type="file" placeholder="Select product image2"><br>
                          <input class="form-control" name="proimgtree" type="file" placeholder="Select product image3"><br>
                          <input class="form-control" name="proimgfour" type="file" placeholder="Select product image4"><br>
                          <input class="form-control" name="proimgfive" type="file" placeholder="Select product image5"><br>
                          <input type="hidden" name="AvailaBility" value="1">
                          <!-- <select class="btn btn-secondary dropdown-toggle" name="AvailaBility" id="dropdownMenu1" >
                          <option value="In Stock">In Stock</option>
                          <option value="To harvest">To Harvest</option>
                          </select> -->
                          <textarea class="form-control" type="text" placeholder="Description" name="description"></textarea><br>
                          <input class="form-control" type="hidden" placeholder="Enter price" name="proprice" value="1">
                          
	        </div>
	        <div class="modal-footer">
	        	 <button type="submit" name="add_product" class="btn btn-success">Submit</button>
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
<!-- END -->
<!-- UPDATE MODAL PROFILE -->
<div id="updateModalProfile" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
	<form class="" action="function/insert.php" method="POST">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" id="updatemodalviewprofile">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update_profile">Save Changes</button>
      </div>
  </form>
    </div>

  </div>
 </div>

<!-- UPDATE MODAL -->
	<div class="modal fade" id="updateModal" role="dialog">
	    <div class="modal-dialog modal-md">
		<form class="" action="function/insert.php" method="POST">


	      <!-- Modal content-->
	      <div class="modal-content form-group" >
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title" align="center">Update Details</h4>
	        </div>
	        <div class="modal-body" id="updatemodalview">
	          <p id = "test" align="center">Some text in the modal.</p>
						HELLO
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" name="update">Save Changes</button>
					</form>
	        </div>
	      </div>

	    </div>
	  </div>
<!-- END -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>
<script type="text/javascript">
	//modal update script
	$(document).on('click', '.update', function(){
	           var id = $(this).data("id");
	           console.log(id);
	           if(id != '')
	           {
	                $.ajax({
	                     url:"function/fetch.php",
	                     method:"POST",
	                     data:{update:id},
	                     success:function(data){
	                          $('#updatemodalview').html(data);
	                          $('#updateModal').modal('show');
	                     }
	                });
	           }
	      });
	$(document).on('click', '.update_profile', function(){
	           var id = $(this).data("id");
	           console.log(id);
	           if(id != '')
	           {
	                $.ajax({
	                     url:"function/fetch_profile.php",
	                     method:"POST",
	                     data:{update:id},
	                     success:function(data){
	                          $('#updatemodalviewprofile').html(data);
	                          $('#updateModalProfile').modal('show');
	                     }
	                });
	           }
	      });
</script>
</html>
