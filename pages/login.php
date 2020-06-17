<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="header grid-container">
        <a href="../index.php">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <a href="./register.php">
            <button class="register btn">Đăng ký</button>
        </a>
    </div>

    <div class="home-body">

        <div class="login-box">
            <h1>Đăng nhập</h1>
            <form>
                <p>Tên đăng nhập</p>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập">
                <br><br><br>
                <p>Mật khẩu</p>
                <input type="password" name="password" placeholder="Nhập mật khẩu">
                <input type="submit" name="submit" value="Đăng nhập">
                <p style="text-align: center; font-size: 16px;">Chưa có tài khoản? <a href="./register.php">Đăng ký tại đây</a></p>
            </form>
        </div>
    </div>
</body>
</html>