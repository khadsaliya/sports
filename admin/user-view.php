<?php include "admin-header.php"; ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User view</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                        <?php

                        if(isset($_GET['u_id'])){

                        $qdel = "delete from users where u_id=" . $_GET['u_id'];
                        mysqli_query($con,$qdel);
                        }

                        $q="select * from users";
                        $rs= mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs)){
                          ?>
                            <tr>
                                <td><?php echo $row['u_id'] ?> </td>
                                <td><?php echo $row['user_name'] ?> </td>
                                <td><?php echo $row['address'] ?> </td>
                                <td><?php echo $row['mobile_no'] ?> </td>
                                <td><?php echo $row['email'] ?> </td>
                                <td>
                                    <a onclick="return confirm('do you want to delete it')"
                                    href="user-view.php?u_id=<?php echo $row['u_id'];?>">
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