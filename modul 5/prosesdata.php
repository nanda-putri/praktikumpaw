<?php
include('koneksi.php');
if (isset($_POST['submit'])){
	$nrp = $_POST['nrp'];
	$nama = $_POST['nama'];
	$email=$_POST['email'];
	$alamat = $_POST['alamat'];

	$query="INSERT INTO tbl_mahasiswa(nrp,nama,email,alamat) VALUES ('$nrp','$nama','$email','$alamat')";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "<script> alert('data berhasil ditambahkan');window.location='table.php'</script>";
	} else{
		echo "<script> alert('data berhasil ditambahkan');window.location='create.php'</script>";
	}
}

?>