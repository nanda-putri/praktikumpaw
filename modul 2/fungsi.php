<!DOCTYPE html>
<html>
<head>
	<title>FUNGSI</title>
</head>
<body>
	<?php
	echo "<h2>Modul II PHP Fungsi</h2>";
	echo "Nama : Nanda Putri Febri Antono <br>";
	echo "NIM : 200411100036 <br><br>";
	function jumlah($x,$y)
	{
		return "jumlah $x+$y = ".$x+$y;
	}
	function kali($x,$y)
	{
		return "perkalian $x*$y = ".$x*$y;
	}
	function bagi($x,$y)
	{
		return "pembagian $x : $y = ".$x/$y;
	}
	echo "Pemanggilan Fungsi Jumlah <br>";
	echo jumlah(3,5)."<br>";
	echo jumlah(4,8)."<br>";
	echo jumlah(5,9)."<br>";
	echo "Pemanggilan Fungsi Kali <br>";
	echo kali(3,5)."<br>";
	echo kali(4,7)."<br>";
	echo kali(5,6)."<br>";
	echo "Pemanggilan Fungsi Bagi <br>";				
	echo bagi(6,4)."<br>";
	echo bagi(12,4)."<br>";
	echo bagi(1,3)."<br>";
	?>

</body>
</html>