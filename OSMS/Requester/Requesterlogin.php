<?php 
session_start();
include("../dbConnection.php");
if(!isset($_SESSION['is_login'])){

if(isset($_REQUEST['login']))
{

$email=trim($_REQUEST['rEmail']);
$password=trim($_REQUEST['rPassword']);
$sql="SELECT email,password FROM register WHERE email='".$email."' AND password='".$password."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1){
    $_SESSION['is_login']=true;
    $_SESSION['rEmail']=$email;
   echo "<script> location.href='Requesterprofile.php';</script>";   
}else{
    $msg='<div class="alert alert-danger mt-3">Invalid Id and Password !</div>';
}
}
}else{
    echo "<script> location.href='Requesterprofile.php';</script>";   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css---->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontasome  css---->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Login</title>
</head>
<body>
<div class="mb-3 mt-5 text-center" style="font-size:30px;">
<i class="fas fa-stethoscope"></i>
<span>Online Service Management System</span>
</div> 
<p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-danger"></i>Requiester Area</p>
<div class="container-fluid">
<div class="row justify-content-center mt-5">
<div class="col-sm-6 col-md-4">
<form action="" class="shadow-lg p-4" method="post">
<div class="form-group">
<i class="fas fa-envelope"></i><label for="rEmail" class="font-weight-bold pl-2">Email</label>
<input type="email"  required class="form-control" placeholder="Email" name="rEmail" >
</div>
<div class="form-group">
<i class="fas fa-key"></i><label for="pass"  class="font-weight-bold pl-2">Password</label>
<input type="password" required class="form-control" placeholder="Enter Password" name="rPassword">
 </div>
 <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm" name="login">Login</button>
 <?php if(isset($msg)){ echo $msg;} ?>
</form>
<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
</div>
</div>

<!-- Javascript---->
<script src="../js/jquery.min.js"></script> 
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script> 
   <script src="../js/all.min.js"></script>    
   <!-- Javascript end---->   
</body>
</html>