<?php
if(session_id()==''){
    session_start();
}
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
   }else{
       echo "<script>location.href='login.php'</script>";
   }
if(isset($_REQUEST['view']))
{
    $sql="SELECT * FROM submitrequest_db WHERE request_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
if(isset($_REQUEST['close']))
{
    $sql="DELETE FROM submitrequest_db WHERE request_id={$_REQUEST['id']}";
   if($conn->query($sql)==true)
   {
    echo "<script>location.href='request.php'</script>";
   }else{
       $msg= '<div class="alert alert-danger">Unable to Delete!</div>';
   }
    
}
if(isset($_REQUEST['assign'])){
    $rno=$_REQUEST['request_id'];
    $rinfo=$_REQUEST['request_info'];
    $rdesc=$_REQUEST['requestdesc'];
    $rname=$_REQUEST['requestername'];
    $radd1=$_REQUEST['address1'];
    $radd2=$_REQUEST['address2'];
    $rcity=$_REQUEST['requestercity'];
    $rstate=$_REQUEST['requesterstate'];
    $rzip=$_REQUEST['requesterzip'];
    $remail=$_REQUEST['requesteremail'];
    $rmobile=$_REQUEST['requestermobile'];
    $rtech=$_REQUEST['assigntech'];
    $rdate=$_REQUEST['inputdate'];
    //echo $rinfo ,$rdesc , $rname, $radd1, $radd2, $rcity, $rstate, $rzip, $remail, $rmobile, $rdate;
          
    $sql="INSERT INTO assignwork_tb(request_id,request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,assign_tech,assign_date)VALUES
        ('$rno','$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rtech','$rdate')";
    if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Assign technician Successfully!</div>';
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to Assign!</div>'; 
    }     
}
?>

<div  class="col-sm-5 mt-5 jumbotron float-center" ><!-- second column---->
<form class="mx-5" action="" method="POST">
<h5 clas="text-center">Assign Work Order Request</h5><hr class="bg-dark"><br>
    <div class="form-group">
        <label for="request_id">Request ID</label>
        <input type="text" readonly class="form-control" id="request_id" placeholder="Request id" name="request_id" value="<?php if(isset($row['request_id']))echo $row['request_id']; ?>">
     </div>
    <div class="form-group">
        <label for="request_info">Request Info</label>
        <input type="text" required class="form-control" id="request_info" placeholder="Request info" name="request_info" value="<?php if(isset($row['request_info']))echo $row['request_info']; ?>">
     </div>
     <div class="form-group">
        <label for="requestdesc">Description</label>
        <input type="text" required class="form-control" id="requestdesc" placeholder="Write Description" name="requestdesc" value="<?php if(isset($row['request_desc']))echo $row['request_desc']; ?>">
     </div>
     <div class="form-group">
        <label for="requestername">Name</label>
        <input type="text"required  class="form-control" id="requestername" placeholder="Enter Your Name" name="requestername" value="<?php if(isset($row['requester_name']))echo $row['requester_name']; ?>">
     </div>
     <div class="form-row">
        <div class="form-group col-md-6">
             <label for="address1">Address line1</label>
             <input type="text" required class="form-control" id="address1" placeholder="House Name" name="address1" value="<?php if(isset($row['requester_add1']))echo $row['requester_add1']; ?>">
         </div>
         <div class="form-group col-md-6">
             <label for="address2">Address line2</label>
             <input type="text"required  class="form-control" id="address2" placeholder="Colony Name" name="address2" value="<?php if(isset($row['requester_add2']))echo $row['requester_add2']; ?>">
     </div>
     <div class="form-row">
        <div class="form-group col-md-5">
             <label for="inputCity">City</label>
             <input type="text" required class="form-control" id="inputCity" placeholder="city" name="requestercity" value="<?php if(isset($row['requester_city']))echo $row['requester_city']; ?>">
         </div>
         <div class="form-group col-md-4">
             <label for="inputState">State</label>
             <input type="text" required class="form-control" id="inputState" placeholder="state" name="requesterstate" value="<?php if(isset($row['requester_state']))echo $row['requester_state']; ?>">
         </div>
         <div class="form-group col-md-3">
             <label for="inputZip">pin</label>
             <input type="number" required class="form-control" id="inputZip" placeholder="pin code" name="requesterzip" onkeypress="isInputNumber(event)" value="<?php if(isset($row['requester_zip']))echo $row['requester_zip']; ?>">
         </div>
     </div>
     <div class="form-row">
        <div class="form-group col-md-8">
             <label for="inputEmail">Email</label>
             <input type="email" required class="form-control" id="inputEmail" placeholder="Enter Email" name="requesteremail" value="<?php if(isset($row['requester_email']))echo $row['requester_email']; ?>">
         </div>
         <div class="form-group col-md-4">
             <label for="inputMobile">Mobile</label>
             <input type="text" required class="form-control" id="inputMobile"  name="requestermobile" onkeypress="isInputNumber(event)" value="<?php if(isset($row['requester_mobile']))echo $row['requester_mobile']; ?>">
         </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
             <label for="assigntech">Assign to Technician</label>
             <input type="text" required class="form-control" id="assigntech"  name="assigntech" >
         </div>
         <div class="form-group col-md-6">
             <label for="inputDate">Date</label>
             <input type="date" required class="form-control" id="inputDate"  name="inputdate" >
         </div>
    </div>
    <div class="float-right">
     <button type="submit" class="btn btn-success" name="assign">Assign</button>
     <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
<?php if(isset($msg)){ echo $msg;} ?>
</div>
<!---- only number ---->
