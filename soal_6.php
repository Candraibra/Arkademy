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
    "<table>
<tr>
<th>Person_ID</th>
<th>Name</th>
<th>Person_Hobbies</th>
</tr>";
while($row = $hasil->fetch_assoc()){
    echo"<tr>
    <td>" .$row["id"]."</td>
    <td>" .$row["nama"]."</td>
    <td>" .$row["name"]."</td>
    </tr>";
}
 echo   "</table>";
}else{
    echo"0 hasil";

}
$conn ->close();
?>