<!doctype html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	    <title>Projek praktikum | {{ $title }}</title>
	</head>
	<body style="background-color: darkseagreen;">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed;width: 100%; top: 0;">
			<div class="container">
				<a class="navbar-brand" href="/home">Home</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<!-- <li class="nav-item">
				      		<a class="nav-link {{ $title === 'Home'? 'active' : ''}}" href="/home">Home</a>
					    </li> -->
					    <li class="nav-item">
				      		<a class="nav-link {{ $title === 'About'? 'active' : ''}}" href="/about">About</a>
					    </li>
					    <li class="nav-item">
					      	<a class="nav-link {{ $title === 'Tugas'? 'active' : ''}}" href="/tugas">Tugas</a>
					    </li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container mt-3">
			@yield('container')
		</div>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>