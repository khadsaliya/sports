<?php
include "admin/connection.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// ADMIN LOGIN
if($role == "admin"){

    $qadmin = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $rsadmin = mysqli_query($con, $qadmin);

    if(mysqli_num_rows($rsadmin) > 0){
        $rowadmin = mysqli_fetch_assoc($rsadmin);

        $_SESSION['admin_id'] = $rowadmin['a_id'];
        $_SESSION['admin_name'] = $rowadmin['a_name'];

        header("Location: admin/index.php");
        exit();

    } else {
        echo "<script>alert('Invalid Admin Login'); window.location='login.php';</script>";
    }

// USER LOGIN
} else {

    $quser = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $rsuser = mysqli_query($con, $quser);

    if(mysqli_num_rows($rsuser) > 0){
        $rowuser = mysqli_fetch_assoc($rsuser);

        $_SESSION['user'] = $rowuser;

        header("Location: index.php");
        exit();

    } else {
        echo "<script>alert('Invalid User Login'); window.location='login.php';</script>";
    }
}
?>