<?php

$searcht = $_POST['searcht'];
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'test';

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
   die("Connection failed: ". $conn->connect_error);
  }

 $sql = "select * from data  where Tenmon like '%$searcht%'";

  $result = $conn->query($sql);
  $conn->close();


 if ($result->num_rows > 0){
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/result.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="header grid-container">
        <a href="../index.html">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <form href="./pages/login.html">
            <button class="login btn">Đăng nhập</button>
        </form>
        <form href="./pages/register.html">
            <button class="register btn">Đăng ký</button>
        </form>
    </div>
    <div class="home-body">
        <div class="head"></div>
       
      
       
        <div class="results">
           
                <p class="result-mess">Có 
               <?php echo mysqli_num_rows($result);?>
               kết quả : </p>
               <?php
                While( $row = $result -> fetch_array()){
                   
                  //  foreach ($nameFood as $key => $value) {
                        # code...
                       // $value=$row[$key];
                    //}
                   //$row = $result->fetch_assoc()
                   // while($row = $result -> fetch_array()){
                   /* echo "<tr>";
                    echo "<td>". $row["Tenmon"]."</td>";
                     echo "<th>Lượng Cholesterol(mg) </th><th>".$row["Cholesterol(mg)"] ."</th>";
                    echo "<th> >> </th>";
     
                      echo"</tr>";
    
                    }echo "</table>";
                     } else {
                    echo "0 records";
                    }*/
           ?>

            
       
        <div class="result-1">
                     
           
        <div class="img-1"></div>
        <div class="infor">

        <?php
        
             echo "<h1>". $row["Tenmon"]."</h1>"."<p>"."Cholesterol trong 100mg : ". $row["Cholesterol(mg)"]."</p>";
            
        ?>
        </div>
           <form action="./infor.php?var=1" method ="get" class="more" >

                <button class="more" name='resultt' value=<?php echo $row["Maten"] ?> >
                  <i class="fas fa-chevron-circle-right" style="font-size: 50px;"></i>
                </button>
                </form>
             </div>
       
        <?php
                        }  
                         } else {
                         echo "0 records";
                        }  
                    ?>  
               
           
               </div>
        </div>
  
   
    
</body>
</html>