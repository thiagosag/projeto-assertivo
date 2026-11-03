<?php
session_start();

require_once __DIR__ . '/../../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviaEmail($emailEnv, $tokenEnv)
{  
   echo 'clicou na função';
   $mail = new PHPMailer(true);
   try {
      // Configuração do servidor.
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'thiagosesabene@gmail.com';             //SMTP username
      $mail->Password   = 'vhuu sbdx behq oxzv';                  //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      // Recipients
      $mail->setFrom('thiagosesabene@gmail.com', 'Assertivo');
      $mail->addAddress($emailEnv);     

      //Content
      $mail->isHTML(true);                                        
      $mail->Subject = 'Verifique seu email';
      $mail->Body    = "Aqui está o seu código de <b>verificação!</b>
      <br> <a href='http://localhost/2%20Semestre/Assertivo/Projeto/php/views/validaEmail.php?token=$tokenEnv> Verificar Conta </a>";

      $mail->send();
      echo 'Mensagem enviada';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}