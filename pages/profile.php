<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="header grid-container">
        <a href="../index.php">
            <div class="header-img"></div>
        </a>
        <button class="about btn">Giới thiệu</button>
        <a href="../index.php">
            <button class="logout btn">Đăng xuất</button>
        </a>
    </div>
    <div class="home-body">
        <div class="infor-bar">
            <div class="avt">
                <img src="../img/avatar.png" style="width: 200px; height: 200px">
            </div>
            <div class="infor-index">
                <p style="font-weight: bolder; font-size: 30px; border-bottom: #111111 5px solid">Username</p>
                <table style="width: 100%; font-size: 20px">
                    <tr>
                        <th>Chiều cao</th>
                        <th>Cân nặng</th>
                        <th>BMI</th>
                        <th>TDEE</th>
                    </tr>
                     <tr align="center">
                         <td>159cm</td>
                         <td>56kg</td>
                         <td>21.9</td>
                         <td>1800KCal</td>
                     </tr>
                </table>
            </div>

        </div>

        <div class="menu">
            <a href="userInfor.html"><button class="menu-btn">Chỉnh sửa hồ sơ</button></a> <br>
            <button class="menu-btn">Nhật ký của tôi</button> <br>
            <button class="menu-btn">Mục tiêu</button> <br>
            <button class="menu-btn">Đăng xuất</button> <br>
        </div>
    </div>
</body>
</html>