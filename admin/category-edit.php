<?php include "admin-header.php";
$q="select * from categorys where cat_id=" . $_GET['cat_id'];
$rs=mysqli_query($con,$q);

$row=mysqli_fetch_array($rs);
?>
<div id="layoutSidenav_content">
    <main>
        <form action="category-edit-code.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Category Edit</h1>
            <div class="card mb-4">
                <div class="card-body">


                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="hidden" class="form-control" name="cat_id"
                            placeholder=" " value= <?php echo $row['cat_id'] ?> >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="cat_name"
                            placeholder=" "  value=<?php echo $row['cat_name'] ?> >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="cat_img"
                            placeholder=" ">
                            <img src="../<?php echo $row['cat_img'] ?>" width="100px"/>

                    </div>
                    



                </div>
            </div>
            <div>
                       <input type ="submit" value="Edit">
                        
                    </div>
        </div>
</form>
    </main>




    <?php include "admin-footer.php"; ?>