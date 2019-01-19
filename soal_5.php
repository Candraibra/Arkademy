<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Handshake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>Menghitung Jumlah Jabat Tangan 
<form  method="post">
<p>Masukan Angka lalu enter</p>
 <input type="number" name="total"   value="1">
</form>
</center>
<?php
error_reporting(0);
$n = $_POST["total"];
	function count_handShake($jumlah) {
		$a = 0;
		$b = 0;
		for ($i=1; $i < $jumlah ; $i++) { 
			for ($n=$i; $n < $jumlah ; $n++) { 
				$b = $n+1;
				$a++;
			}
		}
		return $a;
	}
	echo count_handShake($n);
	?>
</body>
</html>