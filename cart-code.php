<?php

include "admin/connection.php";

session_start();
$u_id = $_SESSION['user']['u_id'] ;


$p_id= $_POST['p_id'];
$qty = $_POST['qty'];



$q="insert into carts (u_id,p_id,qty) values('$u_id','$p_id','$qty')";

if(mysqli_query($con,$q)){
echo "success";
 header("location:cart.php");
}
else
{
echo "fail";
//header("location:register.php");
}

?>