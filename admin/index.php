<?php
session_start();
include '../admin/connection.php';

// 🔒 Login check
if(!isset($_SESSION['admin_id'])){
    header("Location: ../login.php");
    exit();
}

$admin_id = $_SESSION['admin_id'];
?>

<?php include "admin-header.php"; ?>

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">

<h1 class="mt-4">Admin Home Page</h1>

<h2>WELCOME <?php echo $_SESSION['admin_name']; ?></h2>

<div class="card mb-4">
<h3>LATEST ORDERS</h3>

<div class="card-body">

<table class="table table-striped">
<thead>
<tr>
<th>User Info</th>
<th>Product</th>
<th>Qty</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php
// DELETE
if(isset($_GET['o_id'])){
    mysqli_query($con,"DELETE FROM orders WHERE o_id=".$_GET['o_id']." AND admin_id='$admin_id'");
}

// FILTER BY ADMIN
$q="SELECT a.*, b.user_name, b.email, b.mobile_no, b.address, c.p_name, c.p_prise
FROM orders a
JOIN users b ON a.u_id=b.u_id
JOIN products c ON a.p_id=c.p_id
WHERE a.admin_id='$admin_id'
ORDER BY a.o_id DESC";

$rs=mysqli_query($con,$q);

while($row=mysqli_fetch_array($rs)){
?>

<tr>
<td>
<?php echo $row['user_name']; ?><br>
<?php echo $row['email']; ?><br>
<?php echo $row['mobile_no']; ?><br>
<?php echo $row['address']; ?>
</td>

<td>
<?php echo $row['p_name']; ?><br>
Rs <?php echo $row['p_prise']; ?>
</td>

<td><?php echo $row['o_qty']; ?></td>
<td><?php echo $row['o_date']; ?></td>

<td>
<a onclick="return confirm('Delete?')" href="?o_id=<?php echo $row['o_id']; ?>">
<button class="btn btn-danger">Delete</button>
</a>
</td>
</tr>

<?php } ?>

</tbody>
</table>

</div>
</div>

</div>
</main>

<?php include "admin-footer.php"; ?>