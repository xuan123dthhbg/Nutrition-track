<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                <p style="font-weight: bolder; font-size: 30px; border-bottom: #111111 5px solid; margin-left: 50px">Username</p>
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
    </div>
    <div class="w3-row profile-body">
        <div class="w3-col body-left" style="width: 20%"></div>
        <div class="w3-col body-center" style="width: 60%">
            <div class="diary">Nhật ký</div>
            <div class="food-log">
                <div class="breakfast">
                    Bữa sáng
                    <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px"></i></a>
                </div>
                <div class="lunch">
                    Bữa trưa
                    <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px"></i></a>
                </div>
                <div class="snack" style="display: flex">
                    Bữa phụ
                    <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px"></i></a>
                </div>
                <div class="dinner" style="display: flex">
                    Bữa tối
                    <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px"></i></a>
                </div>
            </div>
            <div class="aim">Mục Tiêu</div>
        </div>
        <div class="w3-col body-right" style="width: 20%"></div>
    </div>
</body>
</html>