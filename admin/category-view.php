<?php
session_start();
include "connection.php";

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

<h1 class="mt-4">Category View</h1>

<div class="card mb-4">
<div class="card-body">

<table class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php
// 🔥 DELETE (admin wise)
if(isset($_GET['cat_id'])){
    mysqli_query($con,"DELETE FROM categorys 
    WHERE cat_id=".$_GET['cat_id']." 
    AND admin_id='$admin_id'");
}

// 🔥 FILTER BY ADMIN
$q="SELECT * FROM categorys 
WHERE admin_id='$admin_id'";

$rs= mysqli_query($con,$q);

while($row=mysqli_fetch_array($rs)){
?>

<tr>
<td><?php echo $row['cat_id']; ?></td>
<td><?php echo $row['cat_name']; ?></td>

<td>
<img src="../<?php echo $row['cat_img']; ?>" width="100px"/>
</td>

<td>
<a href="category-edit.php?cat_id=<?php echo $row['cat_id']; ?>">
<button class='btn btn-primary'>EDIT</button>
</a>

<a onclick="return confirm('Delete?')" 
href="category-view.php?cat_id=<?php echo $row['cat_id']; ?>">
<button class='btn btn-danger'>DELETE</button>
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