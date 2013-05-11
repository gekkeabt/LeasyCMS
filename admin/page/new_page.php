<?php
// Start a session //
session_start();
// Check if the user is logged in //
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
    header('Location: ../login_form.php');
    exit();
}
// Show the welcometext above the page //
echo '<center><font color=lightblue size=5>Welcome '.$_SESSION['username'].' nice to see you</font></center>';
?>
<!DOCTYPE html>
<html>
<head>
<title>Leasy CMS - Admin</title>
<link href="../style/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../editor/ckeditor.js"></script>
</head>
<body>
<center>
<?php require_once("../menu.php"); ?>
<section id="content">
<article>
<h2>Leasy CMS</h2>
Fill in the fields and click on "Create page" to create the new page.
</article>
<hr>
<article>
<form id="form" name="form" method="post" action="new_page_parse.php">
<h1>Pagetitle</h1>
<input name="pagetitle" type="text"/><br>
<hr>
<h1>Pagebody</h1>
<textarea name="pagebody"></textarea>
<script type="text/javascript">
CKEDITOR.replace( 'pagebody' );
</script>
<hr>
<input type="submit" name="button" id="button" value="Create page" />
</form>
</article>
<hr>
<article>
Leasy CMS is a product of <a href="http://www.abakay.zxq.net" target="_blank">Ahmed Bakay</a>
</article>
</section>
</center>
</body>
</html>