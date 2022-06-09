<?php 
$host="localhost";
$user="root";
$pass="";
$db="mahasiswa";

$con=mysqli_connect($host,$user,$pass,$db);
if (!$con) {
	echo "koneksi gagal";
}
 ?>