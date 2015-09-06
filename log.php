<?php

include("includes/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$myusername = addslashes($_POST['username']); 
$mypassword = ($_POST['password']);

$sql = "SELECT userid FROM user WHERE (username='$myusername' or email='$myusername') and password='$mypassword'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1){
	$found_user=mysql_fetch_array($result);
//session_register("myusername");
	
	$_SESSION['login_admin']=$myusername;
	$_SESSION['user_id']=$found_user['userid'];
header("location: http://localhost/iHack/fancy-mobile-flat-navigation");
}
}
?>