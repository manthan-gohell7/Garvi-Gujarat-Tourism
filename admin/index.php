<?php
session_start();
include('includes/config.php');
if (isset($_POST['login'])) {
	$uname = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
	$query = $dbh->prepare($sql);
	$query->bindParam(':uname', $uname, PDO::PARAM_STR);
	$query->bindParam(':password', $password, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	$result_json = json_encode($results);

	if ($query->rowCount() > 0) {
		$_SESSION['alogin'] = $_POST['username'];
		echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
	} else {

		echo "<script>alert('Invalid Details');document.location = 'index.php';</script>";
	}
}

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>GGT Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<div class="l-form-1-container section-container section-container-image-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 l-form-1 section-description wow fadeIn">
					<b>
						<h1 style="padding-top: 20px;">GGT Admin Login</h1>
					</b>
					<div class="divider-1 wow fadeInUp"><span></span></div>
					<p>Welcome, Admin!</p>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 l-form-1-box wow fadeInUp">

					<div class="l-form-1-top">
						<div class="l-form-1-top-left">
							<h3>Login to the admin panel</h3>
							<p>Enter your credentials to log on:</p>
						</div>
						<div class="l-form-1-top-right">
							<i class="fa fa-lock"></i>
						</div>
					</div>
					<div class="l-form-1-bottom">
						<form role="form" action="#" method="post">
							<div class="form-group">
								<label class="sr-only" for="l-form-1-username">Username</label>
								<input type="text" name="username" placeholder="Username..." class="l-form-1-username form-control" id="l-form-1-username">
							</div>
							<div class="form-group">
								<label class="sr-only" for="l-form-1-password">Password</label>
								<input type="password" name="password" placeholder="Password..." class="l-form-1-password form-control" id="l-form-1-password">
							</div>
							<button type="submit" name="login" class="btn">Sign in!</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Javascript -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/retina-1.1.0.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/scripts.js"></script>


</body>

</html>

</html>