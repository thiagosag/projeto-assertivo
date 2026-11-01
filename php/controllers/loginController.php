<?php

session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once __DIR__ . '/../models/conexao.php';

// Regra que verifica se o mesmo já está logado.
if($_SESSION['logado'] === TRUE)
{
   header('Location: /../views/gestao.php');
   exit;
}

$_SESSION['logado'] = FALSE;
var_dump($_POST);

// Valida usuário no banco de dados; atribui TRUE a '$_SESSION[logado]' se o mesmo existir.
if(isset($_POST['botaoLogin']))
{
   $emailLogin = $_POST['emailLogin'];
   $senhaLogin = $_POST['senhaLogin'];
   
   $sql = "SELECT senha FROM usuario WHERE email = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
      $email
   ]);
   $senhaHashada = $stmt->fetch();

   if(password_verify($senhaLogin, $senhaHashada))
   {
      // Busco usuário que tem email verificado.
      $sql = "SELECT * FROM usuario WHERE tokenVerificado = 1 
      AND email = ? AND senha = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
         $emailLogin,
         $senhaHashada
      ]);
   }
   
   $login = $stmt->fetch();

   if($login)
   {
      $_SESSION['logado'] = TRUE;
      header('Location: /../views/gestao.php');
      exit;
   }else {
      // Verifica se usuário existe mas sem email verificado.
      $sql = "SELECT * FROM usuario WHERE tokenVerificado = 0
      AND email = ? AND senha = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
         $emailLogin,
         $senhaLogin
      ]);

      $loginSemToken = $stmt->fetch();
      
      if($loginSemToken)
      {  
         recuperaId($email);
         $_SESSION['logado'] = NULL;
         $_SESSION['email'] = $emailLogin;
         $_SESSION['senha'] = $senhaLogin;
         header('Location: /../views/novoEmail.php');
         exit;
      }
   }
}
