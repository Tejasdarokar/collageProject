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
if(isset($_REQUEST['empsubmit'])){
    if(($_REQUEST['empName']=="")||($_REQUEST['empCity']=="")||($_REQUEST['empMobile']=="")||($_REQUEST['empEmail']==""))
    {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill all Fileds</div>';
    }else{
        $eName=$_REQUEST['empName'];
        $eCity=$_REQUEST['empCity'];
        $eMobile=$_REQUEST['empMobile'];
        $eEmail=$_REQUEST['empEmail'];
        $sql="INSERT INTO technician_tb(empName,empCity,empMobile,empEmail) VALUES('$eName','$eCity','$eMobile','$eEmail')";
        if($conn->query($sql)==true){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Add Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Add</div>';
        }
    }
}
?>
<div  class="col-sm-6 mt-5 jumbotron"><!-- second column---->
<h3 class="text-center">Add New Technician</h3>
<form  action="" method="POST">
    <div class="form-group">
        <label for="empName">Name</label>
        <input type="text" required class="form-control" id="empName"  name="empName">
     </div>
     <div class="form-group">
        <label for="empCity">City</label>
        <input type="text" required class="form-control" id="empCity"  name="empCity">
     </div>
     <div class="form-group">
        <label for="empMobile">Mobile</label>
        <input type="number" required  class="form-control" id="empMobile" name="empMobile">
     </div>
    <div class="form-group">
        <label for="empEmail">Email</label>
        <input type="email"required  class="form-control" id="empEmail"  name="empEmail">
    </div>
     <div class="text-center">
     <button type="submit" class="btn btn-danger" name="empsubmit">Submit</button>
     <a href="technician.php" class="btn btn-secondary">Close</a>
     </div>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div><!--- only number for input fields----->
<?php
include('include/footer.php');
?>