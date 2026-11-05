<?php include "admin-header.php"; 



$q="select p.*,c.cat_name from products p,categorys c where p.cat_id=c.cat_id and p_id=" . $_GET['p_id'];
$rs= mysqli_query($con,$q);

$row=mysqli_fetch_array($rs);


?>



<div id="layoutSidenav_content">
    <main>
        <form action="product-edit-code.php" method="post" enctype="multipart/form-data">

        <div class="container-fluid px-4">
            <h1 class="mt-4">Product Add</h1>
            <div class="card mb-4">
                <div class="card-body">


                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <input type="hidden" class="form-control" name="p_id"
                            placeholder=" " value="<?php echo $row['p_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="p_name"
                            placeholder=" " value="<?php echo $row['p_name'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                        <input type="text" class="form-control" name="p_prise"
                            placeholder=" " value="<?php echo $row['p_prise'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <textarea class="form-control" name="p_description" rows="3"><?php echo $row['p_description'];?>"</textarea>

                    </div><div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Photo</label>
                        <input type="file" class="form-control" name="p_photos"
                            placeholder=" " >
                            <img src="../<?php echo $row['p_photos'] ?>" width="100px"/>
                    </div><div class="mb-3">
                        
                        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                        <!-- <input type="text" class="form-control" name="cat_id"
                            placeholder=" "> -->
                            <select name="cat_id" class="form-control">
                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                                                            <?php 
                            $q="select * from categorys";
                            $rscat=mysqli_query($con,$q);
                            while($row=mysqli_fetch_array($rscat)){
                            ?>
                                    <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                                <?php } ?>    
                        </select>
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