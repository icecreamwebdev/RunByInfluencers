<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
$message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'runbyinfluencers.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'test@runbyinfluencers.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '%34{31ed($ce'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('test@runbyinfluencers.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('test@runbyinfluencers.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert">
 <h2>Message sent! <br />Thanks for contacting us!</h2>
                    <i class="fas fa-check-circle fa-3x"></i>
                </div>';
      
  } catch (Exception $e){
    $alert = '<div class="alert">
                <h2>'.$e->getMessage().' <br /> contact us at hello@runbyinfluencers.com</h2>
                <i class="fas fa-times-circle fa-3x" style="color:red"></i>
              </div>';
  }
}
?>
