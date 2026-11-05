<?php include "admin-header.php"; ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product View </h1>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category Name</th>
                                <th>Photos</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                           
                          <?php

                          if(isset($_GET['p_id'])){

                            $qdel = "delete from products where p_id=" . $_GET['p_id'];
                            mysqli_query($con,$qdel);
                          }

                        $q="select a.*,b.cat_name from products  a,categorys b where a.cat_id=b.cat_id";
                        $rs= mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs)){
                          ?>
                            <tr>
                                <td><?php echo $row['p_id'] ?> </td>
                                <td><?php echo $row['p_name'] ?> </td>
                                <td><?php echo $row['p_prise'] ?> </td>
                                <td><?php echo $row['p_description'] ?> </td>
                                <td><?php echo $row['cat_name'] ?> </td>
                                <td><img src="../<?php echo $row['p_photos'] ?>" width="100px"/></td>
                                <td>
                                <a                                
                                 href="product-edit.php?p_id=<?php echo $row['p_id'];?>">
                                    <button type='button' class='btn btn-primary'>EDIT</button>   
                             </a>
                             
                                    <a onclick="return confirm('do you want to delete it')"
                                    href="product-view.php?p_id=<?php echo $row['p_id'];?>">
                                    <button type='button' class='btn btn-danger'>DELETE</button>   
                             </a>
                                </td>
                            </tr>

                          <?php
                            } 
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>




    <?php include "admin-footer.php"; ?>