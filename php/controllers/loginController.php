<?php

session_start();

require_once __DIR__ . '/../models/conexao.php';

// Regra que verifica se o mesmo já está logado.
if($_SESSION['logado'] === TRUE)
{
   header('Location: /../views/index.php');
}

// Valida usuário no banco de dados; atribui TRUE a 'logado' se o mesmo existir.
if(isset($_POST['botaoLogin']))
{
   $emailLogin = $_POST['emailLogin'];
   $senhaLogin = $_POST['senhaLogin'];

   $sql = "SELECT * FROM usuario WHERE tokenVerificado = 1 
   AND email = ? AND senha = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
      $emailLogin,
      $senhaLogin
   ]);

   $login = $stmt->fetch();

   if($login)
   {
      $_SESSION['logado'] = TRUE;
      header('Location: /../views/gestao.php'); 
   }else {
      // Verifica se usuário existe mas sem email verificado.
      $_SESSION['logado'] = FALSE;

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
         $_SESSION['email'] = $emailLogin;
         $_SESSION['senha'] = $senhaLogin;
         header('Location: novoEmailController');
      }
   }
}
