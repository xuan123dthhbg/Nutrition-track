<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/register.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="header grid-container">
        <a href="../index.php">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <a href="./login.php">
            <button class="login btn">Đăng nhập</button>
        </a>
    </div>

    <div class="home-body">
        <div class="register-box">
            <h1>Đăng ký</h1>
            <form method="post" action="register_action.php" >
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