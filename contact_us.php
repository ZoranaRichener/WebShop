<!DOCTYPE>
<?php
	session_start();
	include ('functions/functions.php');
	include("includes/db.php");
;?>
<html>
	<head>
		<title>My Online Shop</title>


		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>

	<body>

		<!--Main Container starts here-->
		<div class="main_wrapper">

			<!--Header starts here-->
			<div class="header_wrapper">
				<a href="index.php"><img id="logo" src="images/logo.png"/></a>
				<img id="banner" src="images/banner.png"/>
			</div>
			<!--Header ends here-->

			<!--Navigation Bar starts-->
			<div class="menubar">

				<ul id="menu">
			   <li><a href="index.php">Home</a></li>
			   <li><a href="all_products.php">All Products</a></li>
			   <li><a href="customer/my_account.php">My Account</a></li>
			   <li><a href="customer_register.php">Sign Up</a></li>
			   <li><a href="cart.php">Shooping Card</a></li>
			   <li><a href="contact_us.php">Contact Us</a></li>

			</ul>

				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a Product"/ >
						<input type="submit" name="search" value="Search" />
					</form>

				</div>

			</div>
			<!--Navigation Bar ends-->

			<!--Content wrapper starts-->
			<div class="content_wrapper">

				<div id="sidebar">

					<div id="sidebar_title">Categories</div>

					<ul id="cats">

						<?php getCats(); ?>

						<ul>

							<div id="sidebar_title">Brands</div>

							<ul id="cats">

								<?php getBrands(); ?>

								<ul>


								</div>

								<div id="content_area">
									<?php cart(); ?>
									<div id="shopping_cart" style="width:800px;height:50px;background:black;color:black;">
										<div id="shopping_cart">

											<span style="float:right; font-size:17px; padding:5px; line-height:40px;">

												<?php
													if(isset($_SESSION['customer_email'])){
														echo "<b style='color:white'>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
													}
													else {
														echo "<b style='color:white'>Welcome Guest:</b>" ;
													}
												?>

												<b style="color:yellow">Shopping Cart -</b> <b style='color:white'>Total Items: <b style='color:white'><?php total_items(); ?></b <b style='color:white'>Total Price: </b> <a href="cart.php" style="color:yellow">Go to Cart</a>


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

										<div id="products_box">
											<div class="container">
												<form id="contact" action="" method="post">
													<h3>Contact Form</h3>
													<h4>Feel free to contact us</h4>
													<fieldset>
														<input placeholder="Your name" type="text" tabindex="1" required autofocus>
													</fieldset>
													<fieldset>
														<input placeholder="Your Email Address" type="email" tabindex="2" required>
													</fieldset>
													<fieldset>
														<input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
													</fieldset>
													<fieldset>
														<input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
													</fieldset>
													<fieldset>
														<textarea placeholder="Type your message here...." tabindex="5" required></textarea>
													</fieldset>
													<fieldset>
														<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
													</fieldset>

												</form>
											</div>

										</div>

									</div>
								</div>
								<!--Content wrapper ends-->



								<div id="footer">

									<h2 style="text-align:center; padding-top:30px; color:black;">&copy; 2019 by <a href="https://zoranarichener.github.io/" > Zorana Richener </a></h2>

								</div>






							</div>
							<!--Main Container ends here-->


						</body>
					</html>

