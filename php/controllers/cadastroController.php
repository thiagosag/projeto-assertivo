<?php
   session_start();

   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   
   require_once __DIR__ . "/../models/conexao.php";
    
   // Dados recebidos no caminho: "views/cadastro.php".
   if(isset($_POST['botaoRegistro'])){
      $nome = $_POST['nome'];
      $apelido = $_POST['apelido'];
      $email =  $_POST['email'];
      $senha = $_POST['senha'];
      $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
      $confirmaSenha = $_POST['confirmaSenha'];
      $token = bin2hex(random_bytes(32));
      $tokenVerificado = 0;
      $expira = date('Y-m-d H:i:s', strtotime('+1 hour'));
      $dataCriado = date('Y-m-d H:i:s');
      
      // Validador de senhas idênticas.
      if(!($senha === $confirmaSenha)){
         header('Location: /../views/cadastro.php');
         exit;
      }

      // Verifica se email já existe no banco de dados.
      $sql = "SELECT email FROM usuario WHERE email = ? LIMIT 1";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$email]);
      $checkEmail = $stmt->fetch();

      if($checkEmail)
      {
         $_SESSION['status'] = 'Email ID alredy exists.';
         header('Location: /../views/cadastro.php');
         exit;
      }

      // Inserção no banco de dados.
      $sql = "INSERT INTO usuario 
      (nome, apelido, email, senha, token, expira, tokenVerificado, dataCriado) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $pdo->prepare($sql);
      $stmt->execute(
         [
            $nome,
            $apelido,
            $email,
            $senhaHash,
            $token,
            $expira,
            $tokenVerificado,
            $dataCriado
         ]
      );

      // Direcionamento para view de validação de email.
      header('Location: /../views/validaEmail.php');
      exit;
   }