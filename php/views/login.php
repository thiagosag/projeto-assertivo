<?php
   require __DIR__ . "/../controllers/loginController.php";
   var_dump($_SESSION);
   print($login);
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
                     <a href="">Entrar</a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </header>
   <div class="wrapper">
      <div>
         <h2>Lorem Ipsum</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam porro eum ipsum iure earum, expedita libero illum itaque est error cum modi vel consequatur voluptate nulla perspiciatis corrupti maxime tenetur.</p>
      </div>

      <div>
         <form method="POST">
            <h2>Inicie sessão</h2>
            <p>Tenha acesso à plataforma!</p>

            <br><label for="email">Email</label><br>
            <input name="emailLogin" id="email" type=email placeholder="Seu email cadastrado" required/>
            
            <br><label for="senha">Senha</label><br>
            <input name="senhaLogin" id="senha" type=password placeholder="Sua senha" required/>
            
            <button name="botaoLogin" type="submit">Login</button>
         </form>
      </div>
   </div>
   
</body>