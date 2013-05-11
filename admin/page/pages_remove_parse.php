<?php
// Start session //
session_start();

// Check if user is logged in //
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
    header('Location: ../login_form.php');
    exit();
}
?>
<center>
<?php
if (!$_GET['pid']) {
	$pid = '1';
} else {
	$pid = preg_replace("[^0-9]", "" ,  $_GET['pid']);
}
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "DELETE FROM pages WHERE id='$pid'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=2.5;url=../index.php>";
			echo 'The page is removed with succes!';
exit();
?>
</center>