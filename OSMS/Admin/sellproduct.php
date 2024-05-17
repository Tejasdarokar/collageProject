<?php
define('TITLE','Sell product');
include("include/header.php");
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['psubmit'])){
        $pid=$_REQUEST["pid"];
        $pava=$_REQUEST['pava']-$_REQUEST['pquantity'];
        $custname=$_REQUEST['cname'];
        $custadd=$_REQUEST['cadd'];
        $cpname=$_REQUEST['pname'];
        $cpquantity=$_REQUEST['pquantity'];
        $cpeach=$_REQUEST['psellingprice'];
        $cptotal=$_REQUEST['totalcost'];
        $cpdate=$_REQUEST['inputDate'];
        $sql="INSERT INTO customer_tb(custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate)value('$custname','$custadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')";
        if($conn->query($sql)==true){
            $genid=mysqli_insert_id($conn);
            session_start();
            $_SESSION['myid']=$genid;
            echo "<script> location.href='productsellsuccess.php';</script>";
        }
        $sqlup="UPDATE assert_tb SET pava='$pava' where pid='$pid'";
        $conn->query($sqlup);
}


if(isset($_REQUEST['issue'])){
    $sql="SELECT * FROM assert_tb WHERE pid={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<div  class="col-sm-6 mt-5 ml-4 jumbotron"><!-- second column---->
<h3 class="text-center">Add New Product</h3>
<form  action="" method="POST">
<div class="form-group">
        <label for="pid">Product ID</label>
        <input type="text" readonly required class="form-control" id="pid"  name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
     </div>
     <div class="form-group">
        <label for="pname">Customer Name</label>
        <input type="text" required class="form-control" id="cname"  name="cname" >
     </div>
     <div class="form-group">
        <label for="pname">Customer Address</label>
        <input type="text" required class="form-control" id="padd"  name="cadd" >
     </div>
     <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="type" readonly required  class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>">
     </div>
     <div class="form-group">
        <label for="pava">Available</label>
        <input type="number" readonly required class="form-control" id="pava"  name="pava" value="<?php if(isset($row['pava'])){echo $row['pava'];}?>">
     </div>
     <div class="form-group">
        <label for="pquantity">Quantity</label>
        <input type="number" required required class="form-control" id="pquantity"  name="pquantity" >
     </div>
     <div class="form-group">
        <label for="psellingprice">price(each item)</label>
        <input type="number" readonly required class="form-control" id="psellingprice"  name="psellingprice" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>">
      </div>
      <div class="form-group">
        <label for="totalcost">Total Price</label>
        <input type="number"required  class="form-control" id="totalcost"  name="totalcost" >
      </div>
      <div class="form-group">
        <label for="inputDate">Date</label>
        <input type="date" required  class="form-control" id="inputDate"  name="inputDate" >
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