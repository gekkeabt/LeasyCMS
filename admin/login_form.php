<?php
//  Detect if the CMS is installed //
$filename = '../scripts/connect_to_mysql.php';
error_reporting(1);
if (file_exists($filename)) {
    echo "";
} else {
    echo "The CMS is not installed yet, you will be redirected"; header('Refresh: 0; url=../install');
}
// Start a session //
session_start();
// Check if the user is logged in //
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
}else{
    header('Location: index.php');
    exit();
}
?> 
<!DOCTYPE html>
<html>
<head>
<title>Leasy CMS - Admin</title>
<link href="includes/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<center>
<section id="content">
<article>
<h2>Leasy CMS</h2>
Please enter the data of your useraccount to login in the admin panel
</article>
<hr>
<article>
<form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username"/>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
        <input type="submit" value="Login" />
</form>
</article>
<hr>
<article>
Leasy CMS is a product of <a href="http://abakay.tk" target="_blank">Ahmed Bakay</a>
</article>
</section>
</center>
</body>
</html>