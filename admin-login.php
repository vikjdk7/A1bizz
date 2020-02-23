<?php
session_start();
// Grab User submitted information
$email = $_POST["username"];
$pass = $_POST["Password"];


// Connect to the database
$con = mysql_connect("localhost","a1bizz_root","a1bizz@123");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("a1bizz_2017",$con);

$result =mysql_query("SELECT * FROM admin_details");

$row = mysql_fetch_array($result);

if($row["username"]==$email && $row["password"]==$pass){
 $_SESSION['login_user'] = $email;
header("location:admin-profile.php");
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>