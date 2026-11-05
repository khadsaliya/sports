<?php

session_start();


$p_id = $_POST['p_id'];
$u_id =1;
if(isset($_SESSION['user'])){
    $u_id= $_SESSION['user']['u_id'];
}


$comment = $_POST['comment'];
$rev_date = date("Y-m-d");


$q="insert into reviews (p_id,u_id,comment,rev_date) values('$p_id','$u_id','$comment','$rev_date')";

include "admin/connection.php";
print $q;

if(mysqli_query($con,$q)){
echo "success";
header("location:single-product.php?p_id=" . $p_id);
}
else
{
echo "fail";
//header("location:register.php");
}

?>
