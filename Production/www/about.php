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
    <font class="megaheadline">Välkommen till </br> Mini-SM i hembryggd öl!</font>
</br></br>
    <font class="headline">Läs igenom reglerna och klicka sedan dig fram till den öl ni smakar på just nu via länken ovan 'Öl'</font>
</br></br></br></br>

</div>

<div class="maincontainerRegler">
    <font class="headline">Regler:</font>
</br></br>    

<ol>
    <li>All röstning sker anonymt</li>
    <li>Ni kan enbart rösta en gång per öl</li>
    <li>Varje öl ska bedömmas på följande enligt SHBF Typdefinition
        <ul>Beska (IBU)</ul>
        <ul>Färg (EBC)</ul>
        <ul>Kolsyrenivå (co2)</ul>
        <ul>Korrekt enligt Typdefinition</ul>
    </li>
    <li>Varje öl ska även bedömmas enlig personlig smak och tycke</li>
    </ol> 

</div>



<?php
require_once('menu_bottom.php');
?>



</body>

</html>
