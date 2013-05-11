<?php
$dbhost = $_POST['dbhost'];
$dbuname = $_POST['dbusername'];
$dbpass = $_POST['dbpassword'];
$dbname = $_POST['dbname'];

$con = mysql_connect("$dbhost","$dbuname","$dbpass");
if (!$con)
  {
  die('Could not connect, check your data again: ' . mysql_error());
  }else{
  if (mysql_query("CREATE DATABASE $dbname",$con))
  {
  
if (isset($_POST["Submit"])) {
$string = '<?php 
$db_host = "'. $_POST["dbhost"]. '";
$db_username = "'. $_POST["dbusername"]. '";
$db_pass = "'. $_POST["dbpassword"]. '";
$db_name = "'. $_POST["dbname"]. '";
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die ("could not connect to mysql");  
?>';
$fp = fopen("../scripts/connect_to_mysql.php", "w");
fwrite($fp, $string);
fclose($fp);
header('Refresh:0; url=import.php');
}
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
  }

mysql_close($con);
?>