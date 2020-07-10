<?php 
session_start();
require 'db_connection.php';
$output='';

    if(isset($_REQUEST["term"])){
        $sql = "select * from data d join image_data i on i.Maten=d.Maten where Tenmon like  ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_term);
            $param_term = $_REQUEST["term"] . '%';
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) > 0){
                   $output .=' <h3 class="result-mess">Có'.mysqli_num_rows($result).' kết quả tìm được</h3>';


                    // Fetch result rows as an associative array
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                       // echo"<div style="background-image: url(".$row['URL'].");"></div>";
                       $output.='
                                <div  class="result-1">
                                     <div class="img1" style="background-image: url('.$row['URL'].');"></div>
                                     <div class="infor" ><h1>'. $row["Tenmon"].'</h1><p>Calories trong 100g : '.$row["Calories/100g"].'</p></div>
                                     <form action="./infor.php?var=1" method ="get" class="more" >

                                     <button class="more" name='resultt' value=.' $row["Maten"] .' >
                                       <i class="fas fa-chevron-circle-right" style="font-size: 50px;"></i>
                                     </button>
                                     </form>
                                  </div>
                                 
                                 
                                 </div>';

                    }
                    echo $output;
                }
                else{
                    echo "<p>No matches found</p>";
                }
            }
            else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);


?>