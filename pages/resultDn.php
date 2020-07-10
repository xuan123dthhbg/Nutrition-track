<?php 
session_start();
require 'db_connection.php';
 $searcht = $_POST['searcht'];
 $sql = "select * from data d join image_data i on i.Maten=d.Maten where Tenmon like '%$searcht%'";

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
              <li class="nav-item">
              <a class="nav-link active btn " href="profile.php"> 
                <div class=" d-flex ">
                       <div style="margin-top :-10px" >
                       <img
                          class="rounded-circle"
                           alt="Cinque Terre"
                           src="../img/avatar.png"
                           height="50px"
                           width="50px"
                         />
                       </div>
                       <div  style="margin-left :5px">
                    <?php 
                      if (isset($_SESSION['ten_dang_nhap_2'])){
                                   echo $_SESSION['ten_dang_nhap_2']."<br/>";} 
                   ?>
                        
                        </div>
                    </div>
               </a>
                </li>
              
            </ul>
       
        </nav> 
        </div>
    <div class="home-body">
        <div class="head"></div>
        <div class="results">
           
          <p class="result-mess">Có 
               <?php echo mysqli_num_rows($result);?>
               kết quả : </p>
               <?php
                While( $row = $result -> fetch_array()){
               ?>
        <div class="result-1">
        <div class="img1" style="background-image: url(<?php echo $row['URL'] ?>);" >
        </div>
        <div class="infor">

        <?php
        
             echo "<h1>". $row["Tenmon"]."</h1>"."<p>"."Calories trong 100g : ". $row["Calories/100g"]."</p>";
            
        ?>
        </div>
           <form action="./inforDn.php?var=1" method ="get" class="more" >

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