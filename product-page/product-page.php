		<?php 
		session_start();
	include "../connect/connection.php";
		include "../function/class_productdetails.php";
		include "../function/class_product.php";
		$details = new ViewProductDetails;
		$all_cat = new products;
	$viewDetails = $details->AllProductDetails($_GET['prodetails']);
	$maincat = $all_cat->viewcat();


	// var_dump($viewDetails);
	// die();
		// $relatedproducts = $details->related_products();

		global $connect;
		?>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<title>Online Agriculture Market Place</title>

			<!-- Google font -->
			<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

			<!-- Bootstrap -->
			<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

			<!-- Slick -->
			<link type="text/css" rel="stylesheet" href="../css/slick.css" />
			<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

			<!-- nouislider -->
			<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

			<!-- Font Awesome Icon -->
			<link rel="stylesheet" href="../css/font-awesome.min.css">

			<!-- Custom stlylesheet -->
			<link type="text/css" rel="stylesheet" href="../css/style.css" />
				<link rel="stylesheet" type="text/css" href="../assets/css/login_css.css">

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

					<div class="container">
						<div class="pull-left">
							<!-- Logo -->
							<div class="header-logo">
								<a class="logo" href="../index.php">
									<img src="../img/logo2.png" alt="" style="width:200px; height:110px;">
								</a>
							</div>
							<!-- /Logo -->

							<!-- Search -->
							<div class="header-search">
							<form action="../search_result.php" method="get">
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
									<a a href="#" class="text-uppercase" data-toggle="modal" data-target="#login-modal">Login</a> / <a href="../regestration_form.php" class="text-uppercase">Join</a>
								<form method="post" action="../login.php">
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
										<li><a href="../regestration_form.php"><i class="fa fa-user-plus"></i> Create An Account</a></li>
									</ul>
								</li>
								<!-- /Account -->

								<!-- Cart -->
								<!-- /Cart -->

								<!-- Mobile nav toggle-->
								
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
						<div class="category-nav show-on-click">
							<span class="category-header">Categories <i class="fa fa-list"></i></span>
							<ul class="category-list" style="overflow-y:scroll; height: 500px; ">
								<?php foreach ($maincat as $d): ?>
									<li><a href="products.php?cat_id=<?php echo $d->cat_id; ?>"><?php echo $d->cat_name;  ?></a></li>
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
								<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
									<ul class="custom-menu">
										<li><a href="index.html">Home</a></li>
										<li><a href="products.html">Products</a></li>
										<li><a href="product-page.html">Product Details</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li> -->
							</ul>
						</div>
						<!-- menu nav -->
					</div>
				</div>
				<!-- /container -->
			</div>
			<!-- /NAVIGATION -->

			<!-- BREADCRUMB -->
			<div id="breadcrumb">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="../index.php">Home</a></li>
						<li><a href="#">Products Page</a></li>
						<li class="active"><?php echo $viewDetails->pro_name; ?></li>
					</ul>
				</div>
			</div>
			<!-- /BREADCRUMB -->

			<!-- section -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!--  Product Details -->
						<div class="product product-details clearfix">
							<div class="col-md-6">
								<div id="product-main-view">
									<div class="product-view">
										<img src="../img/<?php echo $viewDetails->pro_img1; ?>" alt="">
									</div>
									<div class="product-view">
										<img src="../img/<?php echo $viewDetails->pro_img2; ?>" alt="">
									</div>
									<div class="product-view">
										<img src="../img/<?php echo $viewDetails->pro_img3; ?>" alt="">
									</div>
									<div class="product-view">
										<img src="./img/main-product04.jpg" alt="">
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<div class="product-body">
									<div class="product-label">
									</div>
									<h2 class="product-name"><?php echo $viewDetails->pro_name;  ?></h2>
									<div>
	<!-- 									<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div> -->
										
									</div>

									<div class="product-options">


									</div>

									<div class="product-btns">

										<div class="">

										<form action="../function/sms.php" method="POST">
										<input type="hidden" name="number" value="<?php echo $viewDetails->user->phone; ?>">
										<div class="form-group">
											<label>*Please Include Your Number and inquire here!*</label>
										<textarea class="input" placeholder="Hi, I'm interested in this. Is it available?" name="message"></textarea>
									<button name="sms" type="submit"class="primary-btn add-to-cart"><i class="fa fa-shopping-cart" ></i> Send Message</button>

														</div>
										</form>

	<?php 

	if(isset($_GET['status']) && $_GET['status'] != 'error') {
		echo '<h1>'.$_GET['status'].'</h1>';
	} 

	if(isset($_GET['status']) && $_GET['status'] == 'error') {
		echo '<h1 style="color:red">'.$_GET['message'].'</h1>';
	}

	?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="product-tab">
									<ul class="tab-nav">
										<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
										<li><a data-toggle="tab" href="#tab2">Reviews</a></li>
									</ul>
									<div class="tab-content">
										<div id="tab1" class="tab-pane fade in active">

											<p><?php echo $viewDetails->description; ?></p>
										</div>
										<div id="tab2" class="tab-pane fade in">

											<div class="row">
												<div class="col-md-6">	
													<div class="product-reviews">
									<?php
											foreach ($viewDetails->productreview as $review) {
											$ProductReview = "
														<div class='single-review'>
															<div class='review-heading'>
																<div><a href='#'><i class='fa fa-user-o'></i>".$review['users_name']."</a></div>
																<div><a href='#'><i class='fa fa-clock-o'></i>".$review['review_added_date']."</a></div>
																<div class='review-rating pull-right'>

																</div>
															</div>
															<div class='review-body'>
																<p>".$review['review']."</p>
															</div>
														</div>";
												echo $ProductReview;
												# code...
											}
											  ?>

															<ul class='reviews-pages'>
															<li class='active'>1</li>
															<li><a href='#'>2</a></li>
															<li><a href='#'>3</a></li>
															<li><a href='#'><i class='fa fa-caret-right'></i></a></li>
														</ul>

													</div>
												</div>
												<div class="col-md-6">
													<h4 class="text-uppercase">Write Your Review</h4>
													<p>Your email address will not be published.</p>
													<form class="review-form" action="add_review.php" method="POST">
														<!-- <input type="hidden" name="reviewid"> -->
														<input type="hidden" name="proid" value="<?php echo $viewDetails->pro_id; ?>">
														<div class="form-group">
															<input class="input" type="text" placeholder="Your Name" name="username" />
														</div>
														<div class="form-group">
															<input class="input" type="email" placeholder="Email Address" name="email" />
														</div>
														<div class="form-group">
															<textarea class="input" placeholder="Your review" name="review"></textarea>
														</div>
														<input type="hidden" name="ratings" value="1">
	<!-- 													<div class="form-group">
															<div class="input-rating">
																<strong class="text-uppercase">Your Rating: </strong>
																<div class="stars">
																	<input type="radio" id="star5" name="ratings" value="5" /><label for="star5"></label>
																	<input type="radio" id="star4" name="ratings" value="4" /><label for="star4"></label>
																	<input type="radio" id="star3" name="ratings" value="3" /><label for="star3"></label>
																	<input type="radio" id="star2" name="ratings" value="2" /><label for="star2"></label>
																	<input type="radio" id="star1" name="ratings" value="1" /><label for="star1"></label>
																</div>
															</div>
														</div> -->
														<button type="Submit" name="add_review" class="primary-btn">Submit</button>
													</form>
												</div>
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

			<!-- section -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- section title -->
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Related Place</h2>
							</div>
						</div>
						<!-- section title -->

						<!-- Product Single -->
						<?php 
						// var_dump($viewDetails->related_products);
						foreach ($viewDetails->related_products as $relatedview ) 
							{ $pro_details = "
						<div class='col-md-3 col-sm-6 col-xs-6'>
							<div class='product product-single'>
								<div class='product-thumb'>
									<img src='../img/".$relatedview['pro_img1']."' alt=''>
								</div>
								<div class='product-body'>
									<div class='product-rating'>
									</div>
									<h2 class='product-name'><a href='#'>".$relatedview['pro_name']."</a></h2>
									<div class='product-btns'>
									</div>
								</div>
							</div>
						</div>";
						echo $pro_details;
							# code...
						}
						 ?>
						<!-- /Product Single -->
						<!-- /Product Single -->
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
			            <img src="../img/logo2.png" alt="">
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
			<script src="../js/jquery.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/slick.min.js"></script>
			<script src="../js/nouislider.min.js"></script>
			<script src="../js/jquery.zoom.min.js"></script>
			<script src="../js/main.js"></script>

		</body>

		</html>
