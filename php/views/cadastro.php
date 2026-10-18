<?php
   require (__DIR__ . "/../controllers/cadastroController.php");
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
            <h2>Registre-se e acerte!</h2>
            <p>Cadastre-se de forma 100% gratuita.</p>

            <br><label for="nome">Nome completo:</label><br>
            <input name="nome" id="nome" type=text placeholder="Digite seu nome" required/>
            
            <br><label for="apelido">Apelido</label><br>
            <input name="apelido" id="apelido" type=text placeholder="Seja criativo" required/>

            <br><label for="email">Email</label><br>
            <input name="email" id="email" type=email placeholder="Seu melhor email" required/>
            
            <br><label for="senha">Senha</label><br>
            <input name="senha" id="senha" type=password placeholder="Defina uma senha" required/>
            
            <br><label for="confirmaSenha">Repita a senha</label><br>
            <input name="confirmaSenha" id="confirmaSenha" type=password placeholder="Repita a senha" required/>

            <button name="botaoRegistro" type="submit">Cadastrar-se</button>
         </form>
      </div>
   </div>
   
</body>