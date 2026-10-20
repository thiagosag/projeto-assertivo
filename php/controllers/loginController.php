<?php

session_start();

require_once __DIR__ . '/../models/conexao.php';

// Regra que verifica se o mesmo já está logado.
if($_SESSION['logado'] === TRUE)
{
   header('Location: /../views/index.php');
}

// Verifica se usuário existe no banco e atribui 'logado = true' se sim.
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $sql = "SELECT * FROM usuario WHERE tokenVerificado === 1 
   AND email = ? AND senha = ?";
   $stmt = $pdo->prepare[$sql];
   $stmt->execute([
      $email,
      $senha
   ]);
   $login = $stmt->fetch();

   if($login)
   {
      $_SESSION['logado'] = TRUE;
      header('Location: /../views/index.php'); 
   }
}
