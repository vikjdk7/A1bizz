<!doctype html>
<html>
    <?php
 include('session.php');
 

 mysql_close($conn);
 ?>
</table>
</div>
</div>
</section>
  
 <?php echo  $login_session11; ?>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your Personal Profile Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <script></script>
        
        
    
</head>

<body id="page-top">
     <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" style="font-weight: 500;font-size: 12px;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Hi <?php echo  Admin; ?></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
               <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">HOME</a>
            </li>
              
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Team</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Income</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Balance</a>
              </li>
            
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="transfer-money.html">Transfer</a>
            </li>
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#account">Accounts</a>
              </li>
              
              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="reset-password.html">Change Password</a>
            </li>
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="updateparent.html">Update Parent</a>
            </li>
            
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Sign Out</a>
            </li>
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html"><img src="images/customer.png" class="img-fluid mb-5 d-block mx-auto" alt="Cinque Terre" width="44" height="30"> </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">        
        <h1 class="text-uppercase mb-0">Track Your Progress</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Your Team...Your Income...</h2>
        <div class="table-responsive">
    <table class="table table-bordered"">
 <thead>
 <tr class="w3-green">
 <th class="bg-danger">Sum Total Of Members </th>
 <?php
 include('session.php');
 $result = mysql_query("SELECT count(*) as total FROM signup");
 $test=mysql_fetch_assoc($result);
 $id = $test['id']; 
  echo"<th class='bg-danger'>".$test['total']."</th>";
 mysql_close($conn);
 ?>
 </tr>
 </thead>
</table>
</div>



      </div>
    </header>
    
    <section class="bg-dark text-white mb-0" id="portfolio">
      <div class="container">
           <h2 class="text-center text-uppercase text-white">My Team</h2>
              <hr class="star-light mb-5">
         <div class="table-responsive">
    <table class="table table-bordered">
 <thead>
 <tr class="w3-green">
 <th class="bg-danger">ID</th>
 <th class="bg-danger">Name</th>
 <th class="bg-danger">Email</th>
 <th class="bg-danger">Phone Number</th>
 <th class="bg-danger">plan</th>
 <th class="bg-danger">Parent Member</th>
 <th class="bg-danger">Direct Members</th>
 </tr>
 </thead>
 <tbody>
 <tr class="bg-info">
 <?php
 include('session.php');
  
  
 
   $result = mysql_query("SELECT * FROM signup");
 while($test = mysql_fetch_array($result))
 {
    $result1 = mysql_query("SELECT count(email) as child FROM signup where parent= '". $test['email'] ."'");
 $test1=mysql_fetch_assoc($result1);
 $id = $test['id']; 
 echo"<td class='bg-primary'>".$test['id']."</td>";
 echo"<td class='bg-primary'>".$test['first_name']."</td>";
 echo"<td class='bg-primary'>".$test['email']."</td>";
 echo"<td class='bg-primary'>".$test['phone']."</td>";
 echo"<td class='bg-primary'>".$test['plan']."</td>";
  echo"<td class='bg-primary'>".$test['parent']."</td>";
  echo"<td class='bg-primary'>".$test1['child']."</td>";
 echo "</tr>";
 }
 
 mysql_close($conn);
 ?>
</table>
</div>
</div>
</section>
  
<section class="bg-primary text-white mb-0" id="about">
      <div class="container">
         <h2 class="text-center text-uppercase text-white">Total Income</h2>
            <hr class="star-light mb-5">
         <div class="table-responsive">
    <table class="table table-bordered">
 <thead>
 <tr class="w3-green">
 <th class="bg-danger">Total Users</th>
 <th class="bg-danger">Total Earned</th>
 </tr>
 </thead>
 <tbody>
 <tr class="bg-info">
 <?php
 include('session.php');
 $result = mysql_query("SELECT count(*) as total FROM signup");
 $test=mysql_fetch_assoc($result);
 $id = $test['id']; 
    echo"<td class='bg-primary'>".$test['total'] ."</td>";
  echo"<td class='bg-primary'>".$test['total']*601 ."</td>";
  echo "</tr>";
 mysql_close($conn);
 ?>
