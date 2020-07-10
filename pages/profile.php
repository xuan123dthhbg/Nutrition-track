<?php session_start();
require 'db_connection.php';
$profile =$_SESSION['ten_dang_nhap_2'];
$idd=$_SESSION['idd'];

$sql="SELECT height,weight,age,activity_level,sex FROM member WHERE  ten_dang_nhap like '%$profile%'";

$result = $conn->query($sql);
//$conn->close();
if ($result->num_rows > 0){
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="header grid-container container-fluid border" >
        <nav class="navbar navbar-expand-sm navbar-light ">
            <a  class="navbar-brand" href="indexUser.php">
            <img src="../img/logo.png" alt="logo" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> </div>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link active btn " href="indexUser.php">Trang chủ  </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active btn " href="./about.html">Giới thiệu  </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active btn" href="../index.php"> Đăng xuất  </a>
              </li>
             
            </ul>
       
        </nav> 
</div>
<div class=" w3-row">
    <div class="w3-col infor-bar-left " style="width: 20%; height: 250px; background-color: rgb(86,226,128); opacity: 0.9"></div>
    <div class="w3-col infor-bar-center" style="width: 60%; height: 250px">
        <div class="infor-bar">
            <div class="avt">
                <img src="../img/avatar.png" style="width: 200px; height: 200px">
            </div>
            <div class="infor-index">
                <p style="font-weight: bolder; font-size: 30px; border-bottom: #111111 5px solid; margin-left: 50px">
               <?php echo$profile ?></p>
                <table style="width: 100%; font-size: 20px">
                    <tr align="center">
                        <th>Chiều cao</th>
                        <th>Cân nặng</th>
                        <th>BMI</th>
                        <th>TDEE</th>
                    </tr>
                    <tr align="center" >
                    <?php 
                          While( $row = $result -> fetch_array()){
       
                            $weight = $row["weight"];
                            $height= $row["height"];
                      
                            $age = $row["age"];
                            $activity_level =$row["activity_level"];
                            $sex=$row["sex"];
                        // cách tính BMI: BMI = cân nặng / (chiều cao x chiều cao)
                      
                        
                        ?>
                        <td> <?php echo $weight;?></td>
                        <td> <?php echo $height;?></td>
                        <td> <?php 
                        if ($height!=0){
                            $BMI=$weight/($height*$height);
                            echo round($BMI,2);
                            };
                         ?></td>
<!--                        cách tính TDEE: TDEE = BMR x R-->
<!--                        trong đó: BMR = 66 + (13.7 x cân nặng) + (5 x chiều cao) - (6.76 x tuổi) (đối với nam)-->
<!--                                  BMR = 655 + (9.6 x cân nặng) + (1.8 x chiều cao) - (4.7 x tuổi) (đối với nữ)-->
<!--                                  R = 1.2 đối với level 1-->
<!--                                  R = 1.3 - 1.5 level 2-->
<!--                                  R = 1.5 - 1.7 level 3-->
<!--                                  R > 1.7 level 4-->
                       <td> <?php
                              if($sex=='Nu')
                              {
                                $BMR=655+(13.7*$weight)+(5*$height)-(6.76*$age);
                                $TDEE=$BMR*$activity_level;
                                echo round($TDEE,2);
                              }
                              else{
                                $BMR=66+(13.7*$weight)+(5*$height)-(6.76*$age);
                                $TDEE=$BMR*$activity_level;
                                echo round($TDEE,2);
                              }
                       }
                    }
                    else {
                        echo "0 records";
                       } 
                     ?></td>       
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="w3-col infor-bar-right" style="width: 20%; height: 250px; background-color: rgb(86, 226, 128); opacity: 0.9;"></div>
</div>
<div class="w3-row profile-body">
    <div class="w3-col body-left" style="width: 20%; height: 970px"></div>
    <div class="w3-col body-center" style="width: 60%; height: 970px">
        <div class="time">
           
            <div style="width: 100%">Today <br>
            <?php
           // Return current date from the remote server
            $today = date("d/m/Y");
            echo $today;
            ?>
            </div>
        
        </div>
        <div class="nutrition">
            <table style="width:100%">
                <tr  align="center" style="background-color: rgb(238, 238, 238);">
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Protein <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    </th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Carbohydrates <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    </th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Fat <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Total Calories <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">1035Kcal</p></th>
                    </th>
                </tr>
            </table>
        </div>

        <?php
       
        $id=$_SESSION['idd'];
       
       
     /*   $sql2="SELECT Tenmon,Calories/100g,id,Maten FROM member m
                                 join addfoodbreakfast a 
                                      on m.id=a.idBreakfast
                                 join data d
                                      on d.Maten=a.Maten
                                 Where m.id=a.idBreakfast ";*/
       // $sql2="SELECT Maten,Tenmon,Calories/100g from addfoodbreakfast a member mjoin data d
         //      on a.Maten=d.Maten  where m.id=a.idBreakfast ";
         
       $sql2="SELECT * FROM addfoodbreakfast a join data d on d.Maten=a.Maten WHERE id like'%$id%'";
       $output='';
         //$sql2="SELECT height,weight,age,activity_level,sex FROM member WHERE  ten_dang_nhap like '%$profile%'";

          $resultt = $conn->query($sql2);
          $conn->close();

         
      
 ?>
        <div class="diary">Nhật ký</div>
        <div class="food-log">
            <div class="breakfast">
                Thực phảm đã chọn
                <a href="indexUser.php" ><i class="  fas fa-plus-circle"style="margin-left: 10px; margin-right: 10px" ></i></a>
                <!--                Món ăn được thêm -->
              <?php
              if ($resultt->num_rows > 0){
                    While( $row = $resultt -> fetch_array()){
                        $food=$row["Tenmon"];
                        $calo=$row["Calories/100g"];
                        $output.='
                         <div class="addFood" >'.
                              $food.'  ( Calories/100g : '. $calo.' )<br>
                        </div>
                      ';
                 }echo $output;}
                else{
                  echo  $output.='
                    <div class="addFood" >
                         Thêm món<br>
                   </div>
                   ';
                   
                  }
              ?>
            </div>

            <!--div class="lunch">
                Bữa trưa
                <a href="indexUser.php" ><i class=" fas fa-plus-circle"style="margin-left: 10px; margin-right: 10px" ></i></a> <!--                Món ăn được thêm -->
              <!--  Rau cải thìa (20Kcal), Thịt bò (200Kcal)
            </-div>
            <!--div class="snack" >
                Bữa phụ
                <a href="indexUser.php" ><i class="  fas fa-plus-circle"style="margin-left: 10px; margin-right: 10px" ></i></a> <!--                Món ăn được thêm -->
             <!--   Sữa chua không đường (100Kcal)
            </!--div>
            <!--div class="dinner">
                Bữa tối
                <a href="indexUser.php" ><i class=" fas fa-plus-circle"style="margin-left: 10px; margin-right: 10px" ></i></a><!--                Món ăn được thêm -->
             
            </!--div>

        </div>
        <div class="aim">Mục Tiêu</div>
        <form class="user-aim">
            <input type="text" value="Cân nặng: 59kg"> <br>
            <input type="text" value="Năng lượng hàng ngày: 1200Kcal"> <br>
            <input type="text" value="Protein: 50%"> <br>
            <input type="text" value="Fat: 20%"> <br>
            <input type="text" value="Carbohydtares: 30%"> <br>
            <button type="submit">Lưu</button>
        </form>
    </div>
    <div class="w3-col body-right" style="width: 20%; height: 970px"></div>

</div>
<script type="text/javascript">
      function getBack(){
          history.back();
      }
</script>
</body>

</html>