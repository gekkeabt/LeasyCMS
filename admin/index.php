<?php
// Start a session //
session_start();
// Check if the user is logged in //
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
    header('Location: login_form.php');
    exit();
}
// Show the welcometext above the page //
echo '<center><font color=lightblue size=5>Welcome '.$_SESSION['username'].' nice to see you</font></center>';
?> 
<!DOCTYPE html>
<html>
<head>
<title>Leasy CMS - Admin</title>
<link href="style/style.css" type="text/css" rel="stylesheet">
<script src="editor/js/jquery-1.3.2.min.js" type="text/javascript" language="javascript"> </script>
<script src="editor/js/jquery.qtip-1.0.0-rc3.min.js" type="text/javascript" language="javascript"> </script>
<script type="text/javascript" language="javascript">$(document).ready( function(){	$("#myLink3").qtip({ style: {	name: 'dark', border:
{width: 3,radius: 7}} });for( var i=1; i< 7; i++){$("#myLink"+i).click( function(){//alert($(this).siblings(".codeDesc:first").length);
if( $(this).siblings(".codeDesc:first").is(":visible") )
{$(this).siblings(".codeDesc:first").slideUp("slow");}else{$(this).siblings(".codeDesc:first").slideDown(2000);}return false;});	}});
</script>
</head>
<body>
<center>
<?php require_once("menu-root.php"); ?>
<section id="content">
<article>
<h2>Leasy CMS</h2>
Welcome to the admin panel of Leasy CMS, here you can change the content and other settings of your website.
</article>
<hr>
<article>
<h1>Pages</h1>
<ul id="choice">
<li><a href="page/new_page.php">Create page</a></li>
<li><a href="page/pages_edit.php">Edit page</a></li>
<li><a href="page/pages_remove.php">Remove page</a></li>
</ul>
</article>
<hr>
<article>
<h1>Functions</h1>
<ul id="choice">
<li><a href="function/edit_name.php">Change sitename</a></li>
<li><a href="function/edit_sidebar.php">Change sidebar</a></li>
<li><a href="function/edit_footer.php">Change footer</a></li>
</ul>
</article>
<hr>
<article>
<a id="myLink3" href="#" title="Made by Ahmed Bakay">Click here for info about the CMS </a> <br/>
<div class="codeDesc" >
	<br/>
	<span class="blackHead">CMS:</span><br/>
	Title : Leasy CMS
	<br>
	Version : 3.0
	<br>
	Codename : Joytrack
	<br>
	Publiced : 05 - 11 - 2013
	<br/>
	<br/>
	<span class="blackHead">Extra information:</span><br/>
	Creator : Ahmed Bakay
	<br>
	Used tools: Notepad++ , PHP , MySQL , Apache , PHPMyAdmin , JQuery , CKEditor, QTip, Mozilla Firefox, Google Chrome, Internet Explorer
	<br>
	<br>
	<span class="blackHead">Changelog ( after version 2.4)</span><br>
	Improved front-end design
	<br>
	Improved back-end design
	<br>
	Faster connection with MySQL
	<br>
	English language
	<br>
	Smaller size
	<br>
	<b>And more!</b>
	<br>
	<br>
	<br>
	Contact : Ahmed Bakay, <a href="mailto:achieboy_97@hotmail.com">achieboy_97@hotmail.com</a>
</div>
</article>
</section>
</center>
</body>
</html>


<script type="text/javascript">

</script>












