<?php
define('TITLE','Dashboard');
include("include/header.php");
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
$sql="SELECT max(request_id) FROM submitrequest_db";
$result=$conn->query($sql);
$row=$result->fetch_row();
$submitrequest=$row[0];

$sql="SELECT max(request_id) FROM assignwork_tb";
$result=$conn->query($sql);
$row=$result->fetch_row();
$assignwork=$row[0];

$sql="SELECT *  FROM technician_tb";
$result=$conn->query($sql);
$totaltech=$result->num_rows;
?> 
<!-- 3 color box------->
<div class="col-sm-9 col-md-10">

<div class="row text-center mx-5 ">

<div class="col-sm-4 mt-5">
<div class="card text-white bg-danger mb-3" style="max-width:18rem;">
<div class="card-header">Requests Received</div>
<div class="card-bady">
<h4 class="card-title mt-2"><?php echo $submitrequest; ?></h4>
<a href="request.php" class="btn text-white">View</a>
</div>
</div>
</div>

<div class="col-sm-4 mt-5">
<div class="card text-white bg-success mb-3" style="max-width:18rem;">
<div class="card-header">Assigned Work</div>
<div class="card-bady">
<h4 class="card-title mt-2"><?php echo $assignwork; ?></h4>
<a href="workorder.php" class="btn text-white">View</a>
</div>
</div>
</div>

<div class="col-sm-4 mt-5 ">
<div class="card text-white bg-warning mb-3" style="max-width:18rem;">
<div class="card-header">No. Of Technician</div>
<div class="card-bady">
<h4 class="card-title mt-2"><?php echo $totaltech; ?></h4>
<a href="technician.php" class="btn text-white">View</a>
</div>
</div>
</div>
</div>

<!-- List ------->
<div class="mx-5 mt-5 text-center text-center">
<p class="bg-dark text-white p-2">List of Requester</p>
<?php
$sql="SELECT * FROM register";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">Requester Id</th>
    <th scope="col">Name</th>
    <th scope="col">email</th>
    </tr>
    </thead>
    <tbody>';
    while($row=$result->fetch_assoc()){
    echo '<tr>';
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["name"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '</tr>';
    }
   echo ' </tbody>
    </table>';   
}else{
    echo '<div class="alert alert-warning">Record Not Found!<div>';
}
?>
</div>
</div><!--- end 2nd coloum --->

</div><!--- end row --->
</div><!--- end container--->
<!--- end --->
<!-- Javascript---->
<script src="../js/jquery.min.js"></script> 
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>  
   <script src="../js/all.min.js"></script>  
   <!-- Javascript end----> 
</body>
</html>
</body>
</html>