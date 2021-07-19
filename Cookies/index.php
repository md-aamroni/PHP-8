<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		<div class="display-6 text-center text-danger pb-2">PHP Cookies</div>
		<div class="row">
			<div class="col-6 offset-3">
				<div class="card card-body">
					<div class="btn-group" role="group" aria-label="Basic example">
						<a href="set" class="btn btn-primary">Set Cookies</a>
						<a href="get" class="btn btn-primary">Get Cookies</a>
						<a href="delete" class="btn btn-primary">Delete Cookies</a>
					</div>
				</div>
				<div class="my-3"></div>
				<div class="card card-body">
					<h4>Cookies Information</h4>
					<?php 
					if ($_GET['url'] === 'set') :

						//Set Cookies
						setcookie('name', 'John Doe', time() + 10, '/', false, false);
						setcookie('email', 'jhondoe@gmail.com', time() + 10, '/', false, false);
						setcookie('address', 'Dhaka-1206, Bangladesh', time() + 10, '/', false, false);

						if (!empty($_COOKIE['name'])) :
							echo '<div class="py-2 text-info">Hurrah! Cookies is set already</div>';
						else :
							echo '<div class="py-2 text-success">Congratulation! Cookies is set successfully</div>';
						endif;
					elseif ($_GET['url'] === 'get') :

						//Get Cookies
						if (isset($_COOKIE['name'])) :
							echo '<ul class="list-group">';
							echo '<li class="list-group-item d-flex justify-content-between align-items-center">
										Name: <span class="text-success">'. $_COOKIE['name'] .'</span>
									</li>';
							echo '<li class="list-group-item d-flex justify-content-between align-items-center">
										Email: <span class="text-success">'. $_COOKIE['email'] .'</span>
									</li>';
							echo '<li class="list-group-item d-flex justify-content-between align-items-center">
										Address: <span class="text-success">'. $_COOKIE['address'] .'</span>
									</li>';
							echo '</ul>';
						else :
							echo '<div class="py-2 text-danger">Oops! Cookies is not set yet</div>';
						endif;
					elseif ($_GET['url'] === 'delete') :
						
						//Delete Cookies
						if (isset($_COOKIE['name'])) :
							setcookie('name', '', time(), '/', false, false);
							setcookie('email', '', time(), '/', false, false);
							setcookie('address', '', time(), '/', false, false);
						endif;

						if (!empty($_COOKIE['name'])) :
							echo '<div class="py-2 text-success">Congratulation! cookies is delete successfully</div>';
						else :
							echo '<div class="py-2 text-danger">Oops! Cookies is alreday deleted</div>';
						endif;	
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>