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
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['body']."' WHERE title='sidebar'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=2.5;url=../index.php>";
			echo 'Sidebar changed with succes!';
exit();
?>
</center>