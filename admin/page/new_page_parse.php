<?php include_once "../includes/header.php"; ?><center><?phpinclude_once "../../scripts/connect_to_mysql.php";$query = mysqli_query($myConnection, "INSERT INTO pages (pagetitle, pagebody)         VALUES('".$_POST['pagetitle']."','".$_POST['contentedit']."')") or die (mysqli_error($myConnection));			echo "<meta http-equiv=refresh content=1;url=../index.php>";			echo 'Page created with succes!';exit();?></center>