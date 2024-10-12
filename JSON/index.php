<?php

require_once 'app/Controllers/JsonCrudController.php';

use App\JsonCrudController;

$ctrl = new JsonCrudController();


if (isset($_POST['addUser'])) {
	$result = $ctrl->create($_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['age'], $_POST['gender'], $_POST['profession'], $_POST['agree']);
	if ($result) {
		$isSuccess = 1;
	} else {
		$isSuccess = 0;
	}
}

$users = $ctrl->all();
//
//echo '<pre>';
//print_r($users);
//echo '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="./../../assets/images/php.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
	<title>JSON Crud in PHP</title>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
		}
	</style>
</head>
<body>
<div class="container-xl">
	<div class="card my-2">
		<div class="card-body py-1">
			<div class="display-6 text-center">JSON Crud Operation in PHP</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3">
			<div class="card my-2">
				<div class="card-body">
					<div class="fs-5">Create User Data</div>
					<hr class="bg-primary">
					<form class="mt-4" action="" method="post">
						<div class="mb-3">
							<label for="">Full Name</label>
							<input type="text" class="form-control" name="name"/>
						</div>
						<div class="mb-3">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email"/>
						</div>
						<div class="mb-3">
							<label for="">Mobile</label>
							<input type="tel" class="form-control" name="mobile"/>
						</div>
						<div class="mb-3">
							<label for="">Age</label>
							<input type="number" class="form-control" min="10" max="90" name="age"/>
						</div>
						<fieldset class="mb-3">
							<label for="">Gender</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="gender1" value="Male" checked>
								<label class="form-check-label" for="gender1">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
								<label class="form-check-label" for="gender2">Female</label>
							</div>
						</fieldset>
						<div class="mb-3">
							<label for="">Profession</label>
							<input type="text" class="form-control" name="profession"/>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="Yes" name="agree">
							<label class="form-check-label" for="">
								I agree with terms
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-sm" name="addUser">Confirm and Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-9">
			<div class="card my-2">
				<div class="card-body">
					<table class="table table-hover" id="example" style="width:100%">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Full Name</th>
							<th scope="col">Mobile</th>
							<th scope="col">Email</th>
							<th scope="col">Age</th>
							<th scope="col">Gender</th>
							<th scope="col">Profession</th>
							<th scope="col">Action</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>
								<button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>
								<button type="button" class="btn btn-outline-danger btn-sm">Trash</button>
							</td>
						</tr>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>Otto</td>
							<td>
								<button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>
								<button type="button" class="btn btn-outline-danger btn-sm">Trash</button>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div
		class="toast align-items-center text-white bg-primary border-0 position-absolute bottom-0 start-50 translate-middle-x"
		id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="d-flex">
			<div class="toast-body">
				Congratulation! Operation is successfull.
			</div>
			<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		  crossorigin="anonymous"></script>

<script type="text/javascript">
	const option = {
		animation: true,
		delay: 5000
	}

	function toasty(num) {
		const myToastEl = document.getElementById('myToast');
		const myToast = new bootstrap.Toast(myToastEl, option);

		if (num === 1) {
			myToast.show();
		} else if (num === 0) {
			return false;
		}
	}

	toasty(<?php echo @$isSuccess; ?>)

	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>

</body>
</html>

