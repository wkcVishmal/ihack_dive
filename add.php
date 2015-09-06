<?php
//session_start();
include("includes/config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
// username ,password and email sent from form 
$addusername = addslashes($_POST['addusername']); 
$addpassword = $_POST['addpassword'];
$addemail = $_POST['addemail'];

$sql = "INSERT INTO user (username, password, email, dob, gender) VALUES ('$addusername','$addpassword','$addemail','2015-01-01','male')";
$result = mysql_query($sql);
// If result matched $myusername and $mypassword, table row must be 1 row
//if($result){
//session_register("myusername");
//$_SESSION['login_admin']=$myusername;
header("location: http://localhost/ihack/");
//}
}
?>