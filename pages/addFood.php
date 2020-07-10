<?php

session_start();
require 'db_connection.php';

//lấy dữ liệu để hoàn thiện hồ sơ

$idFood= $_SESSION['Maten'];
$ten_dang_nhap =$_SESSION['ten_dang_nhap_2'];

$sql="SELECT id FROM member WHERE ten_dang_nhap like '%$ten_dang_nhap%'";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    While( $row = $result -> fetch_array()){
        $id=$row["id"];
    }
}
$_SESSION['id']=$id;
//echo $_SESSION['id'];
$addFood="INSERT INTO `addfoodbreakfast` (`Maten`,`id`) 
         VALUES ('{$idFood}','{$id}')";
$sql3 = $conn->query( $addFood);

if ($sql3){ header("location:javascript://history.go(-1)");
  //  header('Location: infor.php');
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
