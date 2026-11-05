<?php include "admin-header.php"; ?>


<div id="layoutSidenav_content">
    <main>
        <form action="category-add-code.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Category Add</h1>
            <div class="card mb-4">
                <div class="card-body">



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="cat_name"
                            placeholder=" ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="cat_img"
                            placeholder=" ">
                    </div>
                    



                </div>
            </div>
            <div>
                       <input type ="submit" value="submit">
                        
                    </div>
        </div>
</form>
    </main>




    <?php include "admin-footer.php"; ?>