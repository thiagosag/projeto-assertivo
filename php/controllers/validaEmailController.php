<?php

session_start();
require '/../models/conexao.php';

// Validação de token e redirecionamento para login.
$token = $_GET['token'] ?? NULL;
if(!$token){
   die('Token inválido');
}else{
   // Verifica se token existe no banco e se ainda é válido.
   $sql = "SELECT * FROM usuario WHERE token = ? AND $expira > NOW();";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$token]);
   $user = $stmt->fetch(PDO::FETCH_ASSOC);
   print_r($user);

   // Atualiza status de tokenVerificado para verdadeiro.
   $sql = "UPDATE usuario SET tokenVerificado = 1 WHERE id = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$_SESSION['idUsuario']]);
   
   echo "<h3>Email verificado com sucesso.</h3>";
   echo "<p>Faça login normalmente.</p>";
   echo "<p><a href='/../views/login.php'>Ir para login</a></p>";
}
