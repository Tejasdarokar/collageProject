<?php 
include("dbConnection.php");
if(isset($_REQUEST['rSignup']))
{
    //email already used or not
$sql="SELECT email From register WHERE email='".$_REQUEST['rEmail']."'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $msg=$msg='<div class="alert alert-danger">Email Already used!</div>';
}else{
$name=$_REQUEST['rName'];
$email=$_REQUEST['rEmail'];
$password=$_REQUEST['rPassword'];
$sql="INSERT INTO register(name,email,password) values('$name','$email','$password')";

if($conn->query($sql)==TRUE){
    $msg='<div class="alert alert-success">Registration Successfully !</div>';   
}else{
    $msg='<div class="alert alert-danger">Registration Unsuccessfully !</div>';
}
}
}
?>

<div class="Container pt-5">
    <h2 class="text-center">Create an account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                <i class="fas fa-user"></i><label for="rName" class="font-weight-bold pl-2">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="rName"  title="Name must be Alphabatic." required>
                </div>
                <div class="form-group">
                <i class="fas fa-envelope"></i><label for="rName" class="font-weight-bold pl-2">Email</label>
                <input type="email" required class="form-control" placeholder="example@gmail.com" name="rEmail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <small class="form-text">W'll never save your password.</small>               
                </div>               
                <div class="form-group">
                <i class="fas fa-lock"></i><label for="rPassword"  class="font-weight-bold pl-2">Password</label>
                <input type="password" required class="form-control" placeholder="Enter Password" name="rPassword"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup" >Sign up</button>
                <small style="font-size:10px;color:red;">Note - By clicking Sign up,you agree to our Terms, Data Policy and Cookie Policy.</small>
                <?php if(isset($msg)){ echo $msg;} ?> 
            </form>                    
        </div>
    </div>
</div>