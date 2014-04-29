<?php include_once "../includes/header.php"; ?>
<?php
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['contentedit']."' WHERE title='sidebar'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=1;url=../index.php>";
			echo 'Sidebar changed with succes!';
exit();
?>