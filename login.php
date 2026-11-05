<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

	<!-- Header -->
	<?php include "header.php";?>

	<!-- Banner -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Login</a>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!-- Login Area -->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">

				<!-- Left Image -->
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>Create account to enjoy shopping</p>
							<a class="primary-btn" href="register.php">Create an Account</a>
						</div>
					</div>
				</div>

				<!-- Right Login Form -->
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>

						<form class="row login_form" action="login-code.php" method="post">

							<!-- Email -->
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>

							<!-- Password -->
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>

							<!-- 🔥 Role Selection (IMPORTANT) -->
							<div class="col-md-12 form-group">
								<select name="role" class="form-control" required>
									<option value="user">Login as User</option>
									<option value="admin">Login as Admin</option>
								</select>
							</div>

							<!-- Button -->
							<div class="col-md-12 form-group">
								<button type="submit" class="primary-btn">Log In</button>
							</div>

						</form>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php include "footer.php";?>

	<!-- JS -->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

</body>
</html>