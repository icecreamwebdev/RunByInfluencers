<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $myAwardSpaceEmail = "your-AwardSpace-email-goes-here";
    $myAwardSpaceEmailPassword = "your-AwardSpace-email-password-goes-here";
    $myPersonalEmail = "your-personal-email-goes-here";

    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';

    if(isset($_POST['submit'])) {

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;

        $mail->Host = 'smtp.mboxhosting.com';
        $mail->SMTPAuth = true;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($myAwardSpaceEmail, 'Mailer');
        $mail->addAddress($myPersonalEmail);
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);    
        $mail->Body = $_POST['message'];

        try {
            $mail->send();
            echo 'Your message was sent successfully!';
        } catch (Exception $e) {
            echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
        
    } else {
        echo "There is a problem with the contact.html document!";
    }
    
?>