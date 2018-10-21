<?php 
session_start();
include "function/function.php";
include "connect/connection.php";
include "function/class_view.php";
include "class_ip.php";
include "function/class_product.php";
$product =  new viewallproducts;
$all_cat = new products;
$result = $product->poultry();
$resultlive = $product->livestock();
$resultvege = $product->vegetable();
$resultfruits = $product->fruits();
$Cart = new GetIp;
$count = $Cart->cartcount();
$maincat = $all_cat->viewcat();
global $connect;
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Online Mindanao Agricultural Tourism Destination</title>
	<!-- <title>Online Agriculture Market Place</title> -->

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

	<link rel="stylesheet" type="text/css" href="assets/css/login_css.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">

<!-- 	<link rel="stylesheet" type="text/css" href="admin/css/moded.css"> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="./img/logo2.png" alt="" style="width:200px;height:120px;">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form action="search_result.php" method="get">
							<input class="input search-input" name="searchall" type="text" placeholder="Enter your keyword">
							<button class="search-btn" name="search"><i class="fa fa-search"></i></button>
						</form>
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
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase" data-toggle="modal" data-target="#login-modal">Login</a> 
							/ <a href="regestration_form.php" class="text-uppercase">Join</a>
							<form method="post" action="login.php">
							<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
		  </form>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="regestration_form.php"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<!-- /Cart -->

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

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list" style="overflow-y:scroll; height: 570px; ">
						<li class="dropdown side-dropdown">
							<?php foreach ($maincat as $d): ?>
								<li><a href="product-page/products.php?cat_id=<?php echo $d->cat_id; ?>"><?php echo $d->cat_name;  ?></a></li>
							<?php endforeach ?>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="#">Home</a></li>
						<!-- <li><a href="#">Shop</a></li>
						<li><a href="#">Sales</a></li>
						<li class="dropdowbn default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="products.html">Products</a></li>
								<li><a href="product-page.html">Product Details</a></li>
							</ul>
						</li>
			 -->		</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/dizon.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color"><br><span class="white-color font-weak">
								Dizon Farm
							</span></h1>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/Bukidnon1.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color"><br><span class="white-color font-weak">
								Bukidnon Pineapple Plantation
							</span></h1>

						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/bemwa.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">Bemwa<span><br>Farm</span><br>davao</h1>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row content">
					<h2 style="color: white; font-size:60px; font-family: 'Krub', sans-serif;">Tour the World of <br> Agriculture with us!</h2>
				<!-- banner -->

				<!-- /banner -->

				<!-- banner -->

				<!-- /banner -->

				<!-- banner -->

				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Davao del Sur</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
<!-- 				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/imag2.jpg" alt="">
						<div class="banner-caption">
						</div>
					</div>
				</div> -->
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<!-- Product Single -->
							<?php  
							foreach ($result as $poultry ) {
								$poultry_product = "
								<div class='product product-single'>
								<div class='product-thumb'>
									<div class='product-label'>
									</div>
									<ul class='product-countdown'>
									</ul>
									<a href='product-page/product-page.php?prodetails=".$poultry->pro_id."'>
									<button class='main-btn quick-view'><i class='fa fa-search-plus'></i> Quick view</button></a>
									<img src='img/".$poultry->pro_img1."' alt=''>
								</div>
								<div class='product-body'> 
									<div class='product-rating'>
									
									</div>
									<h2 class='product-name'><a href='#'>".$poultry->pro_name."</a></h2>
									<div class='product-btns'>
									</div>
								</div>
							</div>";
								echo $poultry_product;
							}

							?>
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Bukidnon</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->


						
				<!-- /Product Single -->

				<!-- Product Slick -->				
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<img src="./design/gamay1.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							<!-- Product Single -->
								<?php 
								foreach ($resultlive as $show) {
									$show_livestock = "

						<div class='col-md-3 col-sm-6 col-xs-6'>
					<div class='product product-single'>
						<div class='product-thumb'>
							<div class='product-label'>
							</div>
							<a href='product-page/product-page.php?prodetails=".$show->pro_id."'>
							<button class='main-btn quick-view'><i class='fa fa-search-plus'></i> Quick view</button></a>
							<img src='img/".$show->pro_img1."' alt=''>
						</div>
						<div class='product-body'>
							<h3 class='product-price'><b>P</b>".$show->pro_price."</h3>
							<div class='product-rating'>

							</div>
							<h2 class='product-name'><a href='#'>".$show->pro_name."</a></h2>
							<div class='product-btns'>
							</div>
						</div>
					</div>
				</div>

									";

							echo $show_livestock;
									# code...
								}

								 ?>
							<!-- /Product Single -->

						</div><!--/sli>

				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="container-fluid">
					<div class="banner banner-1">
						<img src="./img/banner13.jpg" alt="" style="width:1190px;">
						<div class="banner-caption text-center">
							<h1 class="primary-color">Online Mindanao Agricultural<br>Tourism Destination <br> <span class="white-color font-weak" style="font-size: 30px;">Promote the different agricultural farms through online and to showcase all farms in Mindanao</span></h1>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- /banner -->

				<!-- banner -->
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Compostela Valley</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->

				<!-- /Product Single -->

				<!-- Product Single -->
				<?php 
				foreach ($resultvege as $veges) {
					$vege = "
					<div class='col-md-3 col-sm-6 col-xs-6'>
					<div class='product product-single'>
						<div class='product-thumb'>
							<div class='product-label'>
							</div>
							<a href='product-page/product-page.php?prodetails=".$veges->pro_id."'>
									<button class='main-btn quick-view'><i class='fa fa-search-plus'></i> Quick view</button></a>							<img src='img/".$veges->pro_img1."' alt=''>
						</div>
						<div class='product-body'>
							<div class='product-rating'>
							</div>
							<h2 class='product-name'><a href='#'>".$veges->pro_name."</a></h2>
							<div class='product-btns'>

							</div>
						</div>
					</div>
				</div>
					";
					echo $vege;
					# code...
				}
				 ?>
				<!-- /Product Single -->


			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sarangani</h2>
					</div>
				</div>
				<!-- section title -->
				<!-- Product Single -->
				<?php 
				foreach ($resultfruits as $fruits) {
					$fruit = "
					<div class='col-md-3 col-sm-6 col-xs-6'>
					<div class='product product-single'>
						<div class='product-thumb'>
						<a href='product-page/product-page.php?prodetails=".$fruits->pro_id."'>
							<button class='main-btn quick-view'><i class='fa fa-search-plus'></i> Quick view</button></a>
							<img src='img/".$fruits->pro_img1."' alt=''>
						</div>
						<div class='product-body'>
							
							<div class='product-rating'>
							</div>
							
							<div class='product-btns'>
							</div>
						</div>
					</div>
				</div>
					";
					echo $fruit;
					# code...
				}
				 ?>
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<!-- FOOTER -->
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

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
