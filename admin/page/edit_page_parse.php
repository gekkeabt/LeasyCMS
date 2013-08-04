<?php include_once "../includes/header.php"; ?>
<center>
<?php
include_once "../../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "UPDATE pages SET pagetitle='".$_POST['pagetitle']."', pagebody='".$_POST['contentedit']."'WHERE id='".$_POST['pid']."'") or die (mysqli_error($myConnection));
			echo "<meta http-equiv=refresh content=1;url=../index.php>";
			echo 'Changes were made with succes!';
exit();
?>
</center>