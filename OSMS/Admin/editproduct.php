<?php
define('TITLE','Edit product');
include("include/header.php");
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['pname']=="")||($_REQUEST['pdop']=="")||($_REQUEST['pava']=="")||($_REQUEST['ptotal']=="")||($_REQUEST['poriginalprice']=="")||($_REQUEST['psellingprice']==""))
    {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill all Fileds</div>';
    }else{
        $pid=$_REQUEST['pid'];
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalprice=$_REQUEST['poriginalprice'];
        $psellingprice=$_REQUEST['psellingprice'];
        $sql="UPDATE assert_tb SET pname='$pname',pdop='$pdop',pava='$pava',ptotal='$ptotal',poriginalcost='$poriginalprice',psellingcost='$psellingprice' WHERE pid='$pid'";
        if($conn->query($sql)==true){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Updated Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Update</div>';
        }
    }
}

if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM assert_tb WHERE pid={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<div  class="col-sm-6 mt-5 ml-4 jumbotron"><!-- second column---->
<h3 class="text-center">Add New Product</h3>
<form  action="" method="POST">
<div class="form-group">
        <label for="pname">Product ID</label>
        <input type="text" required class="form-control" id="pid"  name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
     </div>
     <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="text" required class="form-control" id="pname"  name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>">
     </div>
     <div class="form-group">
        <label for="pdop">Date of Purchase</label>
        <input type="date" required  class="form-control" id="pdop" name="pdop" value="<?php if(isset($row['pdop'])){echo $row['pdop'];}?>">
     </div>
     <div class="form-group">
        <label for="pava">Available</label>
        <input type="number" required class="form-control" id="pava"  name="pava" value="<?php if(isset($row['pava'])){echo $row['pava'];}?>">
     </div>
     <div class="form-group">
        <label for="ptotal">Total</label>
        <input type="number" required  class="form-control" id="ptotal" name="ptotal" value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];}?>">
     </div>
     <div class="form-group">
        <label for="poriginalprice">Orignal price(each item)</label>
        <input type="number" required  class="form-control" id="poriginalprice" name="poriginalprice" value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];}?>">
     </div>
     <div class="form-group">
        <label for="psellingprice">Selling price(each item)</label>
        <input type="number"required  class="form-control" id="psellingprice"  name="psellingprice" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>">
      </div>
     <div class="text-center">
     <button type="submit" class="btn btn-danger" name="requpdate">Submit</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>
     </div>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div><!--- only number for input fields----->
<?php
include('include/footer.php');
?>