</table>
<div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-download mr-2"></i>
            Withdraw Now!
          </a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<form action="bank.php" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Account No.</label>
                  <input class="form-control"  type="text" placeholder="Account No" name="acc" required="required" data-validation-required-message="Please enter your Acc no.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Confirm Acc No</label>
                  <input class="form-control"  type="text" name="cacc" placeholder="Confirm Acc No." required="required" data-validation-required-message="Please confirm your Acc No.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>IFSC Code</label>
                  <input class="form-control" type="text" placeholder="IFSC Code" name="ifsc" required="required" data-validation-required-message="Please enter yourIFSC Code.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Account Holder Name</label>
                  <input class="form-control" type="text" placeholder="Acc Holder Name" name="holder" required="required" data-validation-required-message="Please enter a Acc Holder's Valid Name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>registered email</label>
                  <input class="form-control" type="email" placeholder="registered email" name="email" required="required" data-validation-required-message="Please enter a registerd email.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">                  
                   <button type="button" class="btn btn-secondary" onclick="location.replace('bank.php'),'_top'" value="Save change"> Save change</button>
              	</div>              
              </div>
             </form>
           
      </div>
	  <div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	</div>      
    </div>
  </div>
</div>

<!----Modal End>-->
</div>
</div>
    </section>
    
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Available Balance</h2>
        <hr class="star-dark mb-5">
        <div class="table-responsive">
    <table class="table table-bordered">
 <thead>
 <tr class="w3-green">
 <th class="bg-danger">Total Earned</th>
 <th class="bg-danger">Total Spent</th>
 <th class="bg-danger">Balance</th>
 </tr>
 </thead>
 <tbody>
 <tr class="bg-info">
 <?php
 include('session.php');
 $id = $test['id']; 
 $result = mysql_query("SELECT count(*) as total FROM signup");
 $result1 = mysql_query("SELECT sum(amount) as spent FROM transfer_details");
 $test=mysql_fetch_assoc($result);
  $test1=mysql_fetch_assoc($result1);
$totalearned= $test['total']*601;
$totalspent= $test1['spent'];
$balance = $test['total']*601 - $test1['spent'];
 $id = $test['id']; 
    echo"<td class='bg-primary'>".$test['total']*601 ."</td>";
  echo"<td class='bg-primary'>".$test1['spent'] ."</td>";
 echo"<td class='bg-primary'>". $balance ."</td>";
  echo "</tr>";
 
 mysql_close($conn);
 ?>
</table>
      </div>
    </section>
    
    <section id="account" class="bg-primary text-white mb-0" id="about">
      <div class="container">
      
        <h2 class="text-center text-uppercase text-secondary mb-0">Account Details</h2>
        <hr class="star-dark mb-5">
       
        <div class="row">
         <div class="col-lg-5">
         <form class="subscribe-form" action="<? echo $_SERVER['PHP_SELF']; ?>" target="_self" method="post">
		<input type="email" name="email" placeholder="Your Email Address..." />
		<input type="submit" />
            </div>
 
    </div>
        
<div class="table-responsive">
<table class="table table-bordered">
 <thead>
 <tr class="w3-green">
 <th class="bg-danger">Email</th>
 <th class="bg-danger">Account No.</th>
 <th class="bg-danger">IFSC Code</th>
 <th class="bg-danger">Account Holder Name</th>
 </tr>
 </thead>
 <tbody>
 <tr class="bg-info">
 <?php
 include('session.php');
 
$email= $_POST['email'];
 $result = mysql_query("SELECT acc_no,	ifsc_code,acc_holder_name,email FROM bank where email='$email'");
$row = mysql_fetch_array($result);
 echo"<td class='bg-primary'>".$row['email']."</td>";
 echo"<td class='bg-primary'>".$row['acc_no']."</td>";
 echo"<td class='bg-primary'>".$row['ifsc_code']."</td>";
 echo"<td class='bg-primary'>".$row['acc_holder_name']."</td>";
 echo "</tr>";
 
 ?>
</table>
</div>
</section>
    
    
    
    
    
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">AN Open Office
              <br>work From Home</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About A1 Bizz</h4>
            <p class="lead mb-0">A1 bizz is a business community to earn sitting pretty at your home.
              <a href=http://a1bizz.com/">Join Today</a>.</p>
          </div>
        </div>
      </div>
    </footer>
    
     <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; A1 Bizz</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    
     <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    
</body>
</html>