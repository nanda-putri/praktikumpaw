<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="padding-top: 20px; background-color: cadetblue; ">
	<div class="container">
		<h3 style="font-family: fantasy;">{{$judul}}</h3>
		<form method="POST" action="\{{$mhs -> id}}" style="font-family: initial;">
			<table width="40%">
				@method('put')
				@csrf
				<tr>
					<td><label for="nim">NIM</label></td>
					<td> : </td>
					<td><input type="text" name="nim" placeholder="input nim" id="nim" value="{{$mhs->nim}}" readonly="readonly" class="form-control"></td>
				</tr>
				<tr>
					<td><label for="nama">Nama</label></td>
					<td> : </td>
					<td><input type="text" name="nama" placeholder="input nama" id="nama" value="{{$mhs->nama}}" readonly="readonly" class="form-control"></td>
				</tr>
				<tr>
					<td><label for="umur">Umur</label></td>
					<td> : </td>
					<td><input type="text" name="umur" placeholder="input umur" id="umur" value="{{$mhs->umur}}" readonly="readonly" class="form-control"></td>
				</tr>
				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td> : </td>
					<td><input type="text" name="alamat" placeholder="input alamat" id="alamat" value="{{$mhs->alamat}}" readonly="readonly" class="form-control"></td>
				</tr>	
				<tr>
					<td><label for="nilai">Nilai</label></td>
					<td> : </td>
					<td><input type="text" name="nilai" placeholder="input nilai" id="nilai" value="{{$mhs->nilai}}" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit" class="btn btn-success"></td>
				</tr>
				
				
				
			</table>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>