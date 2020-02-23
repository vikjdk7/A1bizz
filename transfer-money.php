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

$accname= $_POST['accname'];
$accno= $_POST['accno'];
$amount= $_POST['amount'];
$ifsc= $_POST['ifsc'];
$email= $_POST['email'];
 
if($accname==" " || $accno==" "|| $amount=="" || $ifsc==" " || $email==" ")
{
    echo "Fields are empty"; 
    header("location:transfer-money.html");
    
}
else{
$query= "INSERT into transfer_details (bank_account,account_holder_name,ifsc_code,amount) VALUES ('$accno','$accname','$ifsc','$amount')";
$data = mysql_query ($query) or die(mysql_error());

header("location:admin-profile.php");
}

?>