<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo 'Learn PHP ' . str_replace('.19', '+', phpversion()); ?></title>
	<link rel="shortcut icon" type="image/png" href="./../../assets/images/php.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		body {font-family: 'Roboto', sans-serif;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3">
				<div class="card my-3 border-primary">
					<div class="card-body py-1">
						<div class="fs-1 text-center text-muted fw-normal">REQUEST Method in PHP</div>
					</div>
				</div>
				<div class="card my-3 border-warning">
					<div class="card-body">
						<form class="row g-3" action="" method="">
							<div class="col-md-6">
								<label for="" class="form-label font-weight-bold">First Name</label>
								<input type="text" class="form-control" name="first_name" />
							</div>								
							<div class="col-md-6">
								<label for="" class="form-label font-weight-bold">Last Name</label>
								<input type="text" class="form-control" name="last_name" />
							</div>
							<div class="col-md-6">
								<label for="" class="form-label font-weight-bold">Email</label>
								<input type="email" class="form-control" name="email" />
							</div>
							<div class="col-md-6">
								<label for="" class="form-label font-weight-bold">Password</label>
								<input type="password" class="form-control" name="password" />
							</div>
							<div class="col-12">
								<label for="" class="form-label font-weight-bold">Address</label>
								<input type="text" class="form-control" name="address" placeholder="1234 Main St" />
							</div>
							<div class="col-md-5">
								<label for="" class="form-label font-weight-bold">City</label>
								<input type="text" class="form-control" name="city">
							</div>
							<div class="col-md-4">
								<label for="" class="form-label font-weight-bold">State</label>
								<select name="state" class="form-select">
									<option selected disabled>Choose...</option>
									<option value="Dhaka">Dhaka</option>
									<option value="Rajshahi">Rajshahi</option>
									<option value="Khulna">Khulna</option>
									<option value="Sylhet">Sylhet</option>
								</select>
							</div>
							<div class="col-md-3">
								<label for="" class="form-label">Zip</label>
								<input type="text" class="form-control" id="zip">
							</div>
							<div class="col-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck" name="check">
									<label class="form-check-label" for="gridCheck">Check me out</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary" name="addPost">Submit Post Data</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card my-3 border-danger">
					<div class="card-body py-1">
						<?php
						if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addPost'])) :
							echo '<p class="text-center text-muted fs-4 fw-lighter mb-1">This is a post method</p>';
							echo '<pre>';
							print_r($_POST);
							echo '</pre>';
						elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['addPost'])) :
							echo '<p class="text-center text-muted fs-4 fw-lighter mb-1">This is a get method</p>';
							echo '<pre>';
							print_r($_GET);
							echo '</pre>';
						else :
							echo '<p class="text-center text-muted fs-4 fw-lighter mb-1">please submit this above form...</p>';
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>