<?php
session_start();
include('DBConf.php');
require_once('verifyToken.php');



$action = $_GET['action'];
$beer = $_GET['beer'];

switch ($_GET['action']) {
    case "show":
        
        $showSliders = true;

        $sql = sprintf("SELECT * FROM miniSM_beers WHERE BEER_IDENTITY='". $beer ."'");
        
        if ($result = $mysqli -> query($sql)) {
            while ($row = $result -> fetch_array()) {
                
                $BEER_IDENTITY = $row["BEER_IDENTITY"];
                $BEER_NAME = $row["BEER_NAME"];
                $STYLE_CODE = $row["STYLE_CODE"];
                $STYLE_DEFINITION = $row["STYLE_DEFINITION"];
                $STYLE_DEF_SHORT = $row["STYLE_DEF_SHORT"];
                $STYLE_DEF_COLOR = $row["STYLE_DEF_COLOR"];
                $STYLE_DEF_AROM = $row["STYLE_DEF_AROM"];
                $STYLE_DEF_TASTE = $row["STYLE_DEF_TASTE"];
                $STYLE_DEF_MOUTHFEEL = $row["STYLE_DEF_MOUTHFEEL"];
                $STYLE_DEF_EXAMPLES = $row["STYLE_DEF_EXAMPLES"];   
                $STYLE_IBU = $row["IBU_"];   
                $STYLE_CO2 = $row["CO2_"];   
            }
        }
        
        $sql2 = sprintf("SELECT * FROM `miniSM_Rating` WHERE VOTER_='".$_SESSION['token']."' AND BEER_IDENTITY=".$beer."");
        
        if ($result2 = $mysqli -> query($sql2)) {
        
            if($result2->num_rows > 0){  
                
                while ($row2 = $result2 -> fetch_array()) {
                    
                    //$BEER_IDENTITY = $row["BEER_IDENTITY"];
                    $IBU_ = $row2["IBU_"];
                    $EBC_ = $row2["EBC_"];
                    $CO2_ = $row2["CO2_"];
                    $SHBF_ = $row2["SHBF_"];
                    $Hinkabillity = $row2["ALLOVERRATING_"];
                }                
                
            }else{
                
                    $IBU_ = 50;
                    $EBC_ = 50;
                    $CO2_ = 50;
                    $SHBF_ = 100;
                    $Hinkabillity =  100;
                
            }
        }
        
        break;
    case "vote":
        
        $IBU = $_POST['IBU_'];
        $EBC = $_POST['EBC_'];
        $CO2 = $_POST['CO2_'];
        $SHBF = $_POST['SHBF_'];
        $Hinkabillity = $_POST['Hinkabillity'];
        $BEER_IDENTITY = $_POST['BEER_IDENTITY'];
        
        
        $showVoting = true;
        $nextBeer = (int)$BEER_IDENTITY + 1;
        
        if($nextBeer > 7){
            $nextBeer = 1;
        }
        
        $msg_vote = "<div class='center'><font class='megaheadline'>High Five!</font> <br><font class='headline'>Tack för ditt bidrag!</font> <br><br><br><br> <a href='beer.php?action=show&beer=".$nextBeer."'><button class='buttonContainer'>Nu tar vi nästa öl!</button></a></div>";
        
        $sql = sprintf("SELECT * FROM `miniSM_Rating` WHERE VOTER_='".$_SESSION['token']."' AND BEER_IDENTITY=".$BEER_IDENTITY."");
        
        if ($result = $mysqli -> query($sql)) {
        
            if($result->num_rows > 0){
                //vote found
                //echo "UPDATE Your vote is updating";
                
                $sqlUpdate = sprintf("UPDATE `miniSM_Rating` SET `IBU_`='".$IBU."',`EBC_`='".$EBC."',`CO2_`='".$CO2."',`SHBF_`='".$SHBF."',`ALLOVERRATING_`='".$Hinkabillity."' WHERE VOTER_='".$_SESSION['token']."' AND BEER_IDENTITY=".$BEER_IDENTITY."");
                if ( $mysqli->query($sqlUpdate) === TRUE ) {
                    //echo "...";
                } else {
                    //echo "Error: " . $sqlUpdate . "<br>" . $mysqli->error;
                    $error1 = "Error: " . $sqlInsert . "<br>" . $mysqli->error;
                    $msg_vote_error1 = "<font class='megaheadline'>Oh nooo!</font> <br><font class='headline'>Din röstning gick inte igenom... testa igen! :( </font> <br> ".$error1." ";
                }  
                
            }else{
                //No vote found
                //echo "INSERT your vote";
                //$mysqli->close();
                $sqlInsert = "INSERT INTO `miniSM_Rating` (`id_`, `VOTER_`, `BEER_IDENTITY`, `IBU_`, `EBC_`, `CO2_`, `SHBF_`, `ALLOVERRATING_`) VALUES (NULL, '".$_SESSION['token']."', '".$BEER_IDENTITY."', '".$IBU."', '".$EBC."', '".$CO2."', '".$SHBF."', '".$Hinkabillity."')";
                
                if ( $mysqli->query($sqlInsert) === TRUE ) {
                    //echo "...";
                } else {
                    $error2 = "Error: " . $sqlInsert . "<br>" . $mysqli->error;
                    $msg_vote_error2 = "<font class='megaheadline'>Oh nooo!</font> <br><font class='headline'>Din röstning gick inte igenom... testa igen! :( </font> <br><br> ".$error2." ";
                }                
        
            }
        }else{
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
        
        break;        
}


$form = "<form action='beer.php?action=vote' method='post'>";

$beerHeadline = "
<div class='center'>
    <font class='megaheadline'>".$BEER_NAME."</font><br>
    <font class='headline'>".$STYLE_CODE."</font><br><br>
    
    <font class='textline'>SHBF Typdefinition:</font><br><br>
    <font class='textline'>IBU (Beska): ".$STYLE_IBU."</font><br>
    <font class='textline'>EBC (Färg): ".$STYLE_DEF_COLOR."</font><br>
    <font class='textline'>CO2 (Kolsyra): ".$STYLE_CO2." <br> scrolla ner för att se hela typdefinitionen...</font><br><br>    

    <font class='textline'>Kommersiella exempel:<br> ".$STYLE_DEF_EXAMPLES."</font><br><br> 
    

    
</div>
";

$beerBottomLine = "
    <font class='headline'>SHBF Typdefinition: </font><br><br>
    <font class='textline'>".$STYLE_DEFINITION."</font><br><br>
    <font class='textline'>".$STYLE_DEF_SHORT."</font><br><br>
    <font class='textline'>".$STYLE_DEF_AROM."</font><br><br>
    <font class='textline'>".$STYLE_DEF_TASTE."</font><br><br>
    <font class='textline'>".$STYLE_DEF_MOUTHFEEL."</font><br><br>
";

$slider0 = "<input type='hidden' name='BEER_IDENTITY' value='".$BEER_IDENTITY."' id='displayValueRange'>";

$slider1 = "
<div class='center'>
    <font class='megaheadline'>'IBU'</font><br>
    <font class='headline'>Var beskan enligt typdefinitionen?</font>
</div>
    <div class='slidecontainer'>
        <div class='left'>
            <font class='headline'>För söt</font>
        </div>
        <input type='range' name='IBU_' min='1' max='100' value='".$IBU_."' class='slider' id='displayValueRange'>
        <div class='right'>
            <font class='headline'>För besk</font>
        </div>
        <div class='center'>
            <font class='bigheadline'> Spot-on!</font>
        </div>
    </div>
";
$slider2 = "
<div class='center'>
    <font class='megaheadline'>'EBC'</font><br>
    <font class='headline'>Var färgen enligt typdefinitionen?</font>
</div>
    <div class='slidecontainer'>
        <div class='left'>
            <font class='headline'>För ljus</font>
        </div>
        <input type='range' name='EBC_' min='1' max='100' value='".$EBC_."' class='slider' id='displayValueRange'>
        <div class='right'>
            <font class='headline'>För mörk</font>
        </div>
        <div class='center'>
            <font class='bigheadline'> Spot-on!</font>
        </div>
    </div>
";
$slider3 = "
<div class='center'>
    <font class='megaheadline'>'CO2'</font><br>
    <font class='headline'>Var kolsyran enligt typdefinitionen?</font>
</div>
    <div class='slidecontainer'>
        <div class='left'>
            <font class='headline'>För lite</font>
        </div>
        <input type='range' name='CO2_' min='1' max='100' value='".$CO2_."' class='slider' id='displayValueRange'>
        <div class='right'>
            <font class='headline'>För mycket</font>
        </div>
        <div class='center'>
            <font class='bigheadline'> Spot-on!</font>
        </div>
    </div>
";
$slider4 = "
<div class='center'>
    <font class='megaheadline'>'SHBF'</font><br>
    <font class='headline'>Hur bra matchar den SHBF´s Typdefinition?</font>
</div>
    <div class='slidecontainer'>
        <div class='left'>
            <font class='headline'>Inte alls</font>
        </div>
        <input type='range' name='SHBF_' min='1' max='100' value='".$SHBF_."' class='slider' id='displayValueRange'>
        <div class='right'>
            <font class='headline'>Spot-on!</font>
        </div>
        <div class='center'>
            <font class='bigheadline'> ok</font>
        </div>
    </div>
";
$slider5 = "
<div class='center'>
    <font class='megaheadline'>'Hinkabillity'</font><br>
    <font class='headline'>Hur föll den dig i smaken?</font>
</div>
    <div class='slidecontainer'>
        <div class='left'>
            <font class='headline'>Rävapiss</font>
        </div>
        <input type='range' name='Hinkabillity' min='1' max='100' value='".$Hinkabillity."' class='slider' id='displayValueRange'>
        <div class='right'>
            <font class='headline'>Mumma</font>
        </div>
        <div class='center'>
            <font class='bigheadline'> ok</font>
        </div>
    </div>
";


$submitButton = "<div class='center'><input type='submit' value='Rösta!' id='rate'></form></div>";


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $refreshPage; ?>
</head>
<style>
    input[type=text], select {
      width: 90%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      align-content: center;
      align-items: center;
    }
    
    input[type=submit] {
      width: 90%;
      background-color: rgb(69, 154, 240);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: rgb(69, 154, 240);
    }
    
    divInput {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
</style>

<body>
<body>

<?php require_once('menu.php'); ?>

<br /><br /><br />

<?php
    if($showSliders){
        echo $beerHeadline;
    }
?>
<br>

<div class="maincontainer">
<?php

    if($showVoting){
        echo $msg_vote."<br>";
        echo $msg_vote_error1."<br>";
        echo $msg_vote_error2."<br><br><br>";
    }

    if($showSliders){
        echo $form."<br>";
        echo $slider0."<br>";
        echo $slider1."<br>";
        echo $slider2."<br>";
        echo $slider3."<br>";
        echo $slider4."<br>";
        echo $slider5."<br><br>";
        echo $submitButton."<br><br><br>";
        echo $beerBottomLine;
    
    }
?>




</div>


<script>
var slider = document.getElementById("displayValueRange");
var output = document.getElementById("displayValue");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<?php
require_once('menu_bottom.php');
?>

</body>
</html>
