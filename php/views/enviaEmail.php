<?php
   require __DIR__ . "/../controllers/enviaEmailController.php";

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
         <h2>Verifique seu email!</h2>
         <p>Você acabou de receber um link de ativação da sua conta via email, basta clicar nele.</a></p>
      </div>
   </section>
</body>