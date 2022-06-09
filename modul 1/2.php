<!DOCTYPE html>
<html>
<head>
	<title>No 3</title>
</head>
<body>
	<h4>Local Variable </h4>
	<?php
		function Penjumlahan() {
			$X = 5; 
			$Y = 8;
			echo "Nilai X = ".$X."<br>";
			echo "Nilai Y = ".$Y."<br>";
			echo "Hasil  $X + $Y = ".$X+$Y."<br>";} 
		Penjumlahan();
	?>
	<h4>Global Variable</h4>
	<?php
		$X = 5; 
		$Y = 8;
		function Pengurangan() {
			global $X,$Y;
			echo "Nilai X = ".$X."<br>";
			echo "Nilai Y = ".$Y."<br>";
			echo "Hasil  $Y - $X = ".$Y-$X."<br>";} 
		Pengurangan();
		echo "Nilai X = ".$X."<br>";
	?>	
</body>
</html>



