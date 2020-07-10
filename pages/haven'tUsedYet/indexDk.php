<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<body>
   
     <div class="header grid-container container-fluid" >
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
              <form action="./profile.php?var=1"  method ="get" >
                <button name="profile" value=<?php echo $_SESSION['ten_dang_nhap_1']?> class="nav-link active btn" >
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
                      if (isset($_SESSION['ten_dang_nhap_1'])){
                                   echo $_SESSION['ten_dang_nhap_1']."<br/>";} 
           ?>
                        </div>
                    </div>
                    </button>
                 </form>
                </li>
                <li class="nav-item ">
                <a class="nav-link active btn " href="../index.php">Đăng xuất  </a>
                </li>
             </ul>
       
        </nav> 
        </div>
    <div class="home">
        <div class="home-header"></div>
        
        <form action="result.php" method="post" class="search-pos" >
            <div class="search-bar">
             <input type="text" placeholder="Tìm kiếm"  class="search"  name="searcht">
            
            <button type="submit" class="search-icon">Tìm kiếm</button>
       
              </div>
        </form>
        <h1 class="message">
            Dinh dưỡng hợp lý là nền tảng của sức khỏe, tầm vóc và trí tuệ!
        </h1>
    </div>
</body>

</html>
