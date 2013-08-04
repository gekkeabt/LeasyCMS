<?php
//  Detect if the CMS is installed //
$filename = '../scripts/connect_to_mysql.php';
error_reporting(1);
if (file_exists($filename)) {
    header('Refresh: 0; url=../');
}
?><!DOCTYPE html>
<html>
<head>
<title>Installation | Leasy CMS</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<div id="content1">
<h2>Connection data</h2>
<hr>
<form id="form" name="form" method="post" action="database.php">
Database host ( usually "localhost" )<br>
<input name="dbhost" type="text" value="localhost"><br>
Database username<br>
<input name="dbusername" type="text"><br>
Database user password<br>
<input name="dbpassword" type="password"><br>
Database name ( this will create the database by its self )<br>
<input name="dbname" type="text"><br><br>
<input type="submit" name="Submit" value="Create database and insert data">
</form>
<hr>
Leasy CMS is a product of <a href="http://www.abakay.tk" target="_blank">Ahmed Bakay</a><br><br>
</div>
</center>
</body>
</html>