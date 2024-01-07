<?php
$msg;
$error;
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit50'])) {
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$newpassword = md5($_POST['newpassword']);
	$sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
	$query = $dbh->prepare($sql);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$con = "update tblusers set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
		$chngpwd1 = $dbh->prepare($con);
		$chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
		$chngpwd1->bindParam(':mobile', $mobile, PDO::PARAM_STR);
		$chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
		$chngpwd1->execute();
		$msg = "Your Password succesfully changed";
	} else {
		$error = "Email id or Mobile no is invalid";
	}
}

?>

<div class="modal fade" id="forgetPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">

						<div class="login-right">
							<form name="chngpwd" method="post" onSubmit="return valid();">
								<?php if ($error) { ?><?php
														echo "<script type='text/javascript'> alert('" . $error . "'); document.location = 'index.php'; </script>"; ?>
						</div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>: <?php echo "<script type='text/javascript'> alert('" . $msg . "'); document.location = 'index.php'; </script>"; ?> </div><?php } ?>

					<h3>Change your password</h3>
					<input type="email" name="email" id="email" placeholder="Reg Email id" required="">
					<input type="text" name="mobile" id="mobile" placeholder="Reg Mobile no" required="">
					<input type="password" name="newpassword" id="newpassword" placeholder="New Password" required="">
					<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
					<input type="submit" name="submit50" value="Change">
					</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>