<?php
session_start();
require 'db_connection.php';

//Lấy dữ liệu từ file register.php

$sex=$_POST['sex'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$level_act=$_POST['level-act'];
//$ten_dang_nhap=$_POST['username'];
echo $sex;
echo $age;
echo $weight;
echo $height;
echo $level_act;

$sql="SELECT m.*,u.* FROM member m join username u on u.id=m.id WHERE m.ten_dang_nhap='$ten_dang_nhap'";

$result = $conn->query($sql);

$addmember="INSERT INTO `userinfor` (`sex`,`age` ,`weight`,`height`,`activity_level`) VALUES ('{$sex}','{$age}','{$weight}','{$height}',,'{$level_act}',)";
$sql1 = $conn->query( $addmember);

if ($sql1){
echo "đăng kí thành công . <a href='userInfor.php'>Tiếp tục</a>";
}
else
echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="header grid-container">
    <a href="../index.php">
        <div class="header-img"></div></a>
    <button class="about btn">Giới thiệu</button>
    <a href="../index.php">
        <button class="login btn">Đăng xuất</button>
    </a>
</div>
<div class="home">
    <div class="home-header"></div>

    <table class="infor-bar">
        <tr>
            <th>159cm</th>
            <th class="avt">
                <img src="../img/avatar.png" style="width: 150px; height: 150px">
                <p>Username</p>
            </th>
            <th>56kg</th>
        </tr>
    </table>
        <div class="menu">
            <button class="infor-btn">Hồ sơ của tôi</button> <br>
            <button class="infor-btn">Nhật ký</button>
        </div>

</div>
</body>
</html>