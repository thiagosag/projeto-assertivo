<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../models/conexao.php';

// Valida usuário no banco de dados; atribui TRUE a '$_SESSION[logado]' se o mesmo existir.
if(isset($_POST['botaoLogin']))
{
   $emailLogin = $_POST['emailLogin'];
   $senhaLogin = $_POST['senhaLogin'];
   
   $sql = "SELECT * FROM usuario WHERE email = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
      $emailLogin
   ]);
   $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
   var_dump($usuario);
   
   if($usuario['email'] == $emailLogin && password_verify($senhaLogin, $usuario['senha']))
   {  
      var_dump($usuario);
      if($usuario['tokenVerificado'] === 1){
         // Atribui dados à sessão do usuário.
         $_SESSION['logado'] = TRUE;
         $_SESSION['email'] = $usuario['email'];
         $_SESSION['id'] = $usuario['id'];
         $_SESSION['nome'] = $usuario['nome'];
         $_SESSION['dataNascimento'] = $usuario['dataNascimento'];
         $_SESSION['apelido'] = $usuario['apelido'];

         // Direciona à view de gestão após atribuição de dados à sessão do usuário.
         header('Location: ../views/gestao.php');
         exit;
      } else {
         // Se email não validado, então redirecionamento.
         header('Location: ../views/novoEmail.php');
         exit;
      }
   }else {
      echo "Informações não coincidem.";
   }
}
