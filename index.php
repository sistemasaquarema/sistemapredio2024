<?php
//iniciar sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="Bruno Menossi">

    <title>Saquarema - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
  </head>
 

 
  <body class="text-center">
    <div class="container"> 
      <div class="photo-header">
          <img src="images/Background.jpg">
      </div>
      <main class="form-signin">
        <form action="acoes/login.php" method="POST">
        <?php include_once 'acoes/escreve-mensagem.php' ?>
          <h1 class="h3 mb-3 fw-normal corh1" >Entrar no sistema Saquarema</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com.br" autofocus>
            <label for="floatingInput">E-mail</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
          </div>
          </br>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="bt_entrar">Entrar</button>
          </br>
          </br>
          </br>
          <div class='alert corh1'> Nova conta? <a class='btn btn-lg btn-warning' href='cadastrar-usuario.php'> Cadastre-se </a> </div>
      
          
          <p class="mt-5 mb-3 text-muted"> Edificio Saquarema &copy; 2023</p>
        </form>
      </main>
    </div>
  </body>
</html>