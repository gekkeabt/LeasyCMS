<?php include_once "../includes/header.php"; ?>
<?php
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['sitename']."' WHERE title='sitename'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=1;url=../index.php>";
			echo 'Sitename is changed with succes';
exit();
?>