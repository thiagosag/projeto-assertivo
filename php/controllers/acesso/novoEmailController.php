<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../../controllers/loginController.php";
require __DIR__ . "/../../controllers/enviaEmailController.php";

// Atualiza token no banco de dados e data de expiração.
function novoEmail()
{
   require __DIR__ . "/../../models/conexao.php";
   $token = bin2hex(random_bytes(32));
   $expira = date('Y-m-d H:i:s', strtotime('+1 hour'));

   $sql = "UPDATE usuario SET token = ?, expira = ? WHERE id = ? AND email = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
      $_SESSION['id'],
      $_SESSION['email'],
      $token,
      $expira
   ]);

   enviaEmail($_SESSION['email'], $token);
}



