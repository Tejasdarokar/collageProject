<?php 
define('TITLE','Requester Profile');
include('include/header.php');
include("../dbConnection.php");
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
            $genid=mysqli_insert_id($conn);
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully!</div>'; 
            $_SESSION['myid']=$genid;
            echo "<script> location.href='SubmitRequestSuccess.php'</script>";

        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update!</div>';  
        }

    }
}
?>


<div class="col-sm-6 mt-5"> <!-- start profile area ---->
<form action="" method="post" class="mx-5">
<div class="form-group">
<i class="fas fa-envelope"></i><label for="rEmail" class="font-weight-bold pl-2">Email</label>
<input type="email" readonly class="form-control" name="rEmail"  value="<?php echo $rEmail ?>">
</div>
<div class="form-group">
<i class="fas fa-user"></i><label for="rName" class="font-weight-bold pl-2">Name</label>
 <input type="text" class="form-control" placeholder="Enter Name" name="rName"value="<?php echo $rName ?>" >
</div>
<button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
<?php if(isset($msg)){ echo $msg;}?>
</form>
</div>

<?php 
include('include/footer.php');
?>

