<?php

if(!isset($_SESSION['token'])){
    
    $refreshPage = "<meta http-equiv='refresh' content='0; url=reg.php'>";
    
    echo "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='css/style.css'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <?php echo $refreshPage; ?>
        </head>
        <body>
        </body>
        </html>
    
    ";
    

}else{
    $token = "Token_".$_SESSION['token'];
}

?>