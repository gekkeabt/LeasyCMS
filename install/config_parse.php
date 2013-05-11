<?php
include_once "../scripts/connect_to_mysql.php";
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['sitename']."' WHERE title='sitename'") or die (mysqli_error($myConnection));
$query = mysqli_query($myConnection, "UPDATE functions SET content='".$_POST['footer']."' WHERE title='footer'") or die (mysqli_error($myConnection));
header('Refresh: 0; url=finished.php');
$string = '
<?php
$username = "'. $_POST["username"]. '";
$password ="'. $_POST["password"]. '";
?>';
$fp = fopen("../admin/login_data.php", "w");
fwrite($fp, $string);
fclose($fp);
?>