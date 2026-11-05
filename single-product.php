
	<!-- Start Header Area -->
	<?php include "header.php";?>
	<!-- End Header Area -->
	<?php

$q="select a.*,b.cat_name from products  a,categorys b where a.cat_id=b.cat_id and  a.p_id=" . $_GET['p_id'];
$rs= mysqli_query($con,$q);
$row=mysqli_fetch_array($rs);
//print_r($row);

// print $q;

	?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.php">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	


	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
				
						
				
							<img style="  margin-left:100px ;
" src="<?php echo $row['p_photos'] ?>" Width="400px"Height="450px" alt=""/>
						
						
					
				</div>
				<div class="col-lg-5 offset-lg-1">
				<form method="post" action="cart-code.php" >
					<div class="s_product_text">
						<h3><?php echo $row['p_name'] ?> </h3>
						<h2>&#8377;<?php echo $row['p_prise'] ?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : <?php echo $row['cat_name'] ?></a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p><?php echo $row['p_description'] ?></p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">

							
								<input type="hidden" name="p_id" value="<?php echo $_GET['p_id'];?>" />
							
							<?php 
							if(isset($_SESSION['user'])){?>

						<button class="genric-btn info radius" type="submit"> Add to Cart </button>
							
							<?php }else{ ?>

								<a href="login.php" class="genric-btn info radius"> Login required to add cart  </a>

							<?php } ?>
						
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				
				
				
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							
							<div class="review_list">
								
								<div class="review_item">
									<?php 
									
									$q="select *  from reviews where p_id=" . $_GET['p_id'] . " order by rev_id desc"; 
									$rs= mysqli_query($con,$q);
									while($row=mysqli_fetch_array($rs)){
									  ?>
									  <p> <?php echo $row['comment'] ?> </p>
									  <hr>
									<?php }	?>
								</div>
							
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
							
								<form class="row contact_form" action="review-code.php" method="post" id="contactForm" novalidate="novalidate">
									<input type="hidden" name="p_id" value="<?php echo $_GET['p_id'];?>" />
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="comment" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		
	</section>
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<?php include "footer.php";?>
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