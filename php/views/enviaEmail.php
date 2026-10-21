<?php
   require __DIR__ . "/../controllers/validaEmailController.php";
   require __DIR__ . "/../controllers/cadastroController.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
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
         <p>Ative sua conta agora agora mesmo clicando <a href="" onclick="enviaEmail($email $nome)">aqui</a></p>
      </div>
   </section>
</body>