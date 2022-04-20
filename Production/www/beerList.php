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
</head>
<body>

<?php
require_once('menu.php');
?>


<br /><br /><br />
<div class="center">
    <font class="megaheadline">Välj det öl från listan ni smakar på just nu</font>
</div>

<div class="maincontainer">
    <br><br>

<?php
$sql = sprintf("SELECT * FROM miniSM_beers");

if ($result = $mysqli -> query($sql)) {

    while ($row = $result -> fetch_array()) {

        $BEER_ID = $row["BEER_IDENTITY"];
        $BEER_NAME = $row["BEER_NAME"];
        $STYLE_CODE = $row["STYLE_CODE"];
        
        echo "<div class='buttonContainer'> <a href='beer.php?action=show&beer=".$BEER_ID."'>".$BEER_NAME."</a> </br> (".$STYLE_CODE.") </div><br><br>";

    }
}

?>

</div>


<br><br><br><br><br><br>


<?php
require_once('menu_bottom.php');
?>
</body>
</html>
