<?php require("includes/header-login.php"); ?>
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
Please enter the data of your useraccount to login in the admin panel
<hr>
<form method="post" action="login.php">
        <h4>Username</h4>
        <input class="form-control" type="text" name="username"/>
        <h4>Password</h4>
        <input class="form-control" type="password" name="password"/><br>
        <button class="btn btn-primary" type="submit"/>Login</button>
</form>
<?php require("includes/footer.php"); ?>