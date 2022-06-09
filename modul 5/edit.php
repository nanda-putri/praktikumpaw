<?php 
include('koneksi.php');
 ?>

 <!DOCTYPE html> 
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<title>Form Edit</title>
 </head>
 <body style="background-color: powderblue">
 	<h2 align="center">Form Edit Data Mahasiswa</h2>
 	<?php
	 	$nrp = $_GET['nrp'];
	 	$que = "SELECT * FROM tbl_mahasiswa WHERE nrp='$nrp'";
		$sql = mysqli_query($con,$que);
		while ($data = mysqli_fetch_array($sql)) {		
			?>
	<div class="container mt-3 mb-3">
	 	<form method="POST" action="editproses.php">
	 		<table border="0" width="100%">
				<tr>
					<!-- <th>NIM</th> -->
					<td>
						<input type="hidden" class="form-control" name="nrp" value="<?php echo $data['nrp'];?>">
					</td>
				</tr>
				<tr>
					<th>NAMA</th>
					<td>
						<input type="text" class="form-control" name="nama"  value="<?php echo $data['nama'];?>">
					</td>
				</tr>
				<tr>
					<th>EMAIL</th>
					<td>
						<input type="text" class="form-control" name="email"  value="<?php echo $data['email'];?>">
					</td>
				</tr>
				<tr>
					<th>ALAMAT</th>
					<td>
						<input type="text" class="form-control" name="alamat"  value="<?php echo $data['alamat'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<button class="btn btn-outline-success" type="submit" name="submit" value="submit"> Submit
						</button>
					</td>
				</tr>
			</table>
	 	</form>
 	</div>
 	<?php
 	}
 	?>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
 </html>