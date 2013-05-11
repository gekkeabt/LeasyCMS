<?php
require_once "../scripts/connect_to_mysql.php";
if(mysqli_connect_errno())
{
    trigger_error('Error while connection: '.$connect->error);
}
if ($myConnection->query("TRUNCATE TABLE TUitstappen") === TRUE) {
    printf("Table successfully TRUNCATED.<br>\n");
}
$sql = file_get_contents("cms.sql");
if (mysqli_multi_query($myConnection, $sql)) 
{
    do {
        if ($result = mysqli_store_result($myConnection)) 
		{
            while ($row = mysqli_fetch_row($result)) 
			{ 
			    printf("%s\n", $row[0]);
            }
            mysqli_free_result($result);
        }
		if (mysqli_more_results($myConnection)) 
		{
           header('Refresh:0; url=config.php');
        }
    } while (mysqli_next_result($myConnection));
}
mysqli_close($myConnection);
?>