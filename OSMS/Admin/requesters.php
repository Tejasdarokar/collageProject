<?php
define('TITLE','Requester');
include("include/header.php");
session_start();
if(isset($_SESSION['is_adminlogin'])){
 $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script>location.href='login.php'</script>";
}
?>
<!----- 2nd column -------->
<div class="col-sm-9 col-md-10 mt-5 text-center">
<p class="bg-dark text-white p-2 text-center">List of Requester</p>
<?php
$sql="SELECT * FROM register";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">ID</th>';
    echo '<th scope="col">Name</th>';
    echo '<th scope="col">Email</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row=$result->fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>';
        echo '<form action="editreq.php" method="POST" class="d-inline mr-2">';
        echo '<input type="hidden" name="id" value='.$row['id'].'>';
        echo '<button class="btn btn-info d-inline mr-1" name="edit" value="edit" type="submit"><i class="fas fa-pen"></i></button>';
        echo '</form>';
        echo '<form action="" method="POST" class="d-inline">';
        echo '<input type="hidden" name="id" value='.$row['id'].'>';
        echo '<button class="btn btn-secondary" name="delete" value="delete" type="submit"><i class="far fa-trash-alt"></i></button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo'</tbody>';
    echo '</table>';
}else{
 echo '0 Result';
}
?>
</div>
<?php
if(isset($_REQUEST['delete']))
{
    $sql="DELETE FROM register WHERE id={$_REQUEST['id']}";
    if($conn->query($sql)==true){
        echo '<meta http-equive="refresh" content=" 0;URL=?deleted"/>';
    }else{
        echo "Unable to delete data";
    }
}
?>
</div><!---  end row--->
<div class="float-right"><a href="insertreq.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
</div><!---  end container--->
<?php
include("include/footer.php");
?>