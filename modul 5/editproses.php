<?php  
include('koneksi.php');
if (isset($_POST['submit'])){
	$nrp = $_POST['nrp'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	$query="UPDATE tbl_mahasiswa set nama='$nama', email='$email', alamat='$alamat' WHERE nrp='$nrp'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "<script>alert('data berhasil di edit');window.location='table.php'</script>";
	}else{
		echo "<script>alert('data berhasil di edit');window.location='edit.php'</script>";
	}
}

?>