<?php
define('TITLE','Insert technician');
include("include/header.php");
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['reqsubmit'])){
    if(($_REQUEST['rname']=="")||($_REQUEST['remail']==""))
    {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill all Fileds</div>';
    }else{
        $eName=$_REQUEST['rname'];
        $eEmail=$_REQUEST['remail'];
        $ePass=$_REQUEST['rpass'];
        $sql="INSERT INTO register(name,email,password) VALUES('$eName','$eEmail','$ePass')";
        if($conn->query($sql)==true){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Add Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Add</div>';
        }
    }
}
?>
<div  class="col-sm-6 mt-5 jumbotron"><!-- second column---->
<h3 class="text-center">Add New Requester</h3>
<form  action="" method="POST">
    <div class="form-group">
        <label for="rname">Name</label>
        <input type="text" required class="form-control" id="rname"  name="rname">
     </div>
     <div class="form-group">
        <label for="remail">Email</label>
        <input type="email"required  class="form-control" id="remail"  name="remail">
    </div>
     <div class="form-group">
        <label for="empCity">Password</label>
        <input type="Password" required class="form-control" id="rpass"  name="rpass">
     </div>
     <div class="text-center">
     <button type="submit" class="btn btn-danger" name="reqsubmit">Submit</button>
     <a href="requesters.php" class="btn btn-secondary">Close</a>
     </div>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div><!--- only number for input fields----->
<?php
include('include/footer.php');
?>