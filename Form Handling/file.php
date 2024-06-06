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
						<div class="fs-1 text-center text-muted fw-normal">FILES Method in PHP</div>
					</div>
				</div>
				<div class="card my-3 border-warning">
					<div class="card-body">
						<form class="row g-3" action="" method="POST" enctype="multipart/form-data">
							<div class="input-group mb-3">
								<input type="file" class="form-control" name="file">
								<label class="input-group-text" for="">Upload</label>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary" name="addPost">Submit File Data</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card my-3 border-danger">
					<div class="card-body py-1">
						<?php
						if (isset($_POST['addPost'])) :
							echo '<pre>';
							print_r($_FILES);
							echo '</pre>';

							move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);

							echo '<p class="text-center text-muted fs-4 fw-lighter mb-1">File uploaded successfully</p>';
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