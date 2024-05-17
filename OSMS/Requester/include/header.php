<?php 
include("../dbConnection.php");
session_start();
if($_SESSION['is_login']){
 $rEmail=$_SESSION['rEmail'];
}else{
    echo "<script> location.href='Requesterlogin.php'</script>";
}
$sql="SELECT name,email FROM register WHERE email='$rEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $rName=$row['name'];
}

if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName']==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all field!</div>';
    }else{
        $rName=$_REQUEST['rName'];
        $sql="UPDATE register SET name='$rName' WHERE email='$rEmail'";
        if($conn->query($sql)== TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully!</div>'; 
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update!</div>';  
        }

    }
}
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
      <title><?php echo TITLE ?></title>
</head>
<body>
<!-- top nev bar------->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="Requesterprofile.php">OSMS</a>
    </nav>
    <!--- end --->
<!-- side nev bar------->
<div class="container-fluid" style="margin-top:40px;">
<div class="row">
<nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
<div class="sibebar-sticky">
<ul class="nav flex-column">
<li class="nav-item"><a class="nav-link" href="Requesterprofile.php"><i class="fas fa-user" ></i> Profile</a></li>
<li class="nav-item"><a class="nav-link" href="SubmitRequest.php"><i class="fas fa-tools"></i> Submit Request</a></li>
<li class="nav-item"><a class="nav-link" href="ServiceStatus.php"><i class="fas fa-sliders-h"></i> Service Status</a></li>
<li class="nav-item"><a class="nav-link" href="ChangePassword.php"><i class="fas fa-key"></i> Change Password</a></li>
<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
</ul>
</div>
</nav><!--end side bar--->




