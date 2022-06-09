<!DOCTYPE html>
<html>
<head>
	<title>No 5</title>
</head>
<body>
	<?php
		echo "<h2>Modul I PHP Kondisional</h2>";
		echo "Nama : Nanda Putri Febri Antono <br>";
		echo "NIM : 200411100036 <br><br>";
		date_default_timezone_set('Asia/Jakarta');
		function hari(){
			$hari_ini=date('D');
			switch ($hari_ini) {
				case 'Sun':
					$hari='Minggu';
				break;

				case 'Mon':
					$hari='Senin';
				break;
				case 'Tue':
					$hari='Selasa';
				break;
				case 'Wed':
					$hari='Rabu';
				break;
				case 'Thu':
					$hari='Kamis';
				break;
				case 'Fri':
					$hari='Jumat';
				break;
				case 'Sat':
					$hari='Sabtu';
				break;
				default:
					$hari='Tidak di Ketahui';
				break;
			}
			return "<b>".$hari."</b>";
		}
		function bulan(){
			$bulan_ini=date('m');
			switch ($bulan_ini) {
				case '1':
					$bulan='Januari';
					break;
				case '2':
					$bulan='Februari';
					break;
				case '3':
					$bulan='Maret';
					break;
				case '4':
					$bulan='April';
					break;
				case '5':
					$bulan='Mei';
					break;
				case '6':
					$bulan='Juni';
					break;
				case '7':
					$bulan='Juli';
					break;
				case '8':
					$bulan='Agustus';
					break;
				case '9':
					$bulan='September';
					break;
				case '10':
					$bulan='Oktober';
					break;
				case '11':
					$bulan='November';
					break;
				case '12':
					$bulan='Desember';
					break;
				default:
					$bulan='Tidak di Ketahui';
					break;
			}
			return "<b>".$bulan."</b>";
		}
		$tanggal=date('d');
		$tahun=date('Y');
		echo "Sekarang Hari ".hari()." : Tanggal ".$tanggal." ".bulan()." ".$tahun; 
	?>
</body>
</html>