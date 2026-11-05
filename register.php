<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<?php include "header.php";?>

<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">

			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid" src="img/login.jpg" alt="">
					<div class="hover">
						<h4>Already have account?</h4>
						<a class="primary-btn" href="login.php">Login</a>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Register</h3>

					<form action="register-code.php" method="post">

						<input type="text" class="form-control" name="user_name" placeholder="Username" required><br>

						<input type="email" class="form-control" name="email" placeholder="Email" required><br>

						<input type="text" class="form-control" name="address" placeholder="Address" required><br>

						<input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required><br>

						<input type="password" class="form-control" name="password" placeholder="Password" required><br>

						<!-- 🔥 Role Selection -->
						<select name="role" class="form-control" required>
							<option value="user">Register as User</option>
							<option value="admin">Register as Admin</option>
						</select><br>

						<button type="submit" class="primary-btn">Register</button>

					</form>

				</div>
			</div>

		</div>
	</div>
</section>

<?php include "footer.php";?>

</body>
</html>