
<!doctype html>
<?php

	session_start();
	include("functions/functions.php");

;?>

<html>
	<head>
		<title>My Online Shop</title>
		<link rel="stylesheet" href= "styles/style.css" media="all" />

	</head>

	<body>
		<!--Main container starts here -->
		<div class="main_wrapper">

			<!--Header starts here -->
			<div class="header_wrapper">

				<a href="index.php"><img id="logo" src="images/logo.png"/></a>
				<img id="banner" src="images/banner.png"/>
			</div>
			<!--Header ends here -->

			<!--Navigation Bar starts here -->
			<div class="menubar">

				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					<li><a href="customer_register">Sign Up</a></li>
					<li><a href="cart.php">Shooping Card</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>

				</ul>

				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a Product!">
						<input type ="submit" name ="search" value="Search">
					</form>

				</div>
			</div>
			<!--Navigation Bar ends here -->

			<!--Content wrapper starts here -->
			<div class="content_wrapper">

				<div id="sidebar">

					<div id="sidebar_title">Categories</div>

					<ul id="cats">

						<?php getCats();?>

					</ul>

					<div id="sidebar_title">Brends</div>

					<ul id="cats">

						<?php getBrands();?>



					</ul>
				</div>
				<div id="content_area">
					<?php cart(); ?>
					<div id="shopping_cart" style="width:800px;height:50px;background:black;color:black;">
						<div id="shopping_cart">

							<span style="float:right; font-size:17px; padding:5px; line-height:40px;">

								<?php
									if(isset($_SESSION['customer_email'])){
										echo "<b style='color:white'>Welcome:</b>". $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
									}
									else {
										echo "<b style='color:white'>Welcome Guest:</b>";
									}
								?>

								<b style="color:yellow">Shopping Cart -</b> <b style='color:white'>Total Items: <b style='color:white'><?php total_items(); ?></b <b style='color:white'> Total Price: </b> <a href="cart.php" style="color:yellow">Go to Cart</a>


								<?php
									if(!isset($_SESSION['customer_email'])){

										echo "<a href='checkout.php' style='color:orange;'>Login</a>";

									}
									else {
										echo "<a href='logout.php' style='color:orange;'>Logout</a>";
									}



								?>



							</span>
						</div>

						<div id="product_box">

							<?php
								if(!isset($_SESSION['customer_email'])){

									include("customer_login.php");
								}
								else {

									include("payment.php");

								}

							?>

						</div>

					</div>
				</div>
				<!--Content wrapper ends here -->

				<div id="footer">
					<h2 style="text-align:center; padding-top:30px;">&copy; 2019 by <a href="https://zoranarichener.github.io/" > Zorana Richener </a></h2>
				</div>

			</div>
			<!-- Main container ends here-->
		</body>


	</html>

