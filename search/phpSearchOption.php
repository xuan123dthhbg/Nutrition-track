<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dept';

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from a where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
    //echo $row["DeptNo"]."  ".$row["DeptName"]."  ".$row["Loc"]."<br>";
    echo $row["Ma"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>