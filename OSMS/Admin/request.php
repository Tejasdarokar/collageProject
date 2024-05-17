<?php
define('TITLE','Request');
include("include/header.php");
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
?>
<!---- 2nd coloum ----->
<div class="col-sm-4 mb-5">
<?php
$sql="SELECT request_id, request_info, request_desc, request_date FROM submitrequest_db";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo'<div class="card mt-4 mx-5">';
        echo '<div class="card-header">';
        echo 'Request ID:'.$row['request_id'];
        echo '</div>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Request Info: '.$row['request_info'].'</h5>';
        echo '<p class="card-text">Request Desc: '.$row['request_desc'].'</p>';
        echo '<p class="card-text">Request Date: '.$row['request_date'].'</p>';
        echo '<div class="float-right">';
        echo '<form action=""  method="POST">';
        echo '<input type="hidden" name="id" value='.$row['request_id'].'>';
        echo '<input type="submit" class="btn btn-primary mr-3" value="View" name="view">';
        echo '<input type="submit" class="btn btn-danger" value="Delete" name="close">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>
</div><!---- end 2nd coloum ----->

<?php
include('assignworkform.php');//we add form code here
?>
<?php
include("include/footer.php");
?>