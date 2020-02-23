   <?php
 include('session.php');
 echo $login_session;
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
$acc= $_POST['acc'];
$cacc=$_POST['cacc'];
$ifsc=$_POST['ifsc'];
$holder=$_POST['holder'];
$email=$_POST['email'];

   if ($acc != $cacc) {
	array_push($errors, "The two accounts do not match");
  }
  
  
   if ($email != $login_session) {
	array_push($errors, "This is not a registered email with us !!");
  }

$query= "INSERT into bank(acc_no,conf_acc_no,ifsc_code,acc_holder_name,email) VALUES ('$acc','$cacc','$ifsc','$holder','$email')";

 $data = mysql_query ($query) or die(mysql_error());

        header("location:profile.php");

 ?>