<?php
   require __DIR__ . "/../controllers/enviaEmailController.php";
   print_r($_SESSION);
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">;
   <meta name="viewport" content="width=device-width">
   <link href="../../css/style.css" rel="stylesheet"/>

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
         <h2>Receba um link de ativação</h2>
         <p>Ative sua conta agora agora mesmo clicando <a href="" onclick="enviaEmail($_SESSION['nome'], $_SESSION['email'], $_SESSION['token']; return flase;)">aqui</a></p>
      </div>
   </section>
</body>