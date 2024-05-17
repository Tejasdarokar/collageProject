<?php
define('TITLE','Update Employee');
include("include/header.php");
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['empName']=="")||($_REQUEST['empEmail']==""))
    {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill all Fileds</div>';
    }else{
        $eId=$_REQUEST['empId'];
        $eName=$_REQUEST['empName'];
        $eEmail=$_REQUEST['empEmail'];
       // echo $eId,$eName,$eEmail;
        $sql="UPDATE register SET name='$eName',email='$eEmail' WHERE id='$eId'";
        if($conn->query($sql)==true){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Updated Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Update</div>';
        }
    }
}
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM register WHERE id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<div  class="col-sm-6 mt-5 mx-3 ml-3 jumbotron">
<form  action="" method="POST">
     <div class="form-group">
        <label for="empId">Emp ID</label>
        <input type="text" readonly class="form-control" id="empId"  name="empId" value="<?php if(isset($row['id'])){echo $row['id'];}?>">
     </div>
     <div class="form-group">
        <label for="empName">Name</label>
        <input type="text" required class="form-control" id="empName"  name="empName" value="<?php if(isset($row['name'])){echo $row['name'];}?>">
     </div>
     <div class="form-group">
        <label for="empEmail">Email</label>
        <input type="email"required  class="form-control" id="empEmail"  name="empEmail" value="<?php if(isset($row['email'])){echo $row['email'];}?>">
     </div>
     <div class="text-center">
     <button type="submit" class="btn btn-primary" name="requpdate">Update</button>
     <a href="technician.php" class="btn btn-secondary">Close</a>
     </div>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div><!--- only number for input fields----->
<?php
include('include/footer.php');
?>