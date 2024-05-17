<?php
define('TITLE','Add Product');
include("include/header.php");
include("../dbConnection.php");
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['psubmit'])){
    if(($_REQUEST['pname']=="")||($_REQUEST['pdop']=="")||($_REQUEST['pava']=="")||($_REQUEST['ptotal']=="")||($_REQUEST['poriginalprice']=="")||($_REQUEST['psellingprice']==""))
    {
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert">Fill all Fileds</div>';
    }else{
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalprice=$_REQUEST['poriginalprice'];
        $psellingprice=$_REQUEST['psellingprice'];
        $sql="INSERT INTO assert_tb (pname,pdop,pava,ptotal,poriginalcost,psellingcost)VALUES('$pname','$pdop','$pava','$ptotal','$poriginalprice','$psellingprice')";
        if($conn->query($sql)==true){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Add Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Add</div>';
        }
    }
}
?>
<div  class="col-sm-6 mt-5 ml-4 jumbotron"><!-- second column---->
<h3 class="text-center">Add New Product</h3>
<form  action="" method="POST">
     <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="text" required class="form-control" id="pname"  name="pname">
     </div>
     <div class="form-group">
        <label for="pdop">Date of Purchase</label>
        <input type="date" required  class="form-control" id="pdop" name="pdop">
     </div>
     <div class="form-group">
        <label for="pava">Available</label>
        <input type="number" required class="form-control" id="pava"  name="pava">
     </div>
     <div class="form-group">
        <label for="ptotal">Total</label>
        <input type="number" required  class="form-control" id="ptotal" name="ptotal">
     </div>
     <div class="form-group">
        <label for="poriginalprice">Orignal price(each item)</label>
        <input type="number" required  class="form-control" id="poriginalprice" name="poriginalprice">
     </div>
     <div class="form-group">
        <label for="psellingprice">Selling price(each item)</label>
        <input type="number"required  class="form-control" id="psellingprice"  name="psellingprice">
      </div>
     <div class="text-center">
     <button type="submit" class="btn btn-danger" name="psubmit">Submit</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>
     </div>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div><!--- only number for input fields----->
<?php
include('include/footer.php');
?>