<?php
//  Detect if the CMS is installed //
$filename = 'scripts/connect_to_mysql.php';
error_reporting(1);
if (file_exists($filename)) {
    echo "";
} else {
    echo "The CMS is not installed yet, you will be redirected"; header('Refresh: 3; url=install');
}
// If there isn't an ID in the URL redirect to the Homepage //
if($_GET['pid']=='') {
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?pid=1">'; 
}
else {
}
// Detect which page must be showing with the ID number //
if (!$_GET['pid']) {
	$pageid = '1';
} else {
	$pageid = preg_replace("[^0-9]", "" ,  $_GET['pid']); // filter everything but numbers for security //
}


// Include the file which includes the information about the database ( will be created when installing ) //
require_once "scripts/connect_to_mysql.php";
// Query for the content and the title of the page 
$sqlCommand = "SELECT * FROM pages WHERE id='$pageid' LIMIT 1"; 
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
    $body = $row["pagebody"];
    $pagetitle = $row["pagetitle"];
} 
mysqli_free_result($query); 
// The modules //
$sqlCommand = "SELECT content FROM functions WHERE title='sitename' LIMIT 1"; 
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
    $sitename = $row["content"];
} 
mysqli_free_result($query); 

$sqlCommand = "SELECT content FROM functions WHERE title='footer' LIMIT 1"; 
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
    $footer = $row["content"];
} 
mysqli_free_result($query);

$sqlCommand = "SELECT content FROM functions WHERE title='sidebar' LIMIT 1"; 
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
    $sidebar = $row["content"];
} 
mysqli_free_result($query);
// The main navigation //
$sqlCommand = "SELECT id, pagetitle FROM pages ORDER BY position"; 
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error()); 

$menuDisplay = '';
while ($row = mysqli_fetch_array($query)) { 
$pid = $row["id"];
$linklabel = $row["pagetitle"];
$url = "index.php?pid=";
	$menuDisplay .= "<li id=menu><a  href=". $url . $pid .">" . $linklabel . "</a></li>";
} 
mysqli_free_result($query); 
// Close the mysql connection //
mysqli_close($myConnection);
?>