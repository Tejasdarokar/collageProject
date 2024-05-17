<?php
define('TITLE','Work Order');
include("include/header.php");
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
?>

<!--- 2nd column ----------->
<div class="col-sm-9 col-md-10 mt-5">
<?php
$sql="SELECT * FROM assignwork_tb";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Req id</th>';
    echo '<th scope="col">Req Info</th>';
    echo '<th scope="col">Name</th>';
    echo '<th scope="col">Address</th>';
    echo '<th scope="col">City</th>';
    echo '<th scope="col">Mobile</th>';
    echo '<th scope="col">Technician</th>';
    echo '<th scope="col">Assign date</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row=$result->fetch_Assoc()){
        echo '<tr>';
        echo '<td>'.$row['request_id'].'</td>';
        echo '<td>'.$row['request_info'].'</td>';
        echo '<td>'.$row['requester_name'].'</td>';
        echo '<td>'.$row['requester_add1'].",<br>".$row['requester_add2'].",<br>".$row['requester_zip'].'</td>';
        echo '<td>'.$row['requester_city'].'</td>';
        echo '<td>'.$row['requester_mobile'].'</td>';
        echo '<td>'.$row['assign_tech'].'</td>';
        echo '<td>'.$row['assign_date'].'</td>';
        echo '<td>';
        echo '<form action="viewassignwork.php" method="POST" class="d-inline mr-2">';
        echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
        echo '<button class="btn btn-warning d-inline" name="view" value="view" type="submit"><i class="far fa-eye"></i></button>';
        echo '</form>';
        echo '<form action="" method="POST" class="d-inline">';
        echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
        echo '<button class="btn btn-danger" name="delete" value="delete" type="submit"><i class="far fa-trash-alt"></i></button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}else{
    echo '<div class="alert alert-warning">No Record Found!</div>';
}
if(isset($_REQUEST['delete']))
{
    $sql="DELETE FROM assignwork_tb WHERE request_id={$_REQUEST['id']}";
    if($conn->query($sql)==true){
        echo '<meta http-equive="refresh" content=" 0;URL=?deleted"/>';
    }else{
        echo "Unable to delete data";
    }
}
?>
</div>

<?php
include("include/footer.php");
?>