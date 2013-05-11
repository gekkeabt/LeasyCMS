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
}
li{
	display:inline;
	margin-right:10px;
}
</style>
</head>
<body>
<center>
<div id="mainpanel">
<?php echo $menuDisplay; ?>
<h2><b><?php echo $sitename; ?></b></h2>
<hr>
<table><tr><td width="80%" valign="top">
	<h3><b><?php echo $pagetitle; ?></b></h3>
	<hr>
	<?php echo $body; ?>
	</td><td width="20%" valign="top"><h3><b>News</b></h3><hr>
	<?php echo $sidebar ?></td></tr>
</table>
<hr>
<?php echo $footer ?><br>
</div>
</center>
</body>
</html>
