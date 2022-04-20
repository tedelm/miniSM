<?php
session_start();
include('DBConf.php');

//
if(isset($_SESSION['token'])){
    
    $refreshPage = "<meta http-equiv='refresh' content='0; url=index.php'>";
}

$inputForm = "
<div class='center'>
    <font class='megaheadline'>Välkommen till </br> Mini-SM i hembryggd öl!</font>
</br></br></br></br>
    <font class='headline'>Vänligen verifiera din epost</font>
</br>
    <font class='textline'>Din epost kommer anonymiseras med hjälp av krypteringsteknik och kommer inte kunna knytas till dig.</font>
</br></br>

<div class='divInput'>
    <form action='reg.php?action=register' method='post'>
        <input type='text' name='email' placeholder='epost@exempel.se'>
        <input type='submit' value='Skicka!'>
    </form>    
</div>

<font class='textline'>Följ länken i mailet som skickas till dig!</font>
";

$action = $_GET['action'];
$code = $_GET['code'];

switch ($_GET['action']) {
    case "register":
        
        $toRecipient = $_POST['email'];
        
        //SendMail
        require_once('sendMail.php');  
        //Create verification
        require_once('misc.php');
        $passCode = sha1($userEmail.$salt);
        $verificationURL = $VERIFICATION_URL_FQDN.'/index.php?action=verify&code='.$passCode;   
        
        //Verify user
          $sql = sprintf("SELECT * FROM miniSM_Users WHERE verificationCode='".$passCode."'");
        
            if ($result = $mysqli -> query($sql)) {
                
                if($result->num_rows > 0){
                    
                    sendAnEmail($toRecipient, $verificationURL);
                    
                    $msg_register = "<font class='megaheadline'>High Five!</font> </br> <font class='bigheadline'> En ny länk har skickats till din epost...</font>";  
                    $inputForm = "";                    
                    //echo "User Found!".var_dump($result);
                    //$_SESSION['token'] = $passCode;
                    //$refreshPage = "<meta http-equiv='refresh' content='0; url=index.php'>";
                }else{
                    //echo "User not found, registering";
                    
                    $sqlInsert = "INSERT INTO miniSM_Users (id_, verificationCode, email) VALUES (NULL, '".$passCode."', '".$toRecipient."')";
                    
                    if ( $mysqli->query($sqlInsert) === TRUE ) {
                        //echo "...";
                    } else {
                        $msg_register = "Error: " . $sqlInsert . "<br>" . $mysqli->error;
                    }
                    

                    sendAnEmail($toRecipient, $verificationURL);
                    
                    $msg_register = "<font class='megaheadline'>High Five!</font> </br> <font class='bigheadline'> Vänligen verifiera din epost via länken som skickats till dig.</font>";  
                    $inputForm = "";
                }
                
            }else{
                $msg_register = "<font class='bigheadline'>Whoops, jag kunde inte komma åt databasen...</font>";  
            }        
        
        break; 
        
        
}





?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $refreshPage; ?>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<div class="topnav">
_
-
</div>    


<br /><br /><br />

<?php

echo $inputForm;
echo $msg_register;

?>



</br></br>

</br></br>

</div>


</body>

</html>
