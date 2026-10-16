<?php

// Esse arquivo gera conexão direta entre PHP e banco de dados MySQL.

try {
   $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
} catch(PDOException $e) {
   echo($e);
}