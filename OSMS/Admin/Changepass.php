<?php
define('TITLE','Change password');
include("include/header.php");
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['aPassword']==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all Filed!</div>';
    }else{
        $aPassword=$_REQUEST['aPassword'];
        $sql="UPDATE adminlogin_db SET e_password='$aPassword' WHERE a_email='$aEmail'";
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
<input type="email" readonly class="form-control" name="inputEmail"  value="<?php echo $aEmail ?>">
</div>
<div class="form-group">
<i class="fas fa-key"></i><label for="pass"  class="font-weight-bold pl-2">Password</label>
<input type="password" class="form-control" placeholder="Enter Password" name="aPassword">
 </div>
<button type="submit" class="btn btn-danger mr-1 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4" name="passupdate">Reset</button>
<?php if(isset($msg)){ echo $msg;}?>
</form>
</div>
<?php
include("include/footer.php");
?>