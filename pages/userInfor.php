
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="../css/userInfor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="header grid-container container-fluid" >
        <nav class="navbar navbar-expand-sm navbar-light ">
            <a  class="navbar-brand" href="../index.php">
            <img src="../img/logo.png" alt="logo" >
            </a>
        </nav> 
</div>

    <div class="home">
        <div class="home-header"></div>
        <h3 class="message">
            Hoàn thiện hồ sơ của bạn để bắt đầu và có trải nghiệm tốt nhất!
        </h3>
      
        <form action="userInforACtion.php" class="user-infor" method='POST' >
            <div class="text-infor">
            <table style="width: 60%">
               <tr >
                 <td>Giới tính</td>
                 <td>   <select name="sex" style="margin-left:5px">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                         </select>
                 </td>
                </tr>   
                <tr>
                        <td>Tuổi</td>
                        <td><input type="number" id="age" name="age" value="age"
                                   style="width: 100px; text-align: center; margin: 5px; font-size: 25px"
                                   required
                        >
                        </td>
                    </tr>
                    <tr>
                        <td>Cân nặng</td>
                        <td><input type="number" placeholder="kg" id="weight" name="weight" value="weight"
                                   style="width: 100px; text-align: center; margin: 5px; font-size: 25px"
                                   required
                        >
                        </td>
                    </tr>
                    <tr>
                        <td>Chiều cao</td>
                        <td><input type="number" placeholder="cm" id="height" name="height" value="height"
                                   style="width: 100px; text-align: center; margin: 5px; font-size: 25px"
                                   required
                        >
                        </td>
                    </tr>
                </table>
                <p>Mức độ hoạt động:</p>
                <input type="radio" id="level-1" name="level_act" value="1.2">
                <label for="level-1">Ít vận động (công việc văn phòng)</label> <br>
                <input type="radio" id="level-2" name="level_act" value="1.4">
                <label for="level-2">Tập thể dục nhẹ (1-2 ngày/tuần)</label> <br>
                <input type="radio" id="level-3" name="level_act" value="1.6">
                <label for="level-3">Tập thể dục vừa phải (3-5 ngày/tuần)</label> <br>
                <input type="radio" id="level-4" name="level_act" value="4">
                <label for="level-4">Tập thể dục nặng (6-7 ngày/tuần)</label> <br>
               
                <input type="submit" value="Hoàn thành">
            </div>
        </form>
      
    </div>
</body>
</html>

