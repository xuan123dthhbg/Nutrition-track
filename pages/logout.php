<?php session_start(); 
 
if (isset($_SESSION['ten_dang_nhap'])){
    unset($_SESSION['ten_dang_nhap']); // xóa session login
}
?>
<a href="index.php">HOME</a>