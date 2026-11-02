<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
   
require_once __DIR__ . '/../models/conexao.php';



// Validação de token e redirecionamento para login.
$token = $_GET['token'] ?? NULL;
if(!$token){
   die('Token inválido');
}else {
   // Verifica se token existe no banco e se ainda é válido.
   $sql = "SELECT * FROM usuario WHERE token = ? AND expira > NOW();";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$token]);
   $user = $stmt->fetch(PDO::FETCH_ASSOC);

   // Atualiza status de tokenVerificado para verdadeiro.
   $sql = "UPDATE usuario SET tokenVerificado = 1 WHERE email = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$_SESSION['email']]);
   print_r($user);
   
   echo "<h3>Email verificado com sucesso.</h3>";
   echo "<p>Faça login normalmente.</p>";
   echo "<p><a href='/../views/login.php'>Ir para login</a></p>";
}
