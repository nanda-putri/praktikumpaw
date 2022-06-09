<?php 
	session_start();

	if (isset($_COOKIE['login'])) {
			header('location:table.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Tabel</title>
</head>
<body>
	<div class="container">
		<h2 align="center">Daftar Mahasiswa</h2>
		<table class="table table-striped">
			<tr class="text-center">
				<th>Nama Mahasiswa</th>
				<th>NIM</th>
				<th>Alamat</th>
			</tr>
			<tr>
				<?php 

					$array=[
					array("Nanda Putri Febri Antono","200411100036","Bojonegoro"),
					array("Rosita Dewi Lutfiyah","200411100002","Jombang"),
					array("Nella Adrisia Hartono","200411100107","Sumenep"),
					array("Siti Ulun Nuha Karimah","200411100126","Sidoarjo")
					];
					echo "</tr>";
					foreach ($array as $rows => $row) {
						echo "<tr>";
						foreach ($row as $col => $cell) {
							echo "<td>".$cell."</td>";
						}
					}
					echo "</tr>";
				?>
			</tr>
		</table>
		<button type="button" class="btn btn-outline-info"><a href="logout.php">Log Out</a></button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


