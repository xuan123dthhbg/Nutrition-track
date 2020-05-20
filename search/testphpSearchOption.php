
<?php

$search = $_POST['search'];

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'test';

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from data where Tenmon like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
	echo "<table><tr><th>TenMon</th><th>Calories/100g</th><th>TotalFat(g)</th><th>Cholesterol(mg)</th><th>Sodium(g)</th><th>Protein(g)</th><th>TotalCarbohydrates</th></tr>";
while($row = $result->fetch_assoc() ){
	echo  "<tr><td>".$row["Tenmon"]." </td><td>".$row["Calories/100g"]." </td><td>".$row["TotalFat(g)"]." </td><td>".$row["Cholesterol(mg)"]." </td><td>".$row["Sodium(g)"]." </td><td>".$row["Protein(g)"]."</td><td> ".$row["TotalCarbohydrates"]."</td></tr>";
} echo "</table>";
} else {
	echo "0 records";
}

$conn->close();


?>
