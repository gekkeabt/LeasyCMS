<?php require_once("data.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitename; ?> <?php echo $pagetitle; ?></title>
<style type="text/css">
body{
	font-family:Helvetica;
}
#mainpanel{
	width:750px;
	font-size:15px;
}
#menu{
	display:inline;
	margin-right:10px;
}
#contentholder{
	max-width:600px;
	word-wrap: break-word;
	
}
</style>
</head>
<body>
<center>
<div id="mainpanel">
<?php echo $menuDisplay; ?>
<h2><b><?php echo $sitename; ?></b></h2>
<hr>
<table><tr><td id="contentholder" width="600px" valign="top">
	<h3><b><?php echo $pagetitle; ?></b></h3>
	<hr>
	<p>
	<?php echo $body; ?>
	</td><td id="sidebarholder" width="150px" valign="top"><h3><b>News</b></h3><hr>
	<?php echo $sidebar ?></td></tr>
</table>
<hr>
<?php echo $footer ?><br>
</div>
</center>
</body>
</html>
