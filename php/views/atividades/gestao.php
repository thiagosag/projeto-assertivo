<?php
   session_start();
   if($_SESSION['logado'] != TRUE){
      header('Location: login.php');
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width">

   <!-- Recursos de CSS -->
   <link href="../../css/style.css" rel="stylesheet"/>
   <link href="../../../css/gestao.css" rel="stylesheet"/>
</head>
<body>
   <header>
      <div class="caixa">
         <div class="logo">
            <img src="../../img/logo.png"/>
         </div>
         <div>
            <nav class="menu">
               <ul class="menu-lista">
                  <li class="link">
                     <a href="">Inicio</a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </header>
   <section>
      <div>
         <h2>Olá, <?= $_SESSION['nome'];?></h2>
         <p> O que vamos fazer hoje?</p>
      </div>
      <div>
         <div class="tarefa">
            <h3>Novo documento</h3>
            <p>Adicione um novo documento</p>
         </div>
      </div>
   </section>
</body>