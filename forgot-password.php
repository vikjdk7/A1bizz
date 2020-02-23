<?php 
if(isset($_POST['submit'])){
    $con = mysql_connect("localhost","a1bizz_root","a1bizz@123");
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("a1bizz_2017",$con);
// check for valid email address
$email = $_POST['email'];
echo "****************************************";
echo $email;

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $error[] = 'Please enter a valid email address';
}

// checks if the username is in use

//$check = $mysqli->query("SELECT email FROM signup WHERE email = '$email'");
$check =mysql_query("SELECT email FROM signup WHERE email = '$email'");
$row = mysql_fetch_array($check);

echo "**************************************";
echo $row["email"];

//if the name exists it gives an error
if ($row == 0) {
$error[] = "Sorry, Your emails doesn't exists in our record";
}
if (!$error) {
/*Now have to fetch username from the table and create an object .
To create a new password we randomly generate one using substr, md5, uniqid and rand function which generate a random password 10 characters long, 
then on the next line we convert it to a encrypted password using md5 which will be inserted into the database after the new password has been email to the user.*/

$query = mysql_query("SELECT email FROM signup WHERE email = '$email' ");
$r = mysql_fetch_array($query);
//$r=$mysqli->fetch_object($query);
 
//create a new random password

$password = substr(md5(uniqid(rand(),1)),3,10);
$pass = md5($password); //encrypted version for database entry
$to = "$email";
$subject = "Password Recovery";
$body = "Hi you or someone else have requested your account details.
Here is your account information please keep this as you may need this at a later stage.
your temporary password is $password 
Your password has been reset please login and change your password .nn 
Regards Your Website";

$lheaders= "From: <vikjdk7@gmail.com>rn";
$lheaders.= "Reply-To: noprely@domain.com";

mail($to, $subject, $body, $additionalheaders);
$sql = mysql_query("UPDATE signup SET password='$pass' WHERE email = '$email'");
$sql1 = mysql_query("UPDATE signup SET conf_password='$pass' WHERE email = '$email'");
$rsent = true;

}
}
if (!empty($error))
{
        $i = 0;
        while ($i < count($error)){
        echo "<div class='error-msg'>".$error[$i]."</div>";
        $i ++;}
}// close if empty errors


if ($rsent == true){
    echo "<p>Just sent an email with your account details to $email</p>n";
    } else {
    echo "<p>Please enter your e-mail address. You will receive a new password via e-mail.</p>";
    }

?>