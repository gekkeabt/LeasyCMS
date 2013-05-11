<center>
<?php
// Start session //
session_start();
require_once "login_data.php";
// Check if all fields all filled in //
if(isset($_POST['username'], $_POST['password']))
    {		
        // Check if the username and password is correct //
        if($_POST['username'] == $username && $_POST['password'] == $password)
        {
            // Set session for the user //
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $_POST['username'];
            // Redirect the user //
            header('Refresh: 0; url=index.php');
        }
        else
        {
            // Get back to the form, because the username and/or password are not right //
            header('Refresh: 3; url=login_form.php');
            echo 'This combination of the username and password is not right!';
        }
    }
    else
    {
        header('Refresh: 3; url=login_form.php');
        echo 'You did not fill in everything!';
}
?> 
</center>