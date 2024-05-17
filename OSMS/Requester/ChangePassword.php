<?php
define('TITLE','Change Password');
include('include/header.php');
include('../dbConnection.php');
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
       echo "<script> location.href='Requesterlogin.php'</script>";
}

if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rPassword']==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all Filed!</div>';
    }else{
        $rPassword=$_REQUEST['rPassword'];
        $sql="UPDATE register SET password='$rPassword' WHERE email='$rEmail'";
        if($conn->query($sql)== TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully!</div>'; 
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update!</div>';  
        }

    }
}
?>
<div class="col-sm-6 mt-5"> <!-- start profile area ---->
<form action="" method="post" class="mx-5">
<div class="form-group">
<i class="fas fa-envelope"></i><label for="inputEmail" class="font-weight-bold pl-2">Email</label>
<input type="email" readonly class="form-control" name="inputEmail"  value="<?php echo $rEmail ?>">
</div>
<div class="form-group">
<i class="fas fa-key"></i><label for="pass"  class="font-weight-bold pl-2">Password</label>
<input type="password" class="form-control" placeholder="Enter Password" name="rPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
     title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
 </div>
<button type="submit" class="btn btn-danger mr-1 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4" name="passupdate">Reset</button>
<?php if(isset($msg)){ echo $msg;}?>
</form>
</div>
<?php 
include('include/footer.php');
?>