<?php
include('koneksi.php')  
?>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Table Mahasiswa</title>
</head>
<body style="background-color: aliceblue">
	<div class="container">
		<h1 align="center">Modul V PHP & MySQL</h1>
		<p>Nama/NRP : Nanda Putri Febri Antono/200411100036</p>
		<table class="table table-dark table-striped" border="1">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th colspan="2">Action</th>
			</tr>
					<?php
					$que = "SELECT *FROM tbl_mahasiswa";
					$sql = mysqli_query($con, $que);

					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo "<td>".$data['nrp']."</td>";
						echo "<td>".$data['nama']."</td>";
						echo "<td>".$data['email']."</td>";
						echo "<td>".$data['alamat']."</td>";
						echo "<td>"."<a href='edit.php?nrp=".$data['nrp']."'>Edit</a>"."</td>";
						echo "<td>"."<a href='proseshapus.php?nrp=".$data['nrp']."'>Hapus</a>"."</td>";
						echo "</tr>";
					}
				?>
		</table>
		<button type="submit" name="submit"><a href="create.php">ADD DATA</a></button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>