<?php
session_start();
// Grab User submitted information
$email = $_POST["email"];
$parenrt = $_POST["oldparentemail"];
$newparent = $_POST["newparentemail"];
if($email=="" || $parenrt=="" || $newparent=="")
{
     echo("Missing Information!");
}
else{
  // Connect to the database
$con = mysql_connect("localhost","a1bizz_root","a1bizz@123");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("a1bizz_2017",$con);

$result =mysql_query("update signup SET parent='$newparent' WHERE parent = '$parenrt' AND email='$email'");

if($result){
echo "Record updated successfully";
header("location:profile.php");
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
}
?>