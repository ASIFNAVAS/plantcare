
<?php 

if (isset($_POST['upload'])){

  $target = "img/".basename($_FILES['image']['tmp_name']);

  $db = mysqli_connect("localhost", "root", "", "plantcare");


  $text = $_POST['fname'];
  $text1 = $_POST['lname'];
  $text2 = $_POST['username'];
  $text3 = $_POST['email'];
  $text4 = $_POST['password'];

  

  $sql = "INSERT INTO signup (fname, lname, username, email, password) VALUES ('$text', '$text1', '$text2', '$text3', '$text4') ";

  mysqli_query($db, $sql);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-6 col-xl-8 col-lg-8 col-md-10 col-sm-9">
					<div class="text-center my-5">
						<a class="navbar-brand loginlabel" href="index.html">PLANTCARE</a>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form class="row g-3 needs-validation" novalidate>
								<div class="col-md-6 ">
								  <label for="validationCustom01" class="form-label">First name</label>
								  <input type="text" class="form-control" id="validationCustom01" name="fname" required>
								  <div class="valid-feedback">
									Looks good!
								  </div>
								</div>
								<div class="col-md-6">
								  <label for="validationCustom02" class="form-label">Last name</label>
								  <input type="text" class="form-control" id="validationCustom02" name="lname" required>
								  <div class="valid-feedback">
									Looks good!
								  </div>
								</div>
								<div class="col-md-12">
								  <label for="validationCustomUsername" class="form-label">Username</label>
								  <div class="input-group has-validation">
									<span class="input-group-text" id="inputGroupPrepend">@</span>
									<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="username" required>
									<div class="invalid-feedback">
									  Please choose a username.
									</div>
								  </div>
								</div>
								<div class="col-md-12">
								  <label for="validationCustom03" class="form-label">Email</label>
								  <input type="email" class="form-control" id="validationCustom03" name="email" required>
								  <div class="invalid-feedback">
									Please provide a valid Email.
								  </div>
								</div>
								
								<div class="col-md-12">
								  <label for="validationCustom05" class="form-label">Password</label>
								  <input type="password" class="form-control" id="validationCustom05" name="password" required>
								  <div class="invalid-feedback">
									Please provide a valid password.
								  </div>
								</div>
								<div class="col-12">
								  <div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
									<label class="form-check-label" for="invalidCheck">
									  Agree to terms and conditions
									</label>
									<div class="invalid-feedback">
									  You must agree before submitting.
									</div>
								  </div>
								</div>
								<div class="col-12">
								  <button class="btn btn-primary" type="submit">Submit form</button>
								</div>
							  </form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="login.html" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="login.js"></script>
</body>
</html>
