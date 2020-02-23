<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'a1bizz_2017'); 
define('DB_USER','a1bizz_root'); 
define('DB_PASSWORD','a1bizz@123'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
if (mysqli_connect_errno($con)) 
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

$fname= $_POST['fname'];
$lname=$_POST['lname'];
$mail = $_POST['mail'];
$Phone=$_POST['Phone'];
$city =$_POST['city'];
$password =$_POST['password'];
$cpass=$_POST['cpass'];
$plan=$_POST['plan'];
$parent=$_POST['parent'];
   
   if ($password != $cpass) {
	array_push($errors, "The two passwords do not match");
  }


$query= "INSERT into signup (first_name,last_name,email,phone,city,password,	conf_password,plan,parent) VALUES ('$fname','$lname','$mail','$Phone','$city','$password','$cpass','$plan','$parent')";
$data = mysql_query ($query) or die(mysql_error());

header("location:index-login.html");
       
?>

