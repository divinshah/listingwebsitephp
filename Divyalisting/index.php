<?php 
session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<html>
    <body>
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<p><a href="updatelisting.php">Update Listing</a><p>

</body>
</html>
