<?php
   require __DIR__ . "/../../controllers/acesso/novoEmailController.php";
   novoEmail();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">;
   <meta name="viewport" content="width=device-width">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
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

   <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>