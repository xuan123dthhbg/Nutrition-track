<?php

session_start();
require 'db_connection.php';

//lấy dữ liệu để hoàn thiện hồ sơ
$sex=$_POST['sex'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$level_act=$_POST['level_act'];
$username=$_SESSION['ten_dang_nhap_1'];


$infor="UPDATE member 
        SET sex='$sex',age='$age' ,weight='$weight',
            height='$height',activity_level='$level_act' 
        WHERE ten_dang_nhap='$username'";
$sql3 = $conn->query( $infor);



if ($sql3){
    header('Location: login.php');
  //  $sql="SELECT height,weight,age,activity_level,sex FROM member WHERE  ten_dang_nhap='$username'";

    // $result = $conn->query($sql);
/*
    $_SESSION['weight'] = $weight;
    $_SESSION['height'] = $height;
  
    $_SESSION['age'] = $age;
    $_SESSION['activity_level'] =$level_act;
    $_SESSION['sex']=$sex;*/
   // echo $username;
//echo "thành công . <a href='profile.php'>Tiếp tục</a>";
}
else {
    echo "sai";
}
   
?>
