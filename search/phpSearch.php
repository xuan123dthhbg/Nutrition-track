<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/infor.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="Chart.min.js"></script>
</head>
<body>
<div class="header grid-container">
        <a href="../index.html">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <form href="./pages/login.html">
            <button class="login btn">Đăng nhập</button>
        </form>
        <form href="./pages/register.html">
            <button class="register btn">Đăng ký</button>
        </form>
    </div>
    <div class="home-body">
        <div class="head"></div>
        <p class="result-mess">Có 2 kết quả cho "Dưa":</p>
        <div class="results">
            <div class="result-1">
                <div class="img-1"></div>
                <div class="infor">
                    <h1>Dưa chuột</h1>
                    <p style="font-style: italic;font-weight: lighter;">Calories trong 100g: 100KCal</p>
                </div>
                <a href="./infor.html" class="more">
                    <button class="more">
                    <i class="fas fa-chevron-circle-right" style="font-size: 50px;"></i>
                </button></a>
            </div>
            <div class="result-2">
                <div class="img-2"></div>
                <div class="infor">
                    <h1>Dưa hấu</h1>
                    <p style="font-style: italic;font-weight: lighter;">Calories trong 100g: 50KCal</p>
                </div>
                <a href="./infor.html" class="more">
                    <button class="more">
                    <i class="fas fa-chevron-circle-right" style="font-size: 50px;"></i>
                </button></a>
        </div>
    </div>
    
<?php
$search = $_POST['search'];
$column = $_POST['column'];

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
while($row = $result->fetch_assoc() ){
	echo $row["Tenmon"]." <br>";
}
} else {
	echo "0 records";
}

$conn->close();


?>
</body>
