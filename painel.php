<?php
    // INICIAR SESSÃO
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bruno Menossi">

    <title>Saquarema - Painel</title>
 
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/geral.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Saquarema</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu_de_opcoes_ocorrencia.php">Livro de ocorrências</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Livros Administrativos</a>
          </li>
         

        </ul>
        <div class="dados-usuario">  <?= $_SESSION['email']; ?> </div>
        <a href="acoes/logout.php" class="btn btn-danger">Sair</a>
        <a href="acoes/login_adm_acao.php" class="btn btn-light">Acesso Restrito(ADM)</a>
      </div>
    </div>
  </nav>
</header>

<main>
  <div class="container-fluid"> <!-- div criada na parte 4 -->
    <?php include_once 'acoes/escreve-mensagem.php'; ?>
  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <?php
          $sql = "SELECT imagem FROM informativos where id = 1";
          $imgres = mysqli_query($con, $sql);
          if ($imgres && mysqli_num_rows($imgres) > 0) {
            $img = mysqli_fetch_assoc($imgres);
            echo '<img src="informativo/imagens/' . htmlspecialchars($img['imagem']) . '"/>';
          }
        ?>

        <div class="container">
          <div class="carousel-caption text-start">
          <?php 
              $sql = "SELECT titulo, descricao FROM informativos where id = 1";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h1>' . htmlspecialchars($titulo['titulo']) . '</h1>';
                echo '<p>' . htmlspecialchars($titulo['descricao']) . '</p>';
              }
            ?>
            <p><a class="btn btn-lg btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal1">Saiba mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <?php
          $sql = "SELECT imagem FROM informativos where id = 2";
          $imgres = mysqli_query($con, $sql);
          if ($imgres && mysqli_num_rows($imgres) > 0) {
            $img = mysqli_fetch_assoc($imgres);
            echo '<img src="informativo/imagens/' . htmlspecialchars($img['imagem']) . '"/>';
          }
        ?>

        <div class="container">
          <div class="carousel-caption">
          <?php 
              $sql = "SELECT titulo, descricao FROM informativos where id = 2";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h1>' . htmlspecialchars($titulo['titulo']) . '</h1>';
                echo '<p>' . htmlspecialchars($titulo['descricao']) . '</p>';
              }
            ?> 
            <p><a class="btn btn-lg btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal2">Saiba mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <?php
          $sql = "SELECT imagem FROM informativos where id = 3";
          $imgres = mysqli_query($con, $sql);
          if ($imgres && mysqli_num_rows($imgres) > 0) {
            $img = mysqli_fetch_assoc($imgres);
            echo '<img src="informativo/imagens/' . htmlspecialchars($img['imagem']) . '"/>';
          }
        ?>

        <div class="container">
          <div class="carousel-caption text-end">
          <?php 
              $sql = "SELECT titulo, descricao FROM informativos where id = 3";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h1>' . htmlspecialchars($titulo['titulo']) . '</h1>';
                echo '<p>' . htmlspecialchars($titulo['descricao']) . '</p>';
              }
            ?> 
            <p><a class="btn btn-lg btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal3">Saiba mais</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <h2>Segunda via de boleto</h2>
        <p>Emita sua segunda via de boleto.</p>
        <p><a class="btn btn-primary" href="https://atendimentoexpresso-s6.webware.com.br/bin/administradora/wmacessoexpresso.asp?adm=68016302" target="blank_">Emitir &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Sugestões</h2>
        <p>Nos envie sugestões ou reclamações para melhoramos nosso ambiente!.</p>
        <p><a class="btn btn-primary" href="sugestoes.php">Escrever &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
        <?php if($_SESSION['tipo'] == 'PROPRIETARIO' ) : ?>

          <div class="col-lg-4">
              <h2>Aluguel</h2>
              <p>Envie e acesse as informações de aluguel.</p>
              <p><a class="btn btn-primary" href="menu_de_opcoes.php">Acessar &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        <?php endif;?>
    </div><!-- /.row -->
    <div class="row">
      <div class="col-lg-4">
      <h2>Reunião</h2>
          <p>Acesse a reunião.</p>
          <p>Para sair da reunião, clique no botão HOME no canto superior esquerdo.</p>
          <p><a class="btn btn-primary" href="reuniao.php">Acessar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <?php 
              $sql = "SELECT titulo FROM informativos where id = 1";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h5 class="modal-title" id="exampleModalLabel">' . htmlspecialchars($titulo['titulo']) . '</h5>';
              }
            ?>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
      <?php 
              $sql = "SELECT conteudo FROM informativos where id = 1";
              $conteudores = mysqli_query($con, $sql);
              if ($conteudores && mysqli_num_rows($conteudores) > 0) {
                $conteudo = mysqli_fetch_assoc($conteudores);
                echo '<p>' . htmlspecialchars($conteudo['conteudo']) . '</p>';
              }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <?php 
              $sql = "SELECT titulo FROM informativos where id = 2";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h5 class="modal-title" id="exampleModalLabel">' . htmlspecialchars($titulo['titulo']) . '</h5>';
              }
            ?>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
      <?php 
              $sql = "SELECT conteudo FROM informativos where id = 2";
              $conteudores = mysqli_query($con, $sql);
              if ($conteudores && mysqli_num_rows($conteudores) > 0) {
                $conteudo = mysqli_fetch_assoc($conteudores);
                echo '<p>' . htmlspecialchars($conteudo['conteudo']) . '</p>';
              }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <?php 
              $sql = "SELECT titulo FROM informativos where id = 3";
              $titulores = mysqli_query($con, $sql);
              if ($titulores && mysqli_num_rows($titulores) > 0) {
                $titulo = mysqli_fetch_assoc($titulores);
                echo '<h5 class="modal-title" id="exampleModalLabel">' . htmlspecialchars($titulo['titulo']) . '</h5>';
              }
            ?>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
      <?php 
              $sql = "SELECT conteudo FROM informativos where id = 3";
              $conteudores = mysqli_query($con, $sql);
              if ($conteudores && mysqli_num_rows($conteudores) > 0) {
                $conteudo = mysqli_fetch_assoc($conteudores);
                echo '<p>' . htmlspecialchars($conteudo['conteudo']) . '</p>';
              }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Ir para o topo</a></p>
    <p>&copy; 2023 Sistema Saquarema &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
