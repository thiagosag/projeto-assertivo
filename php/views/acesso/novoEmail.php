<?php
   require __DIR__ . "/../../controllers/acesso/novoEmailController.php";
   novoEmail();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">;
   <meta name="viewport" content="width=device-width">
   <link href="../../../css/style.css" rel="stylesheet"/>

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
         <h2>Novo código de verificação enviado!</h2>
         <p>Você acabou de receber um link de ativação da sua conta via email, basta clicar nele.</a></p>
      </div>
   </section>
</body>