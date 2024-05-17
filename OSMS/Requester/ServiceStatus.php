<?php
define('TITLE','Service Status');
include('include/header.php');
include('../dbConnection.php');
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
    echo "<script> location.href='Requesterlogin.php'</script>";
}
?>
<!--- start 2nd column ------->
<div class="col-sm-6 mt-5 mx-3 mb-3">
<form action="" method="post" class="form-inline d-print-none">
<div class="form-group mr-3">
<label for="checkid">Enter Request ID: </label>
<input type="text" class="form-control ml-2" name="checkid" id="checkid">
</div>
<button type="submit" class="btn btn-danger">Search</button>
</form>
<?php
if(isset($_REQUEST['checkid'])){
    $sql="SELECT * FROM assignwork_tb WHERE request_id={$_REQUEST['checkid']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if($row){
    if(($row['request_id']==$_REQUEST['checkid'])){
?>

<h3 class="text-center mt-3">Assigned Work Details</h3> 
<table class="table table-bordered">
<tbody>
<tr>
<td>Request Id</td>
<td><?php if(isset($row['request_id'])){echo $row['request_id'];}?></td>
</tr>
<tr>
<td>Request Info</td>
<td><?php if(isset($row['request_info'])){echo $row['request_info'];}?></td>
</tr>
<tr>
<td>Request Description</td>
<td><?php if(isset($row['request_desc'])){echo $row['request_desc'];}?></td>
</tr>
<tr>
<td>Name</td>
<td><?php if(isset($row['requester_name'])){echo $row['requester_name'];}?></td>
</tr>
<tr>
<td>Address Line 1</td>
<td><?php if(isset($row['requester_add1'])){echo $row['requester_add1'];}?></td>
</tr>
<tr>
<td>Address Line 2</td>
<td><?php if(isset($row['requester_add2'])){echo $row['requester_add2'];}?></td>
</tr>
<tr>
<td>City</td>
<td><?php if(isset($row['requester_city'])){echo $row['requester_city'];}?></td>
</tr>
<tr>
<td>State</td>
<td><?php if(isset($row['requester_state'])){echo $row['requester_state'];}?></td>
</tr>
<tr>
<td>Pin</td>
<td><?php if(isset($row['requester_zip'])){echo $row['requester_zip'];}?></td>
</tr>
<tr>
<td>Email</td>
<td><?php if(isset($row['requester_email'])){echo $row['requester_email'];}?></td>
</tr>
<tr>
<td>Mobile No</td>
<td><?php if(isset($row['requester_mobile'])){echo $row['requester_mobile'];}?></td>
</tr>
<tr>
<td>Assign Technicion</td>
<td><?php if(isset($row['assign_tech'])){echo $row['assign_tech'];}?></td>
</tr>
<tr>
<td>Assign Date</td>
<td><?php if(isset($row['assign_date'])){echo $row['assign_date'];}?></td>
</tr>
<tr>
<td>Customer sign</td>
<td></td>
</tr>
<tr>
<td>Technision sign</td>
<td></td>
</tr>
</tbody>
</table>
<div class="text-center">
<form action="" class="mt-3 d-print-none">
<input class="btn btn-danger" type="submit" value="print"onClick="window.print()">
<input class="btn btn-secondary" type="submit" value="close">
</form>
</div>
<?php
}
}else{
    echo '<div class="alert alert-warning mt-4">Your Request is still pending</div>';
}
}
?>
</div>
<?php 
include('include/footer.php');
?>