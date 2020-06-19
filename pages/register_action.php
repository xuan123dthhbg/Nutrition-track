
    <?php
session_start();
require 'db_connection.php';

//Lấy dữ liệu từ file register.php

$ho_ten = $_POST['name'];
$mat_khau = $_POST['password'];
$ten_dang_nhap = $_POST['username'];


$sql="SELECT ten_dang_nhap FROM member WHERE ten_dang_nhap='$ten_dang_nhap'";

$result = $conn->query($sql);


if ($result->num_rows > 0)
{
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$addmember="INSERT INTO `member` (`ho_ten`,`ten_dang_nhap` ,`mat_khau`) VALUES ('{$ho_ten}','{$ten_dang_nhap}','{$mat_khau}')";
$sql1 = $conn->query( $addmember);

if ($sql1){
echo "đăng kí thành công . <a href='userInfor.php'>Tiếp tục</a>";
}
else
echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>
   
