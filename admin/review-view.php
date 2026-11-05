<?php include "admin-header.php"; ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Review View </h1>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Product Name</th>
                                <th>Content</th>
                                <th>Review Date</th>
                                <th>Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>

                         
                        <?php
                             if(isset($_GET['rev_id'])){

                                $qdel = "delete from reviews where rev_id=" . $_GET['rev_id'];
                                mysqli_query($con,$qdel);
                              }


                        // $q="select a.*b.user_name from users  a,products b where a.u_id=b.u_id";
                        $q="select a.*,b.user_name,c.p_name from reviews a,users b,products c where a.u_id=b.u_id and a.p_id=c.p_id";
                        $rs= mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs)){
                          ?>
                            <tr>
                                <td><?php echo $row['rev_id'] ?> </td>
                                <td><?php echo $row['user_name'] ?> </td>
                                <td><?php echo $row['p_name'] ?> </td>
                                <td><?php echo $row['comment'] ?> </td>
                                <td><?php echo $row['rev_date'] ?> </td>
                                <td>
                                    <a onclick="return confirm('do you want to delete it')"
                                    href="review-view.php?rev_id=<?php echo $row['rev_id'];?>">
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