<?php
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use League\OAuth2\Client\Provider\Google;

function enviaEmail($emailEnv, $nomeEnv)
{
   $mail = new PHPMailer(true);
   try {
      // Configuração do servidor.
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'thiagosesane@gmail.com';                     //SMTP username
      $mail->Password   = 'xlsm muyz xser xqqs';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      // Recipients
      $mail->setFrom('thiagosesabene@gmail.com', 'Assertivo');
      $mail->addAddress($emailEnv, $nomeEnv);     

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Verifique seu email';
      $mail->Body    = "Aqui está o seu código de <b>verificação!</b>
                        <br> <a href='/../views/validaEmail?$token'";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo 'Message has been sent';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}