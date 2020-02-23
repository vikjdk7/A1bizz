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
else
{
    echo "connected";
}
 
?>