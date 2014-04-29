<?php include_once "../includes/header.php"; ?>
<?php
if (!$_GET['pid']) {
	$pid = '1';
} else {
	$pid = preg_replace("[^0-9]", "" ,  $_GET['pid']);
}
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "DELETE FROM pages WHERE id='$pid'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=1;url=../index.php>";
			echo 'The page is removed with succes!';
exit();
?>