<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobileno'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	$sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':fname', $fname, PDO::PARAM_STR);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
	$query->bindParam(':subject', $subject, PDO::PARAM_STR);
	$query->bindParam(':description', $description, PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if ($lastInsertId) {
		$msg = "Enquiry Successfully submited";
	} else {
		$error = "Something went wrong. Please try again";
	}
}

?>
<!DOCTYPE HTML>
<html>

<head>
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<title>About us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Garvi Gujarat Tourism project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}

		.succWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}
	</style>
</head>

<body>
	<div class="super_container">

		<header class="header">
			<?php
			$_SESSION['callbackPage'] = 'aboutus.php?type=aboutus';
			if ($_SESSION['login']) {

			?>
				<div class="top-header">
					<div class="container">
						<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
							<li class="tol">Welcome :</li>
							<li class="sig"><?php echo htmlentities($_SESSION['login']); ?></li>
							<li class="sigi"><a href="logout.php">| Logout</a></li>
						</ul>
					</div>
				</div><?php } else { ?>
				<div class="top-header">
					<div class="container">

						<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
							<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
							<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">| Sign In</a></li>
						</ul>
					</div>
				</div>
			<?php } ?>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_container d-flex flex-row align-items-center justify-content-start">

							<div class="logo_container">
								<div class="logo">
									<div>Garvi Gujarat Tourism</div>
									<div>travel agency</div>
									<div class="logo_image"><img src="images/logo.png" alt=""></div>
								</div>
							</div>

							<nav class="main_nav ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="index.php">Home</a></li>
									<li class="main_nav_item active"><a href="aboutus.php?type=aboutus">About us</a></li>
									<li class="main_nav_item"><a href="tours.php">Tours</a></li>
									<li class="main_nav_item"><a href="contactus.php?type=contact">Contact</a></li>
								</ul>
							</nav>

							<div class="search">
								<form action="#" class="search_form">
									<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
									<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
								</form>
							</div>

							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="menu_container menu_mm">

			<div class="menu_close_container">
				<div class="menu_close"></div>
			</div>

			<div class="menu_inner menu_mm">
				<div class="menu menu_mm">
					<div class="menu_search_form_container">
						<form action="#" id="menu_search_form">
							<input type="search" class="menu_search_input menu_mm">
							<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
						</form>
					</div>
					<ul class="menu_list menu_mm">
						<li class="menu_item menu_mm"><a href="index-2.html">Home</a></li>
						<li class="menu_item menu_mm"><a href="#">About us</a></li>
						<li class="menu_item menu_mm"><a href="tours.php">Tours</a></li>
						<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
					</ul>

					<div class="menu_social_container menu_mm">
						<ul class="menu_social menu_mm">
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							</li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="menu_copyright menu_mm">GGT All rights reserved</div>
				</div>
			</div>
		</div>

		<div class="home">

			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_content_inner">
								<div class="home_title">About us</div>
								<div class="home_breadcrumbs">
									<ul class="home_breadcrumbs_list">
										<li class="home_breadcrumb"><a href="index-2.html">Home</a></li>
										<li class="home_breadcrumb">About us</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="find">

			<div class="find_background_container prlx_parent">
				<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="find_title text-center">Find the Adventure of a lifetime</div>
					</div>
					<div class="col-12">
						<div class="find_form_container">
							<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
								<div class="find_item">
									<div>Destination:</div>
									<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
								</div>
								<div class="find_item">
									<div>Adventure type:</div>
									<select name="adventure" id="adventure" class="dropdown_item_select find_input">
										<option>Categories</option>
										<option>Categories</option>
										<option>Categories</option>
									</select>
								</div>
								<div class="find_item">
									<div>Min price</div>
									<select name="min_price" id="min_price" class="dropdown_item_select find_input">
										<option>&nbsp;</option>
										<option>Price</option>
										<option>Price</option>
									</select>
								</div>
								<div class="find_item">
									<div>Max price</div>
									<select name="max_price" id="max_price" class="dropdown_item_select find_input">
										<option>&nbsp;</option>
										<option>Price</option>
										<option>Price</option>
									</select>
								</div>
								<button class="button find_button"><a href="tours.php">Find</a></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>We are a Reliable & Trusted Agency</h2>
							<div>take a look at our story</div>
						</div>
					</div>
				</div>

				<div class="row about_row">

					<div class="col-lg-6 about_col order-lg-1 order-2">
						<div>
							<h3>Who we are</h3>
						</div>
						<div style="color: #000;" class="about_content">
							<br>
							<?php
							$pagetype = 'aboutus';

							$sql = "SELECT content,value from about_us where content=:pagetype";
							$query = $dbh->prepare($sql);
							$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
							$query->execute();
							$results = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($results as $result) {

							?>

									<?php echo $result->value; ?>
							<?php }
							} ?>



						</div>
						<div class="button about_button"><a href="#">Read More</a></div>
					</div>
					<div class="col-lg-6 about_col order-lg-2 order-1">
						<div class="about_image">
							<img src="images/about.jpg" alt="https://unsplash.com/@sanfrancisco">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="milestones">
			<div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="images/fact_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Fun facts about our Agency</h2>
							<div>take a look</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="milestones_text">
							<?php
							$content = 'funfacts';

							$sql = "SELECT content,value from about_us where content=:content";
							$query = $dbh->prepare($sql);
							$query->bindParam(':content', $content, PDO::PARAM_STR);
							$query->execute();
							$results = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($results as $result) {

							?>

									<?php echo $result->value; ?>
							<?php }
							} ?>
						</div>
					</div>
				</div>
				<div class="row milestones_container">

					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="17">0</div>
							<div class="milestone_text">Mountains Climbed</div>
						</div>
					</div>

					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="213">0</div>
							<div class="milestone_text">Islands Visited</div>
						</div>
					</div>

					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="11923">0</div>
							<div class="milestone_text">Photos Taken</div>
						</div>
					</div>

					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="15">0</div>
							<div class="milestone_text">Cruises Organized</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Popular services that we offer</h2>
							<div>take a look at these offers</div>
						</div>
					</div>
				</div>
				<div class="row icon_box_container">

					<?php
					$content = 'funfacts';

					$sql = "SELECT content,value from about_us";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results = $query->fetchAll(PDO::FETCH_OBJ);
					$cnt = 0;
					if ($query->rowCount() > 0) {
						foreach ($results as $result) {
							$cnt += 1;

							if ($cnt == 4) {
								break;
							}

					?>

							<div class="col-lg-4 icon_box_col">
								<div class="icon_box">
									<div class="icon_box_image"><img src="<?php echo ('images/service_' . $cnt . '.svg'); ?>" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
									<div class="icon_box_title"><?php echo $result->content; ?></div>
									<p class="icon_box_text">
										<?php echo $result->value; ?>
									</p>
									<a href="#" class="icon_box_more">Read More</a>
								</div>
							</div>


					<?php }
					} ?>
				</div>
			</div>
		</div>

		<div class="newsletter">

			<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_content">
							<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
							<div class="newsletter_form_container">
								<form action="#" id="newsletter_form" class="newsletter_form">
									<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
										<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
										<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 footer_col">
						<div class="footer_about">

							<div class="logo_container">
								<div class="logo">
									<div>Garvi Gujarat Tourism</div>
									<div>travel agency</div>
									<div class="logo_image"><img src="images/logo.png" alt=""></div>
								</div>
							</div>
							<div style="color: aliceblue;" class="footer_about_text">
								<?php
								$pagetype = 'footer';

								$sql = "SELECT content,value from about_us where content=:pagetype";
								$query = $dbh->prepare($sql);
								$query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
								$query->execute();
								$results = $query->fetchAll(PDO::FETCH_OBJ);
								$cnt = 1;
								if ($query->rowCount() > 0) {
									foreach ($results as $result) {

								?>
										<?php

										echo $result->value;
										?>
								<?php }
								} ?>
							</div>
							<div class="copyright">
								Copyright &copy;
								<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved
							</div>
						</div>
					</div>

					<div class="col-lg-4 footer_col">
						<div class="footer_latest">
							<div class="footer_title">Latest Offers</div>
							<div class="footer_latest_content">

								<div class="footer_latest_item">
									<div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho">
									</div>
									<div class="footer_latest_item_content">
										<div class="footer_latest_item_title"><a href="tours.php">Gujarat Summer</a></div>
										<div class="footer_latest_item_date">Jan 09, 2018</div>
									</div>
								</div>

								<div class="footer_latest_item">
									<div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
									<div class="footer_latest_item_content">
										<div class="footer_latest_item_title"><a href="tours.php">A perfect vacation</a></div>
										<div class="footer_latest_item_date">Jan 09, 2018</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 footer_col">
						<div class="tags footer_tags">
							<div class="footer_title">Tags</div>
							<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
								<li class="tag"><a href="#">travel</a></li>
								<li class="tag"><a href="#">summer</a></li>
								<li class="tag"><a href="#">cruise</a></li>
								<li class="tag"><a href="#">beach</a></li>
								<li class="tag"><a href="#">offer</a></li>
								<li class="tag"><a href="#">vacation</a></li>
								<li class="tag"><a href="#">trip</a></li>
								<li class="tag"><a href="#">city break</a></li>
								<li class="tag"><a href="#">adventure</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/about_custom.js"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

	<?php include('includes/signup.php'); ?>
	<?php include('includes/signin.php'); ?>

</body>

</html>