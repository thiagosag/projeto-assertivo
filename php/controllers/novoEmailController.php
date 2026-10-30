<?php

require __DIR__ . "/../models/conexao.php";

// Atualiza token do usuário.
if($_SESSION['logado'] === NULL)
{
   $token = bin2hex(random_bytes(32));
   $expira = date('Y-m-d H:i:s', strtotime('+1 hour'));

   $sql = "UPDATE token WHERE id = ? AND email = ? AND senha = ?
           SET token = ? AND expira = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
      $_SESSION['idUsuario'],
      $_SESSION['email'],
      $_SESSION['senha'],
      $token,
      $expira
   ]);
   echo 'novo token gerado';
   header('Location: /../views/EnviaEmail.php');
}

