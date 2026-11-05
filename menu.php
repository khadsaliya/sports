
<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/sportss.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<!-- <li class="nav-item submenu dropdown"> -->
							<li class="nav-item"><a class="nav-link" href="category.php">shop</a></li>
								<!-- <ul class="dropdown-menu"> -->
									<!-- <li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li> -->
									<!-- <li class="nav-item"><a class="nav-link" href="single-product.php">Product Details</a></li> -->
									<!-- <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li> -->
									<!-- <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li> -->
									<!-- <li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li> -->
								<!-- </ul> -->
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							<?php
							if(!isset($_SESSION['user'])){
							?>		
							
							<li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
								
							<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
							<?php } else { ?>
								<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
							<?php } ?>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">

								
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							
							</li>
						</ul>
					</div>
				</div>
			</nav>
		