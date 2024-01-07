
<?php
session_start();

include('includes/config.php');

$pkgId = $_SESSION['pkgID'][$i];
$userMail = $_SESSION['login'];
$regDate = date('Y/m/d H:i:s');
$status = 'Payment success';

$sql = "INSERT INTO tblbooking(PackageId,UserEmail,RegDate,status) VALUES(:pkgId,:userMail,:regDate,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pkgId', $pkgId, PDO::PARAM_STR);
$query->bindParam(':userMail', $userMail, PDO::PARAM_STR);
$query->bindParam(':regDate', $regDate, PDO::PARAM_STR);
$query->bindParam(':status', $status, PDO::PARAM_STR);
$query->execute();

header("Location: tours.php");
?>