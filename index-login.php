<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome2.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->

<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font --> 
<script type="text/javascript">
 
function validate()
{
var username = document.login.email.value;
var password = document.login.Password.value;
 
if (username==null || username=="")
{
  alert("Username can't be blank");
  return false;
}
else if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
}
</script>
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>Registered User ? Sign In Here</h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					
					<span class="fa fa-lock"></span>
					<div class="clear"></div>
					<div class="login-agileits-top"> 	
						<form name="login" action="login.php" method="post" onsubmit="return validate();" > 
							<input type="text" class="name" name="email" Placeholder="Email" required=""/>
							<input type="password" class="password" name="Password" Placeholder="Password" required=""/>
							<input type="submit" value="Login"> 
						</form> 	
					</div> 
					<div class="login-agileits-bottom"> 
						<h6><a href="#">Forgot password?</a></h6>
					</div> 

				</div>  
			</div>  
		</div>	
		

		
					<div class="login-agileits-bottom1"> 
						<h3>or login with</h3>
					</div> 
					<div class="social_icons agileinfo">
						<ul class="top-links">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i>facebook</a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i>twitter</a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i>linkedin</a></li>
								</ul>
					</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p> © 2018 Fashion Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright --> 
	</div>	
	<!-- //main --> 
</body>
</html>