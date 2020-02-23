<?php
   include('connect.php');
   session_start();
    
   $con=mysql_connect("localhost","a1bizz_root","a1bizz@123");
   if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("a1bizz_2017",$con);


   $user_check = $_SESSION['login_user'];
   
   $ses_sql =mysql_query("SELECT email, password FROM signup WHERE email = '$user_check'");
   $row = mysql_fetch_array($ses_sql);
    $ses_sql11 =mysql_query("SELECT first_name FROM signup WHERE email = '$user_check'");
     $row11 = mysql_fetch_array($ses_sql11);
       $login_session11 = $row11['first_name'];
      
   $login_session = $row['email'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>