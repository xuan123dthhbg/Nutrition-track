<?php

session_start();
require 'db_connection.php';

//lấy dữ liệu để hoàn thiện hồ sơ
$sex=$_POST['sex'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$level_act=$_POST['level_act'];
$username=$_SESSION['ten_dang_nhap'];


$infor="UPDATE member 
        SET sex='$sex',age='$age' ,weight='$weight',
            height='$height',activity_level='$level_act' 
        WHERE ten_dang_nhap='$username'";
$sql3 = $conn->query( $infor);

if ($sql3){
    header('Location: profile.php');
//echo "thành công . <a href='profile.php'>Tiếp tục</a>";
}
else {
    echo "sai";
}
   
?>
