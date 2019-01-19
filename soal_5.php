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

<form  method="post">
<p>Masukan Angka lalu enter</p>
    <table>
        <tr>
            <td>
            <p>jumlah Orang yang hadir berapa? :</p>
            </td>
            <td>
            <input type="number"  name="total"   value="1">
            </td>
        </tr>
    </table>
    
 



</form>
<?php
error_reporting(0);
$n = $_POST["total"];
function jabat($n) {
    $jabatan = ($n * ($n - 1)) / 2;
    echo "Jumlah Jabat Tangan Yang Terjadi " . $jabatan;
};
jabat($n);
?>
</body>
</html>