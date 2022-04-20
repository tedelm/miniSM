<?php
session_start();
include('DBConf.php');
require_once('verifyToken.php');







?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $refreshPage; ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>



<?php require_once('menu.php'); ?>



<br /><br /><br />
<div class="center">
    <font class="megaheadline">Poängtavlan</font></br>
    <font class="textline">Så här tycker ni...</font>


<div class="maincontainer">


    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["Element", "Poäng", { role: "style" } ],
            
            <?php
            
                $sql = sprintf("SELECT * FROM `miniSM_Rating`");
                if ($result = $mysqli -> query($sql)) {
                
                    if($result->num_rows > 0){  
                        
                        while ($row = $result -> fetch_array()) {
                            
                            
                            $BEER_IDENTITY = $row["BEER_IDENTITY"];
                            $IBU = $row["IBU_"];
                            $EBC = $row["EBC_"];
                            $CO2 = $row["CO2_"];
                            $SHBF = $row["SHBF_"];
                            $Hinkabillity = $row["ALLOVERRATING_"];
                            
                            $points_IBU = $IBU;
                            
                            
                            //Fetch beer name
                            $sql2 = sprintf("SELECT * FROM `miniSM_beers` WHERE BEER_IDENTITY=".$BEER_IDENTITY."");
                            $result2 = $mysqli -> query($sql2);
                            while ($row2 = $result2 -> fetch_array()) {
                                $BEER_NAME = $row2['BEER_NAME'];
                            }
                            
                            if($BEER_IDENTITY == 1){
                                
                                $BEER1_NAME = $BEER_NAME;
                                
                                if($IBU < 50){
                                	$BEER1_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER1_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER1_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER1_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER1_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER1_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                }                                
                                
                                //$BEER1_POINT_IBU_STEP1 = (50 - $IBU) / (100 - 0) * 100;
                                //$BEER1_POINT_IBU +=  100 - (int)$BEER1_POINT_IBU_STEP1;
                                
                                //$BEER1_POINT_EBC_STEP1 = (50 - $EBC) / (100 - 0) * 100;
                                //$BEER1_POINT_EBC +=  100 - (int)$BEER1_POINT_EBC_STEP1;    
                                
                                //$BEER1_POINT_CO2_STEP1 = (50 - $CO2) / (100 - 0) * 100;
                                //$BEER1_POINT_CO2 +=  100 - (int)$BEER1_POINT_CO2_STEP1; 
                                
                                $BEER1_POINT_SHBF += $SHBF;
                                $BEER1_POINT_HINK += $Hinkabillity;
                                $BEER1_POINT_VOTES++;
                                
                                
                                
                            }
                            if($BEER_IDENTITY == 2){
                                
                                $BEER2_NAME = $BEER_NAME;
                                
                                if($IBU < 50){
                                	$BEER2_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER2_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER2_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER2_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER2_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER2_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                } 
                                
                                $BEER2_POINT_SHBF += $SHBF;
                                
                                $BEER2_POINT_HINK += $Hinkabillity;
                                $BEER2_POINT_VOTES++;
                                
                            }   
                            if($BEER_IDENTITY == 3){
                                
                                $BEER3_NAME = $BEER_NAME;
                                if($IBU < 50){
                                	$BEER3_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER3_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER3_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER3_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER3_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER3_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                }  
                                
                                
                                $BEER3_POINT_SHBF += $SHBF;
                                
                                $BEER3_POINT_HINK += $Hinkabillity;       
                                $BEER3_POINT_VOTES++;
                                
                            }  
                            if($BEER_IDENTITY == 4){
                                
                                $BEER4_NAME = $BEER_NAME;
                                if($IBU < 50){
                                	$BEER4_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER4_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER4_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER4_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER4_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER4_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                }   
                                
                                
                                $BEER4_POINT_SHBF += $SHBF;
                                
                                $BEER4_POINT_HINK += $Hinkabillity;       
                                $BEER4_POINT_VOTES++;
                                
                            } 
                            if($BEER_IDENTITY == 5){
                                
                                $BEER5_NAME = $BEER_NAME;
                                if($IBU < 50){
                                	$BEER5_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER5_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER5_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER5_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER5_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER5_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                }  
                                
                                
                                $BEER5_POINT_SHBF += $SHBF;
                                
                                $BEER5_POINT_HINK += $Hinkabillity;       
                                $BEER5_POINT_VOTES++;
                                
                            }    
                            if($BEER_IDENTITY == 6){
                                
                                $BEER6_NAME = $BEER_NAME;
                                if($IBU < 50){
                                	$BEER6_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER6_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER6_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER6_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER6_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER6_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                } 
                                
                                
                                $BEER6_POINT_SHBF += $SHBF;
                                
                                $BEER6_POINT_HINK += $Hinkabillity;       
                                $BEER6_POINT_VOTES++;
                                
                            }           
                            if($BEER_IDENTITY == 7){
                                
                                $BEER7_NAME = $BEER_NAME;
                                if($IBU < 50){
                                	$BEER7_POINT_IBU = (1 - ((50 - $IBU) / 100)) * 100;
                                }else{
                                    $BEER7_POINT_IBU = (1 - (($IBU - 50) / 100)) * 100;
                                }
                                
                                if($EBC < 50){
                                	$BEER7_POINT_EBC = (1 - ((50 - $EBC) / 100)) * 100;
                                }else{
                                    $BEER7_POINT_EBC = (1 - (($EBC - 50) / 100)) * 100;
                                }
                                
                                if($CO2 < 50){
                                	$BEER7_POINT_CO2 = (1 - ((50 - $CO2) / 100)) * 100;
                                }else{
                                    $BEER7_POINT_CO2 = (1 - (($CO2 - 50) / 100)) * 100;
                                }   
                                
                                
                                $BEER7_POINT_SHBF += $SHBF;
                                
                                $BEER7_POINT_HINK += $Hinkabillity;       
                                $BEER7_POINT_VOTES++;
                                
                            }                              
                            
                            
                        }                
                        
                    }
                }            
                
                $BEER1_POINT = (($BEER1_POINT_IBU + $BEER1_POINT_EBC + $BEER1_POINT_CO2 + $BEER1_POINT_SHBF + $BEER1_POINT_HINK) / $BEER1_POINT_VOTES) * 2;
                $BEER2_POINT = (($BEER2_POINT_IBU + $BEER2_POINT_EBC + $BEER2_POINT_CO2 + $BEER2_POINT_SHBF + $BEER2_POINT_HINK) / $BEER2_POINT_VOTES) * 2;
                $BEER3_POINT = (($BEER3_POINT_IBU + $BEER3_POINT_EBC + $BEER3_POINT_CO2 + $BEER3_POINT_SHBF + $BEER3_POINT_HINK) / $BEER3_POINT_VOTES) * 2;
                $BEER4_POINT = (($BEER4_POINT_IBU + $BEER4_POINT_EBC + $BEER4_POINT_CO2 + $BEER4_POINT_SHBF + $BEER4_POINT_HINK) / $BEER4_POINT_VOTES) * 2;
                $BEER5_POINT = (($BEER5_POINT_IBU + $BEER5_POINT_EBC + $BEER5_POINT_CO2 + $BEER5_POINT_SHBF + $BEER5_POINT_HINK) / $BEER5_POINT_VOTES) * 2;
                $BEER6_POINT = (($BEER6_POINT_IBU + $BEER6_POINT_EBC + $BEER6_POINT_CO2 + $BEER6_POINT_SHBF + $BEER6_POINT_HINK) / $BEER6_POINT_VOTES) * 2;
                $BEER7_POINT = (($BEER7_POINT_IBU + $BEER7_POINT_EBC + $BEER7_POINT_CO2 + $BEER7_POINT_SHBF + $BEER7_POINT_HINK) / $BEER7_POINT_VOTES) * 2;
                
            
                echo '["'.$BEER1_NAME.'", '.$BEER1_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER2_NAME.'", '.$BEER2_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER3_NAME.'", '.$BEER3_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER4_NAME.'", '.$BEER4_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER5_NAME.'", '.$BEER5_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER6_NAME.'", '.$BEER6_POINT.', "rgb(69, 154, 240)"],';
                echo '["'.$BEER7_NAME.'", '.$BEER7_POINT.', "rgb(69, 154, 240)"]';
                
            ?>

          ]);
    
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: "stringify",
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" },
                           2]);
    
          var options = {
            title: "Poängställning",
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
          };
          var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
          chart.draw(view, options);
      }
      </script>
    <div id="barchart_values" style="width: 100%; height: 300px;"></div>


</div>
</div>


<?php
require_once('menu_bottom.php');
?>
</body>
</html>
