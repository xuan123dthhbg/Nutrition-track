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
<div class="w3-row">
    <div class="w3-col infor-bar-left" style="width: 20%; height: 250px; background-color: rgb(86,226,128); opacity: 0.9"></div>
    <div class="w3-col infor-bar-center" style="width: 60%; height: 250px">
        <div class="infor-bar">
            <div class="avt">
                <img src="../img/avatar.png" style="width: 200px; height: 200px">
            </div>
            <div class="infor-index">
                <p style="font-weight: bolder; font-size: 30px; border-bottom: #111111 5px solid; margin-left: 50px">
                    Username</p>
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
<!--                        cách tính BMI: BMI = cân nặng / (chiều cao x chiều cao)-->
                        <td>21.9</td>
<!--                        cách tính TDEE: TDEE = BMR x R-->
<!--                        trong đó: BMR = 66 + (13.7 x cân nặng) + (5 x chiều cao) - (6.76 x tuổi) (đối với nam)-->
<!--                                  BMR = 655 + (9.6 x cân nặng) + (1.8 x chiều cao) - (4.7 x tuổi) (đối với nữ)-->
<!--                                  R = 1.2 đối với level 1-->
<!--                                  R = 1.3 - 1.5 level 2-->
<!--                                  R = 1.5 - 1.7 level 3-->
<!--                                  R > 1.7 level 4-->
                        <td>1800KCal</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="w3-col infor-bar-right" style="width: 20%; height: 250px; background-color: rgb(86, 226, 128); opacity: 0.9;"></div>
</div>
<div class="w3-row profile-body">
    <div class="w3-col body-left" style="width: 20%; height: 970px"></div>
    <div class="w3-col body-center" style="width: 60%; height: 970px">
        <div class="time">
            <div style="width: 50%">
                <a href=""><i class="fas fa-angle-left"></i></a>
            </div>
            <div style="width: 100%">Today <br>19/06</div>
            <div style="width: 50%">
                <a href=""><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="nutrition">
            <table style="width:100%">
                <tr style="background-color: rgb(238, 238, 238);">
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Protein <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    </th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Carbohydrates <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    </th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Fat <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">50g</p></th>
                    <th style="width:25%; color: rgb(0, 46, 92); font-size: 20px">Total Calories <br>
                        <p style="color: rgb(83,140,196); font-size: 17px; font-family: Opensan; margin: 5px">1035Kcal</p></th>
                    </th>
                </tr>
            </table>
        </div>
        <div class="diary">Nhật ký</div>
        <div class="food-log">
            <div class="breakfast">
                Bữa sáng
                <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px; margin-right: 10px"></i></a>
                <!--                Món ăn được thêm -->
                Thịt lợn (200Kcal), Dưa chuột (15Kcal)
            </div>

            <div class="lunch">
                Bữa trưa
                <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px; margin-right: 10px"></i></a>
                <!--                Món ăn được thêm -->
                Rau cải thìa (20Kcal), Thịt bò (200Kcal)
            </div>
            <div class="snack" style="display: flex">
                Bữa phụ
                <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px; margin-right: 10px"></i></a>
                <!--                Món ăn được thêm -->
                Sữa chua không đường (100Kcal)
            </div>
            <div class="dinner" style="display: flex">
                Bữa tối
                <a href=""><i class="fas fa-plus-circle" style="margin-left: 10px; margin-right: 10px"></i></a>
                <!--                Món ăn được thêm -->
                Salad (300Kcal); Ức gà (200Kcal)
            </div>

        </div>
        <div class="aim">Mục Tiêu</div>
        <form class="user-aim">
            <input type="text" value="Cân nặng: 59kg"> <br>
            <input type="text" value="Năng lượng hàng ngày: 1200Kcal"> <br>
            <input type="text" value="Protein: 50%"> <br>
            <input type="text" value="Fat: 20%"> <br>
            <input type="text" value="Carbohydtares: 30%"> <br>
            <button type="submit">Lưu</button>
        </form>
    </div>
    <div class="w3-col body-right" style="width: 20%; height: 970px"></div>
</div>
</body>
</html>