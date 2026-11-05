<?php
$p_name  = $_POST['p_name'];
$p_prise  = $_POST['p_prise'];
$p_description = $_POST['p_description'];
// $p_photos  = $_POST['p_photos'];
$cat_id  = $_POST['cat_id'];



$p_photos  ="img/product/"  . $_FILES['p_photos']['name'];
$p_photos_path  ="../img/product/"  . $_FILES['p_photos']['name'];
move_uploaded_file($_FILES['p_photos']['tmp_name'],$p_photos_path);



$q="insert into products (p_name,p_prise,p_description,p_photos,cat_id) values('$p_name','$p_prise','$p_description','$p_photos','$cat_id')";

include "connection.php";

if(mysqli_query($con,$q))
print "success";
else
print "fail";


?>