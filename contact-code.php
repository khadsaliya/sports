<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$q="insert into contact (name,email,subject,message) values('$name','$email','$subject','$message')";


include "admin/connection.php";

if(mysqli_query($con,$q)){
echo "success";
header("location:contact-conformation.php");
}
else
{
echo "fail";
header("location:contact.php");
}

?>