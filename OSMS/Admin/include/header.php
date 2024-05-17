<?php
include('../dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
       li a{
           color:black;
       }
       li a:hover{
           background-color:#f12a2a;
           color:white;            
       }
       li a:active{
           background-color:black;
           color:white;
                       
       }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap css---->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontasome  css---->
    <link rel="stylesheet" href="../css/all.min.css"></title>
     <!-- google font---->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
      <!-- custom css---->
      <link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE ?> </title>
</head>
<body>
   <!-- top nev bar------->
   <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">OSMS</a>
    </nav>
    <!--- end --->
<!-- side nev bar------->
<div class="container-fluid" style="margin-top:40px;">
<div class="row ">
<nav class=" col-sm-2 bg-light sidebar py-5 d-print-none">
<div class="sibebar-sticky" style='position:fixed;'>
<ul class="nav flex-column">
<li class="nav-item"><a class="nav-link active" href="dashboard.php"><i class="fas fa-user" ></i> Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="work.php"><i class="fas fa-tools"></i> Work Order</a></li>
<li class="nav-item"><a class="nav-link" href="request.php"><i class="fas fa-clipboard-check"></i> Request</a></li>
<li class="nav-item"><a class="nav-link" href="assets.php"><i class="fas fa-sliders-h"></i> Assets</a></li>
<li class="nav-item"><a class="nav-link" href="technician.php"><i class="fas fa-user-nurse"></i> Technician</a></li>
<li class="nav-item"><a class="nav-link" href="requesters.php"><i class="fas fa-file-import"></i> Requesters</a></li>
<li class="nav-item"><a class="nav-link" href="sellreport.php"><i class="fab fa-sellsy"></i> Sell Report</a></li>
<li class="nav-item"><a class="nav-link" href="workreport.php"><i class="fas fa-chart-line"></i> Work Report</a></li>
<li class="nav-item"><a class="nav-link" href="Changepass.php"><i class="fas fa-key"></i> Change Password</a></li>
<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
</ul>
</div>
</nav>