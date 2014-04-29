<?php 
$db_host = "localhost";
$db_username = "root";
$db_pass = "ahmedbakay";
$db_name = "cms";
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die ("could not connect to mysql");  
?>