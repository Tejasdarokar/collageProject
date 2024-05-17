<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css---->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontasome  css---->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font---->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- custom css---->
    <link rel="stylesheet" href="css/custom.css">
    <title>Osms</title>
</head>
<body>
   <!-- navigasion start----> 
   <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
   <a href="index.php" class="navbar-brand">OSMS</a>
   <span class="navbar-text">Customer's Hppiness Is Our Aim</span>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
   </button>  
   <div class="collapse navbar-collapse" id="myMenu">
     <ul class="navbar-nav pl-5 custom-nav">
     <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
     <li class="nav-item"><a href="#Services" class="nav-link">Service</a></li>
     <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
     <li class="nav-item"><a href="./Requester/Requesterlogin.php" class="nav-link">Login</a></li>
     <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>   
    </div> 
   </nav>
   <!-- navigasion end----> 

   <!-- start header jumbotron---->
   <header class="jumbotron back-image" style="background-image:url(image/Banner1.jpg);">
    <div class="text-center img-text">
        <h1 style="font-size:3em;color:white;">Welcome to OSMS</h1>
        <p style="font-size:1em;color:white;">Customer's Happiness is Our Aim</p>
        <a href="./Requester/Requesterlogin.php" class="btn btn-success mr-4">Login</a>
        <a href="#Registration"class="btn btn-danger mr-4">Sign Up</a>
    </div>
   </header> 
    <!-- endheader jumbotron---->
    <!-- Services---->
    <p id="Services"></p>
    <div class="container" >
    <div class="jumbotron">
        <h3 class="text-center" >OSMS Services</h3>
        <p>The industry is highly competitive with suppliers having a great deal of power in setting and
             negotiating the prices of their products and services to repair shops. In addition, because the customers
              see the service as undifferentiated and a “commodity” with little value separation between competitors, 
              buyer power is also very high. Finally, the barriers to entry are moderately low, 
              and the large number of competitors in this field, including substitutes (such as do-it-yourself work) mean that
               the pricing for such services is very competitive. The only way to have an advantage in this industry is a low cost
                leadership principal applied aggressively or to create higher switching costs through the building of 
                strong business-to-customer ties. It is the aim of Tucson Electronics to create a competitive 
            advantage through both the low cost strategy and by offering greater value through its broader product and service line.
        </p>
    </div> 
   </div>
<!-- services logos---->

<div class="container text-center border-bottom" >
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4">
           <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
           <h4 class="mt-4">Electronics Application</h4>
      </div> 
      <div class="col-sm-4">
           <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
           <h4 class="mt-4">Preventive Maintenance</h4>
      </div> 
      <div class="col-sm-4">
           <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
           <h4 class="mt-4">Fault Repair</h4>
      </div> 
</div> 
</div> 
<!-- services logos---->

<!-- registration form---->
<p id="Registration"></p>
<?php
include('userRegistration.php');
?>

<!--contact us---->
<div class="container" id="Contact">
<h2 class="text-center mb-4">Contact Us</h2>
<div class="row">

<?php 
include('contactform.php'); 
?>

<div class="col-md-4 text center" style="font-size:1em;">
<strong>Headquarter: </strong><br>OSMS pvt Ltd,<br> Hinjewadi,<br> PUNE,<br> Phone: 7798078667<br><a href="#" target="_blank">www.osms.com</a><br><br> 
<strong>Branch: </strong><br>OSMS pvt Ltd,<br> Mihan IT Park,<br> Nagpur,<br> Phone: 7798078667<br><a href="#" target="_blank">www.osms.com</a> 
</div>
</div>
</div>


 <!-- footer---->
 <footer class="container-fluid bg-dark mt-5  text-white">
 <div class="container" style="padding-lower:0;">
 <div class="row py-3">

 <div class="col-md-6">
 <span class="pr-2">Follow us:</span>
 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
 </div>
<div class="col-md-6 text-right">
<small>Designed By Abhishek_IT soln &copy; 2021<small>
<small class="ml-2"><a href="Admin/login.php" target="_blank">Admin Login</a><small>
</div>

 </div>
 </div>
 </footer>


   <!-- Javascript---->
   <script src="js/jquery.min.js"></script> 
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>  
   <script src="js/all.min.js"></script>  
   <!-- Javascript end----> 
</body>
</html>