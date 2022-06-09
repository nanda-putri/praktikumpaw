<?php  
include 'koneksi.php';

$nrp=$_GET['nrp'];

$sql="DELETE FROM tbl_mahasiswa WHERE nrp='".$nrp."'";
$que=mysqli_query($con,$sql);
if ($que) {
	echo "<script> alert ('data berhasil di hapus');window.location='table.php'</script>";
}else{
	echo "data gagal di hapus";
}
?>