<?php
session_start();
require 'db_connection.php';
if (isset($_POST['submit']))
{
   

$mat_khau = $_POST['password'];
$ten_dang_nhap = $_POST['username'];

$sql="SELECT ho_ten,mat_khau,ten_dang_nhap,id FROM member WHERE ten_dang_nhap='$ten_dang_nhap'";

$result = $conn->query($sql);


if ($result->num_rows == 0)
{
    echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
    exit;

}
$row =mysqli_fetch_array($result, MYSQLI_ASSOC);




//$row = "SELECT mat_khau FROM member WHERE mat_khau='$mat_khau'"; 
if ($mat_khau != $row["mat_khau"]) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$_SESSION['ten_dang_nhap_2'] = $ten_dang_nhap;

header('Location: indexUser.php');   
//echo "Xin chào " . $ten_dang_nhap . ". Bạn đã đăng nhập thành công. <a href='../index.php'>Tiếp tục</a>";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="header grid-container container-fluid" >
        <nav class="navbar navbar-expand-sm navbar-light ">
            <a  class="navbar-brand" href="../index.php">
            <img src="../img/logo.png" alt="logo" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> </div>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             
              <li class="nav-item ">
                <a class="nav-link active btn " href="#">Giới thiệu  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active btn " href="register.php">Đăng kí </a>
              </li>
             
            </ul>
        </nav> 
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
