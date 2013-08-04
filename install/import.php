<?php
require_once "../scripts/connect_to_mysql.php";

$link = $myConnection;

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = file_get_contents("cms.sql");

/* execute multi query */
if (mysqli_multi_query($link, $query)){
     echo "Success";
	 header('Refresh:0; url=config.php');}
else{ 
     echo "Fail";
}
?>