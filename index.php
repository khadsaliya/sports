	<?php include "header.php"; ?>
	
	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Born to play,<br>Born to win</h1>
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/log-removebg-preview-removebg-preview.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Born to play,<br>Born to win</h1>
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/log-removebg-preview-removebg-preview.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/cric.jpg" alt="">
									<div class="deal-details">
										<h6 class="deal-title">Cricket</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c8.jpg" alt="">
									<div class="deal-details">
										<h6 class="deal-title">Table Tennis</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
									<div class="deal-details">
										<h6 class="deal-title">Sports Shoes</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c6.jpeg" alt="">
									<div class="deal-details">
										<h6 class="deal-title">Javelin Throw</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="img/category/c7.jpeg" alt="">
							<div class="deal-details">
								<h6 class="deal-title">Bad minton</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							
						</div>
					</div>
				</div>
				<div class="row">
			
					
					<!-- single product -->
					<?php 

	$q="select * from products order by rand() limit 4";  
$rs= mysqli_query($con,$q);
	while($row=mysqli_fetch_array($rs)){
	  ?>
	<!-- single product -->
	<div class="col-lg-3 col-md-6">
		<div class="single-product">
			<img style="height:250px" src="<?php echo $row['p_photos'] ?>" alt="">
			<a class="genric-btn info radius" href="single-product.php?p_id=<?php echo $row['p_id'];?>">
				View Products 
			</a>
			<div class="product-details">
				<h6><?php echo $row['p_name'] ?></h6>
				<div class="price">
					<h6>&#8377; <?php echo $row['p_prise'] ?> /-</h6>
<h6 class="l-through">&#8377;  <?php echo $row['p_prise'] + 50 ?> </h6>
				</div>
			
			</div>
		</div>
	</div>
	
	<!-- single product -->
	<?php } ?>

					<!-- single product -->
				</div>
</div>
					

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col single-img" >
					<img class="img-fluid d-block mx-auto" src="img/brand/puma1.png" alt="">
</div>
				<div class="col single-img" >
					<img class="img-fluid d-block mx-auto" src="img/brand/adidas.png" alt="">
</div>
				<div class="col single-img" >
					<img class="img-fluid d-block mx-auto" src="img/brand/reebok.png" alt="">
</div>
				<div class="col single-img" >
					<img class="img-fluid d-block mx-auto" src="img/brand/under.png" alt="">
</div>
				<div class="col single-img" >
					<img class="img-fluid d-block mx-auto" src="img/brand/wilson1.png" alt="">
</div>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

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
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>