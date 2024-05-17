<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="newosms";

//create connection

$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    echo '<div class="alert alert-danger">
    <strong>Sorry!</strong>Database not connected.
  </div>';
}
?>