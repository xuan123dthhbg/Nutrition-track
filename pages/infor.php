<?php
session_start();
require 'db_connection.php';
              $resultt = $_GET['resultt'];
                $sql = "select * from data  d join image_data i on i.Maten=d.Maten  where i.Maten like '%$resultt%'";

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script src="Chart.min.js"></script>
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
              <li class="nav-item ">
                <a class="nav-link active btn" href="./pages/login.php"> Đăng nhập  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active btn " href="./pages/register.php">Đăng kí </a>
              </li>
            </ul>
       
        </nav> 
</div>
    
    <div class="home">
        <div class="home-header"></div>
        <div class="food">
            <div class="food-img" style="background-image: url(<?php echo $row['URL'] ?>);" >
        </div>
            <div class="food-name"><?php echo $row["Tenmon"] ?> </div>
        </div><br><br>

        <div class="infor">
            <div class="nutrition">
                <div class="mess-title">Thông tin dinh dưỡng trong 100g</div>
                
                <div class="nutrition-facts">
                    <div class="calories">Giá trị dinh dưỡng </div>
                        <div  >
                        <table class="w3-table w3-bordered w3-hoverable">
                        <tr>
                        <th> Tên</th>
                        <th>Giá trị</th>
                     
                        </tr>
                       
                     <?php 
                    
                     echo 
                     '<tr>'.'<td>'."Calories:".'</td>'.'<td>'. $row["Calories/100g"]." g.".'</td>'.'</tr>'.
                     '<tr>'.'<td>'."Total Fat :".'</td>'.'<td>'. $row["TotalFat(g)"] ." g.".'</td>'.'</tr>'.
                     '<tr>'.'<td>'."Cholesterol:".'</td>'.'<td>'. $row["Cholesterol(mg)"] ." mg.".'</td>'.'</tr>'.
                     '<tr>'.'<td>'."Sodium :".'</td>'.'<td>'. $row["Sodium(g)"] ." g.".'</td>'.'</tr>'.
                     '<tr>'.'<td>'."Total Carbohydrates :".'</td>'.'<td>'. $row["TotalCarbohydrates"] ." g.".'</td>'.'</tr>'.
                     '<tr>'.'<td>'. "Protein:".'</td>'.'<td>'.$row["Protein(g)"] ." g."
                     .'</td>'.'</tr>'
                              ?>
                        
                        </table>
                      
                    </div>
                    
                </div>
                <div class="chart">
            <div class="mess-title">Biểu Đồ</div>
           <div id ="chart_div"></div>
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
            <div class="chart" >
                <!--Load the AJAX API-->
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          <?php
          echo "['Calories',".$row["Calories/100g"]."],";
          echo "['Total Fat',".$row["TotalFat(g)"]."],";
          echo "['Cholesterol',".$row["Cholesterol(mg)"]."],";
          echo "['Sodium',".$row["Sodium(g)"]."],";
          echo "['Total Carbohydrates',".$row["TotalCarbohydrates"]."],";
          echo "['Protein',".$row["Protein(g)"]."],";
          ;}
          }
          ?>  
        ]);
        var options = {'title':'TTT',
                       'width':600,
                       'height':400,
                       is3D:true,
                       backgroundColor:'#E0FFFF'};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
            </div>
        </div>
    </div>
    
</body>
</html>