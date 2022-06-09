<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
</head>
<body>
	<table border="1">
		<tr>
			<!-- <td>id</td> -->
			<td>nim</td>
			<td>nama</td>
			<td>umur</td>
			<td>alamat</td>
			<td>nilai</td>
			<td colspan="3">aksi</td>
		</tr>
		@foreach($post as $p)
		<tr>
			<!-- <td>{{$p -> id}}</td> -->
			<td>{{$p -> nim}}</td>
			<td>{{$p -> nama}}</td>
			<td>{{$p -> umur}}</td>
			<td>{{$p -> alamat}}</td>
			<td>{{$p -> nilai}}</td>
			<td><a href="{{$p->id}}/edit">Edit</a></td>
			<td><a href="{{$p->id}}/editnilai">Edit Nilai</a></td>
			<td><a href="{{$p->id}}">Delete</a>

			<!-- <form action="{{$p->id}}" method="POST">
				@csrf
				@method('delete')
				<input type="submit" name="submit" value="delete">
			</form> --></td>
		</tr>
		@endforeach
	</table>

	<a href="create">Add data</a>
</body>
</html>