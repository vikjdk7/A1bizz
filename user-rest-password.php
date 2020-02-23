<?php 
 include('session.php');
if(isset($_POST['submit'])){
    $con = mysql_connect("localhost","a1bizz_root","a1bizz@123");
}
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("a1bizz_2017",$con);
// check for valid email address
$oldpass = $_POST['oldpassword'];
$newpass = $_POST['newpassword'];
$confirmpass = $_POST['cnfpassword'];


echo $login_session;
 if ($newpass != $confirmpass) {
	array_push($errors, "The two passwords do not match");
  }



$sql = mysql_query("UPDATE signup SET password='$newpass' where email='$login_session'");
$sql1 = mysql_query("UPDATE signup SET conf_password='$confirmpass' where email='$login_session'");

$rsent = true;
if (!empty($error))
{
        $i = 0;
        while ($i < count($error)){
        echo "<div class='error-msg'>".$error[$i]."</div>";
        $i ++;}
}// close if empty errors


if ($rsent == true){
    header("location:profile.php");
    } else {
    header("location:reset-password.html");
    }

?>