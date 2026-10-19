<?php
   // Conexão direta entre PHP e banco de dados MySQL.
   try {
      $pdo = new PDO("mysql:host=localhost;dbname=assertivo", "root", "");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
      die('Erro na conexão:' . $e->getMessage());
   }