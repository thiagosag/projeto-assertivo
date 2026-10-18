<?php

// Conexão direta entre PHP e banco de dados MySQL.

try {
   $pdo = new PDO("mysql:host=localhost;dbname=assertivo", "root", "");
} catch(PDOException $e) {
   echo($e);
}