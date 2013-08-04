<?php include_once "../includes/header.php"; ?>
<center>
<?php
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['footer']."' WHERE title='footer'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=1;url=../index.php>";
			echo 'Footer is changed with succes!';
exit();
?>
</center>