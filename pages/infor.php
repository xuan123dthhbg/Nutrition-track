<?php
              $resultt = $_GET['resultt'];
              $servername = 'localhost';
              $username = 'root';
              $password = '';
              $db = 'test';

              $conn = new mysqli($servername, $username, $password, $db);

              if ($conn->connect_error){
	             die("Connection failed: ". $conn->connect_error);
                }

               $sql = "select * from data where Maten like '%$resultt%'";

                $result = $conn->query($sql);
                $conn->close();
                if ($result->num_rows > 0){
                  
                    While( $row = $result -> fetch_array()){
 
             ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/infor.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="Chart.min.js"></script>
</head>
<body>
    <div class="header grid-container">
        <a href="../index.php">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <form href="./pages/login.php">
            <button class="login btn">Đăng nhập</button>
        </form>
        <form href="./pages/register.php">
            <button class="register btn">Đăng ký</button>
        </form>
    </div>
    
    <div class="home">
        <div class="home-header"></div>
        
        <form action="" class="search-pos">
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm" class="search">
                <a href="./pages/result.html">
                    <button type="submit" class="search-icon">Tìm kiếm</button>
                </a>
            </div>
        </form>

        <div class="food">
            <div class="food-img"></div>
            <div class="food-name"><?php echo $row["Tenmon"] ?> </div>
        </div><br><br>

        <div class="infor">
            <div class="nutrition">
                <div class="mess-title">Thông tin dinh dưỡng trong 100g</div>
                <div class="nutrition-facts">
                    <div class="calories">Giá trị dinh dưỡng </div>
                        <div  class="w3-container table" >
                        <table class="w3-table">
                       
                     <?php 
                     echo 
                     '<p>'."Calories:". $row["Calories/100g"].".".'</p>'.
                     '<p>'."Total Fat :". $row["TotalFat(g)"] ." g.".'</p>'.
                     '<p>'."Cholesterol:". $row["Cholesterol(mg)"] ." mg".'</p>'.
                     '<p>'."Sodium :". $row["Sodium(g)"] ." g.".'</p>'.
                     '<p>'."Total Carbohydrates :". $row["TotalCarbohydrates"] ." g.".'</p>'.
                     '<p>'. "Protein:".$row["Protein(g)"] ." g.".
                     '</p>'
                          
                          
                     ;}
                        }
                ?>
                         
                        </table>
                    </div>
                </div>
            </div>
            <div class="activities">
                <div class="activities-title">Hoạt động cần thiết để tiêu hao 100KCal</div>
                <table class="activities">
                    <tr>
                        <th class="cycling-box">
                          <div class="cycling"></div>
                        </th>
                        <th class="running-box">
                        <div class="running"></div>
                        </th>
                        <th class="dohousehold-box">
                            <div class="dohousehold"></div>
                        </th>
                    <tr>
                        <td>
                            <div style="font-size: 70px; font-weight: bold;">5</div> <br>
                            <div style="font-weight: bold; font-size: 25px;">Đạp xe</div>
                        </td>
                        <td>
                            <div style="font-size: 70px; font-weight: bold;">5</div> <br>
                            <div style="font-weight: bold; font-size: 25px;">Chạy bộ</div>
                        </td>
                        <td>
                            <div style="font-size: 70px; font-weight: bold;">5</div> <br>
                            <div style="font-weight: bold; font-size: 25px;">Làm việc nhà</div>
                        </td>
                    </tr>

                </table> <br>
                <div style="font-style: italic; font-size: 15px">Giá trị ước tính dành cho người nặng 63.5kg</div>
            </div>
        </div>
    </div>
    
</body>
</html>