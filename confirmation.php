<?php
session_start();
include "admin/connection.php";

// 🔒 User login check
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

// 🔥 Payment check
if(!isset($_GET['payment_id'])){
    echo "Payment Failed!";
    exit();
}

// 🔥 User data
$u_id = $_SESSION['user']['u_id'];
$payment_id = $_GET['payment_id'];

// 🔥 Example product (temporary)
$p_id = $_SESSION['p_id'];   // ensure set in cart
$qty  = $_SESSION['qty'];

// 🔥 IMPORTANT → assign admin
$admin_id = rand(1,6); // 👈 simple logic

// ✅ Insert order
$q = "INSERT INTO orders (u_id, p_id, o_qty, o_date, payment_id, admin_id)
VALUES ('$u_id','$p_id','$qty',NOW(),'$payment_id','$admin_id')";

mysqli_query($con,$q);

// 🔥 clear cart
unset($_SESSION['p_id']);
unset($_SESSION['qty']);

// ✅ success
echo "<script>
alert('Order placed successfully');
window.location='index.php';
</script>";
?>