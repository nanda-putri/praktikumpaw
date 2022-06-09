<?php 

	$user="admin";
	$pw=md5("admin");

	session_start();

	if (isset($_COOKIE['login'])) {
		if ($_COOKIE['login']== $user) {
			$_SESSION['login']=TRUE;
			header('location:table.php');
			exit();
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="proses.php" method="POST">
	<section>
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-item-center h-100">
				<div class="col-5 col-md-5 col-lg-6 col-xl-5">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">
							<div class="mb-md-2 mt-md-2 pb-5">
								<h2 class="fw-bold mb-2 text-upercase">LOG IN</h2>
								<div class="form-outline form-white mb-3">
									<label for="username">Username</label>
								</div>
								<div class="form-outline form-white mb-3">
									<input type="text" name="username" placeholder="Username" id="username">
								</div>
								<div class="form-outline form-white mb-3">
									<label for="password">Password</label>
								</div>
								<div class="form-outline form-white mb-3">
									<input type="password" name="password" placeholder="Password" id="password">
								</div>
								<div class="form-outline form-white mb-3">
									<input type="checkbox" name="remember" id="remember" value="true"> <label for="remember">Remember me</label>
								</div>
								<div class="form-outline form-white mb-3">
									<button type="submit" name="submit" class="btn btn-outline-light btn-lg px-5">LOG IN</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</form>
	<center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>