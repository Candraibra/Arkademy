<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style>
    body {
	display: table;
	width: 100%;
	background: #dedede;
	text-align: center;
}
* {
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box; /* Firefox, other Gecko */
	box-sizing: border-box; /* Opera/IE 8+ */
}

table {
	background: #fff;
}
table,
thead,
tbody,
tfoot,
tr,
td,
th {
	text-align: center;
	margin: auto;
	border: 1px solid #dedede;
	padding: 1rem;
	width: 50%;
}
.table {
	display: table;
	width: 50%;
}
.tr {
	display: table-row;
}
.thead {
	display: table-header-group;
}
.tbody {
	display: table-row-group;
}

.table,
.thead,
.tbody,
.tfoot,
.tr,
.td,
.th {
	text-align: center;
	margin: auto;
	padding: 1rem;
}
.table {
	background: #fff;
	margin: auto;
	border: none;
	padding: 0;
	margin-bottom: 5rem;
}

.th {
	font-weight: 700;
	border: 1px solid #dedede;
	&:nth-child(odd) {
		border-right: none;
	}
}
.td {
	font-weight: 300;
	border: 1px solid #dedede;
	border-top: none;
	&:nth-child(odd) {
		border-right: none;
	}
}

    </style>
</head>
<body>
   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="arka";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT persons.id,persons.nama,hobbies.name FROM persons,hobbies WHERE persons.id = hobbies.person_id ORDER BY persons.id";
$hasil=$conn->query($sql);
if($hasil->num_rows>0)
{
    echo
    "DAFTAR HOBI PRESIDEN DAN WAKIL PRESIDEN<table>
    <thead>
<tr>
<th>NO</th>
<th>Nama</th>
<th>HOBINYA ADALAHH</th>
</thead>
</tr>";
while($row = $hasil->fetch_assoc()){
    echo"<tbody><tr>
    <td>" .$row["id"]."</td>
    <td>" .$row["nama"]."</td>
    <td>" .$row["name"]."</td>
    </tr></tbody>";
}
 echo   "</table>";
}else{
    echo"0 hasil";

}
$conn ->close();
?>

</body>
</html>