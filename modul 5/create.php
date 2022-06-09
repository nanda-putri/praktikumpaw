<?php
include('koneksi.php')  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Form Input</title>
</head>
<body>
	<div class="container mt-3 mb-3">
		<form method="POST" action="prosesdata.php">
			<center><h2>DATA MAHASISWA</h2>
			<table border="0" width="100%">
				<tr>
					<th>NRP</th>
					<td>
						<input type="text" class="form-control" name="nrp" placeholder="Masukkan NRP Anda">
					</td>
				</tr>
				<tr>
					<th>NAMA</th>
					<td>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
					</td>
				</tr>
				<tr>
					<th>EMAIL</th>
					<td>
						<input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda">
					</td>
				</tr>
				<tr>
					<th>ALAMAT</th>
					<td>
						<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda">
					</td>
				</tr>
					<tr>
						<td>
							<button type="submit" name="submit" value="submit" class="btn btn-outline-success"> Submit
							</button>
						</td>
					</tr>
			</table>
			</center>
		</form>
	</div>
</body>
</html>