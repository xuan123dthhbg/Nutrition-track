<?php
             $resultt = $_GET['resultt'];
              $servername = 'localhost';
              $username = 'root';
              $password = '';
              $db = 'test';

              $conn = new mysqli($servername, $username, $password, $db);

              if ($conn->connect_error){
	             die("Connection failed: ". $conn->connect_error);
                }

               
                $sql = "select * from data  d join image_data i on i.Maten=d.Maten ";
                $result = $conn->query($sql);
                $conn->close();
                if ($result->num_rows > 0){
                  
                    While( $row = $result -> fetch_array()){
 
             ?>
<html>
  <head>


    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          <?php
          echo "['Calories',".$row["Calories/100g"]."],";
          echo "['Total Fat',".$row["TotalFat(g)"]."],";
          echo "['Cholesterol',".$row["Calories/100g"]."],";
         
          ?>  
         
        ]);
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div"></div>
    <div>  <?php echo '<img src='.$row['URL'].' width="250px"/>'; 
     ;}
                     
    }?></div>
  </body>
</html>