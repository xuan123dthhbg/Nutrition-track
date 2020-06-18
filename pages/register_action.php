<?php
session_start();
require 'db_connection.php';
header('Content-Type: text/html; charset=UTF-8');
//Lấy dữ liệu từ file register.php
$ho_ten = addslashes($_POST['name']);
$mat_khau = addslashes($_POST['password']);
$ten_dang_nhap = addslashes($_POST['username']);

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$ho_ten || !$mat_khau || !$ten_dang_nhap )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='register.php'>Trở lại</a>";
        exit;
    }
$sql = "SELECT * FROM member WHERE ten_dang_nhap = '$ten_dang_nhap'";
$result = mysqli_query($conn, $sql);
// Nếu kết quả trả về lớn hơn 1 thì nghĩa là  ten dang nhap đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
// Sử dụng javascript để thông báo
//echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
  
// Dừng chương trình

}
@$addmember = mysql_query( "INSERT INTO `member` (`ho_ten`,`ten_dang_nhap` ,`mat_khau`) VALUES ('$ho_ten','$ten_dang_nhap','$mat_khau')");
  


if ($addmember)
echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
else
echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>