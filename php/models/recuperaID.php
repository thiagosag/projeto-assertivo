<?php
require __DIR__ . "conexao.php";

// Recuperação de ID para inserção na sessão do usuário.
function recuperaID($email)
{  
   // Valida se ID já existe em $_SESSION['idUsuario'];
   if (isset($_SESSION['idUsuario'])){
      $sql = "SELECT id FROM usuario WHERE email = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$email]);
      return $_SESSION['idUsuario'] = $stmt->fetch();
   }else {
      return $_SESSION['idUsuario'];
   }
   
}