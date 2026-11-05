<?php
session_start(); // 👈 IMPORTANT
include "admin/connection.php";

// Form data
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$role = $_POST['role'];

// ================= ADMIN REGISTER =================
if($role == "admin"){

    $q = "INSERT INTO admins (a_name, email, password) 
          VALUES ('$user_name', '$email', '$password')";

    if(mysqli_query($con, $q)){

        // 🔥 ADMIN SESSION SET
        $admin_id = mysqli_insert_id($con);

        $_SESSION['admin'] = [
            'id' => $admin_id,
            'name' => $user_name,
            'email' => $email
        ];

        // 🔥 DIRECT ADMIN PANEL
        header("Location: admin/index.php");
        exit();

    } else {
        echo "Admin Registration Failed";
    }

// ================= USER REGISTER =================
} else {

    $q = "INSERT INTO users (user_name, email, address, mobile_no, password) 
          VALUES ('$user_name', '$email', '$address', '$mobile_no', '$password')";

    if(mysqli_query($con, $q)){
        echo "<script>alert('User Registered Successfully'); window.location='login.php';</script>";
    } else {
        echo "User Registration Failed";
    }

}
?>