<?php
define('TITLE','Submit Request');
include('include/header.php');
include('../dbConnection.php');
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
       echo "<script> location.href='Requesterlogin.php'</script>";
}

if(isset($_REQUEST['submitrequest'])){
$rinfo=$_REQUEST['requestinfo'];
$rdesc=$_REQUEST['requestdesc'];
$rname=$_REQUEST['requestername'];
$radd1=$_REQUEST['requesteradd1'];
$radd2=$_REQUEST['requesteradd2'];
$rcity=$_REQUEST['requestercity'];
$rstate=$_REQUEST['requesterstate'];
$rzip=$_REQUEST['requesterzip'];
$remail=$_REQUEST['requesteremail'];
$rmobile=$_REQUEST['requestermobile'];
$rdate=$_REQUEST['requesterdate'];
    //echo $rinfo ,$rdesc , $rname, $radd1, $radd2, $rcity, $rstate, $rzip, $remail, $rmobile, $rdate;
          
$sql="INSERT INTO submitrequest_db(request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,request_date)VALUES
    ('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
if($conn->query($sql)==TRUE){
    $sql="SELECT max(request_id) FROM submitrequest_db";
    $result=$conn->query($sql);
    $row=$result->fetch_row();
    $genid=$row[0];
    //$genid=mysqli_insert_id($conn);
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Request Send Successfully!</div>';
    $_SESSION['myid']=$genid;
    #$_SESSION['myid']=$gen;
     echo "<script> location.href='SubmitRequestSuccess.php'</script>";
}else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Send Your Request!</div>'; 
}     
}
?>

<div  class="col-sm-9 col-md-10 mt-5"><!-- second column---->
<form class="mx-5" action="" method="POST">
    <div class="form-group">
        <label for="inputRequestInfo">Request Info</label>
        <input type="text" required class="form-control" id="inputRequestInfo" placeholder="Request info" name="requestinfo">
     </div>
     <div class="form-group">
        <label for="inputRequestDescription">Request Description</label>
        <input type="text" required class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
     </div>
     <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text"required  class="form-control" id="inputName" placeholder="Enter Your Name" name="requestername">
     </div>
     <div class="form-row">
        <div class="form-group col-md-6">
             <label for="inputAddress">Address line1</label>
             <input type="text" required class="form-control" id="inputAddress" placeholder="House Name" name="requesteradd1">
         </div>
         <div class="form-group col-md-6">
             <label for="inputAddress2">Address line2</label>
             <input type="text"required  class="form-control" id="inputAddress2" placeholder="Colony Name" name="requesteradd2">
         </div>
     </div>
     <div class="form-row">
        <div class="form-group col-md-6">
             <label for="inputCity">City</label>
             <input type="text" required class="form-control" id="inputCity" placeholder="city" name="requestercity">
         </div>
         <div class="form-group col-md-4">
             <label for="inputState">State</label>
             <input type="text" required class="form-control" id="inputState" placeholder="state" name="requesterstate">
         </div>
         <div class="form-group col-md-2">
             <label for="inputZip">pin</label>
             <input type="number" required class="form-control" id="inputZip" placeholder="pin code" name="requesterzip" onkeypress="isInputNumber(event)">
         </div>
     </div>
     <div class="form-row">
        <div class="form-group col-md-5">
             <label for="inputEmail">Email</label>
             <input type="email" required class="form-control" id="inputEmail" placeholder="Enter Email" name="requesteremail">
         </div>
         <div class="form-group col-md-4">
             <label for="inputMobile">Mobile</label>
             <input type="text" required class="form-control" id="inputMobile"  name="requestermobile" onkeypress="isInputNumber(event)">
         </div>
         <div class="form-group col-md-3">
             <label for="inputDate">Date</label>
             <input type="date" required class="form-control" id="inputDate"  name="requesterdate" >
         </div>
     </div>
     <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
     <button type="reset" class="btn btn-secondary">Reset</button>
     <?php if(isset($msg)){ echo $msg;} ?>
</form>
</div>
<!---- only number ---->
<script>
    function isInputNumber(event){
        var ch=String.formCharCode(eventb .which);
        if(!(/[0-9]/.text(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php 
include('include/footer.php');
?>