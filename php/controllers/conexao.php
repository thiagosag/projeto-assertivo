<?php

// Arquivo gera conexão entre PHP e banco de dados MySQL.

try {
   $pdo = new PDO("mysql:host=localhost;dbname=", "root", "");
}