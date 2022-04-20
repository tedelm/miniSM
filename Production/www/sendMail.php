<?php

function sendAnEmail($toRecipient, $verificationURL) {

    //your credentials
    require_once('creds.php');
    $fromSender = $SMTP_SENDER_EMAIL;
    $fromSenderSecret = $SMTP_SENDER_SECRET;

    //SEND AS EMAIL
    require_once('class.phpmailer.php');
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->IsHTML(true);
    $mail->CharSet='utf-8';
    //$mail->IsSMTP(true);
    $mail->Host = $SMTP_SENDER_HOST_FQDN;
    $mail->Port = $SMTP_SENDER_HOST_PORT;
    // optional
    // used only when SMTP requires authentication  
    $mail->SMTPAuth = true;
    $mail->Username = $fromSender;
    $mail->Password = $fromSenderSecret;                    
                

    $tbmessage = "
    <table border='0'>
        <tr>
            <td><h1>Välkommen till Mini-SM i Hembryggd öl!</h1></td>
        </tr>    
        <tr>
            <td><h3>Använd länken nedan för att rösta på ölen!</h3></td>
        </tr>      
        <tr>
            <td><h3><a href='".$verificationURL."'>".$verificationURL."</a></h3></td>
        </tr>                                                                                        
    </table>";

    $message = $tbmessage;
    
        $mail->AddReplyTo($fromSender, $fromSender);
        $mail->SetFrom($fromSender, $fromSender, 0);
        $mail->AddReplyTo($fromSender, $fromSender);
        $mail->AddAddress($toRecipient, $toRecipient);

        $mail->Subject = "Välkommen till Mini-SM i Hembryggd öl!";
        $mail->Body = preg_replace('/\[\]/','',$message);
        
        if(!$mail->Send()) {echo "Mailer Error: " . $mail->ErrorInfo;}
}

?>