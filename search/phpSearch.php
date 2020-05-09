<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = 'localhost';
$username = 'Dinhduong';
$password = '@thuxuan21@';
$db = 'quanlidinhduongthucpham';

$conn = new mysqli($servername, $username, $password, $db);
//$conn = connectDatabase("localhost", "root", "", 3306);
//$dbName = "dept";
//$connect->select_db($dbName);
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from data where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["Maten"]."  ".$row["Maloai"]."  ".$row["Calories/100g"]." ".$row["TotalFat(g)"]." ".$row["Sodium(g)"]." ".$row["Protein(g)"]." ".$row["TotalCarbohydrates"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>