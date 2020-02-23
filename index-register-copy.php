
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank You For Your Intesrest. Encounter Awesomeness</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Subscription Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome1.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->


</head>
<body>
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1><span>B</span>usiness <span>S</span>ubscription <span>F</span>orm</h1>
			 <button type="button" class="btn btn-primary" onclick="location.replace('index.html'),'_top'">Home</button>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Experience Awesomeness</h2>
			</div>
			<div class="sub-main-w3">	
				<form action="signup.php" method="post" >
					<input placeholder="First Name" name="fname" type="text" required="">
					
					<input placeholder="Last Name" name="lname" type="text" required="">
				
					<input id = "email" placeholder="E-mail" name="mail" type="email" required="">
					
					<input  placeholder="Phone Number" name="Phone" type="tel" required="">
					
					<input  placeholder="City" name="city" type="text" required="">
					
					<input  placeholder="password" name="password" type="password" required="">
					
					<input  placeholder="Confirm Password" name="cpass" type="text" required="">
				
					<input  placeholder="Plan" name="plan" type="text" required="">
					<input  placeholder="Member's email" name="parent" type="text" required="">
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalLoginAvatar">Confirm Parent Member's Name Name</button>
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

$email= $_POST['email'];

$result =mysql_query("SELECT first_name, last_name FROM signup WHERE email = '$email'");

$row = mysql_fetch_array($result);
$fname = $row['first_name'];



 echo "<button type='button' class='btn btn-primary active'>" . $fname . "</button>";
?>
                   <br><input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><p class="text-primary">T&C.</p></label>
					<input id="reg_btn" type="submit" value="Subscribe Now" >
				</form>
			</div>
		</div>
		<!--//main-->
		<!--Modal-->
	<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <img src="http://radiodemocracy.sl/wp-content/uploads/2016/12/profile.png" alt="avatar" class="rounded-circle img-responsive">
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">

                

                <form class="md-form ml-0 mr-0" action="<? echo $_SERVER['PHP_SELF']; ?>" target="_self" method="post" >
                    <input type="text" name="email" id="form29" class="form-control validate ml-0">
                    <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter email</label>
                     <div class="text-center">
                    <input type="submit" class="btn btn-cyan mt-1">
                </div>
                </form>
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

$email= $_POST['email'];

$result =mysql_query("SELECT first_name, last_name FROM signup WHERE email = '$email'");

$row = mysql_fetch_array($result);
$fname = $row['first_name'];



 echo "<h5 class='mt-1 mb-2'>" . $fname . "</h5>";
?>

                
            </div>
              

                

                
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>
		<!-- Modal End -->
		
		
		
		<!--footer-->
		<div class="footer">
			<p>&copy; 2018 Business Subscription Form. All rights reserved | Design by <a href="http://a1bizz.com">A1 bizz</a></p>
		</div>
		<!--//footer-->
	</div>
	
</body>
</html>
