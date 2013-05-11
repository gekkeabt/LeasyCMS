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
include_once "../../scripts/connect_to_mysql.php";
$pid = $_POST['pid'];
$pagetitle = $_POST['pagetitle'];
$pagebody = $_POST['pagebody'];
$query = mysqli_query($myConnection, "UPDATE pages SET pagetitle='".$_POST['pagetitle']."', pagebody='".$_POST['pagebody']."'WHERE id='".$_POST['pid']."'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=2.5;url=../index.php>";
			echo 'Changes were made with succes!';
exit();
?>
</center>