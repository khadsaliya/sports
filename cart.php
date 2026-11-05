    <?php include "header.php"; ?>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product image</th>
                                <th scope="col">Product </th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total </th>
                                
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php

if(isset($_GET['cart_id'])){

  $qdel = "delete from carts where cart_id=" . $_GET['cart_id'];
  mysqli_query($con,$qdel);
}


if(isset($_SESSION['user']['u_id'])){
$u_id = $_SESSION['user']['u_id'] ;
}else{
    $u_id= 99999999999999999;
}


$q="select a.*,b.cart_id,b.qty from products  a,carts b where a.p_id=b.p_id and b.u_id=$u_id";

$rs= mysqli_query($con,$q);
$total=0;
while($row=mysqli_fetch_array($rs)){
    $total=$total+$row['p_prise'] *$row['qty'];
?>

                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="<?php echo $row['p_photos'] ?>" width="100px" alt="">
                                        </div>
                                        </div>
                                        </td>
                                        <td>
                                        <div class="media-body">
                                            <p><?php echo $row['p_name'] ?></p>
                                        </div>
</td>
                              
                                <td>
                                    <h5><?php echo $row['p_prise'] ?>   </h5>
                                </td>
                               
                                <td>
                                    <h5><?php echo $row['qty'] ?>   </h5>
                                </td>
                                
                                <td>
                                    <h5><?php echo $row['p_prise']*$row['qty'] ?>   </h5>
                                </td>
                                
                             
<td><a onclick="return confirm('do you want to delete it')"
                                    href="cart.php?cart_id=<?php echo $row['cart_id'];?>">
                                    <button type='button' class='genric-btn danger circle'>DELETE</button>  </a></td>
                            </tr>
                            <?php }?>
                            
                            <tr class="bottom_button">
                                <td colspan="4">
                                    &nbsp;
                                </td>
                              
                               </tr>
                               <tr class="bottom_button">
                                <td ><h4>Total</h4></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td ><h4><?php echo $total;?></h4>   </td>
                                <td> &nbsp;</td>
                              
                               </tr>
                            <tr class="bottom_button">
                                                            <td colspan="3">
                                    <!-- <a class="btn btn-danger" href="order-code.php">Order Now</a> -->
                                     <a class="btn btn-danger" href="order-code.php?amount=<?php echo $total; ?>">Order Now</a>
                                </td>
                              
                               </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
   <?php include "footer.php"; ?>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>