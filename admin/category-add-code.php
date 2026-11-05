<?php

$cat_name  = $_POST['cat_name'];

//$cat_img  = $_POST['cat_img'];

$cat_img  ="img/category/"  . $_FILES['cat_img']['name'];
$cat_path  ="../img/category/"  . $_FILES['cat_img']['name'];
move_uploaded_file($_FILES['cat_img']['tmp_name'],$cat_path);


$q="insert into categorys (cat_name,cat_img) values('$cat_name','$cat_img')";

include "connection.php";

if(mysqli_query($con,$q))
print "success";
else
print "fail";


?>