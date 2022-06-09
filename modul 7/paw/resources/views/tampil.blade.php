<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="padding-top: 20px; background-color: cadetblue;" >
	<div class="container">
		<center><h2 style="font-family: fantasy;">{{$judul}}</h2></center>
		<table class="table table-info table-striped" style="font-family: serif;">
			<tr style=" text-align: center;">
				<!-- <td>id</td> -->
				<th scope="col">NIM</th>
				<th scope="col">Nama</th>
				<th scope="col">Umur</th>
				<th scope="col">Alamat</th>
				<th scope="col">Nilai</th>
				<th scope="col" colspan="3">Aksi</th>
			</tr>
			@foreach($mhs as $m)
			<tr>
				<!-- <td>{{$m -> id}}</td> -->
				<td>{{$m -> nim}}</td>
				<td>{{$m -> nama}}</td>
				<td>{{$m -> umur}}</td>
				<td>{{$m -> alamat}}</td>
				<td>{{$m -> nilai}}</td>
				<td><a href="{{$m->id}}/edit" class=" btn btn-secondary">Edit</a></td>
				<td><a href="{{$m->id}}/editnilai" class=" btn btn-warning">Edit Nilai</a></td>
				<td><a href="{{$m->id}}" class="btn btn-danger">Delete</a>

				<!-- <form action="{{$m->id}}" method="POST">
					@csrf
					@method('delete')
					<input type="submit" name="submit" value="delete">
				</form> --></td>
			</tr>
			@endforeach
		</table>

		<a href="create" class="btn btn-info">Add data</a>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>