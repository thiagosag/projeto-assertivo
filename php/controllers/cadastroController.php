<?php
   session_start();  
   include (__DIR__ . "/../models/conexao.php");
   
   // Dados recebidos no caminho: "views/cadastro.php".
   if(isset($_POST['botaoRegistro'])){
      $nome = $_POST['nome'];
      $apelido = $_POST['apelido'];
      $email =  $_POST['email'];
      $senha = password_hash($senha, PASSWORD_DEFAULT);
      $confirmaSenha = $_POST['confirmaSenha'];
      $token = bin2hex(random_bytes(32));
      $tokenVerificado = FALSE;
      $expira = date('Y-m-d H:i:s', strotime('+1 hour'));

      // Validador de senhas identicas.
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
      (nome, apelido, email, senha, token, expira) 
      VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$nome, $apelido, $email, $senha, $token, $expira, $tokenVerificado]);
   }