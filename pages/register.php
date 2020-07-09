<?php ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/register.css">
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
                <a class="nav-link active btn " href="about.html">Giới thiệu  </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active btn" href="login.php"> Đăng nhập  </a>
              </li>
             
            </ul>
        </nav> 
</div>

    <div class="home-body">
        <div class="register-box " >
            <h1>Đăng ký</h1>
            <form method="post" action="./register_action.php" >
                <p>Họ tên</p>
                <input type="text" name="name" placeholder="Nhập họ và tên" required>
                <p>Tên đăng nhập</p>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập"  required>
                <p>Mật khẩu</p>
                <input type="password" name="password" placeholder="Nhập mật khẩu"  required>
                <input type="submit" name="submit" value="Đăng ký">
           <p style="text-align: center; font-size: 16px;">Đã có tài khoản? <a href="./login.php">Đăng nhập ngay!</a></p>

            </form>
         
        </div>
        
    </div>
   
</body>
</html>
