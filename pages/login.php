<?php
session_start();
require 'db_connection.php';
if (isset($_POST['submit']))
{
   

$mat_khau = $_POST['password'];
$ten_dang_nhap = $_POST['username'];

    
$sql="SELECT ho_ten,mat_khau,ten_dang_nhap FROM member WHERE ten_dang_nhap='$ten_dang_nhap'";

$result = $conn->query($sql);


if ($result->num_rows == 0)
{
    echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
    exit;
}
$row =mysqli_fetch_array($result, MYSQLI_ASSOC);;

//$row = "SELECT mat_khau FROM member WHERE mat_khau='$mat_khau'"; 
if ($mat_khau != $row["mat_khau"]) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$_SESSION['ten_dang_nhap'] = $ten_dang_nhap;
echo "Xin chào " . $ten_dang_nhap . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="header grid-container">
        <a href="../index.php">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <a href="./register.php">
            <button class="register btn">Đăng ký</button>
        </a>
    </div>

    <div class="home-body">

        <div class="login-box">
            <h1>Đăng nhập</h1>
            <form action='login.php?do=login' method='POST'>
                <p>Tên đăng nhập</p>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
                <br><br><br>
                <p>Mật khẩu</p>
                <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                <input type="submit" name="submit" value="Đăng nhập">
                <p style="text-align: center; font-size: 16px;">Chưa có tài khoản? <a href="./register.php">Đăng ký tại đây</a></p>
            </form>
        </div>
    </div>
</body>
</html>