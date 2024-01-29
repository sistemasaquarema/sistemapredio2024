<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastrar Usuário </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema.css" />
  <link rel="stylesheet" href="assets/css/form-validation.css" />
  
</head>
<body>

<!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Cadastrar</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="index.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center" id="quem">

  <h3>Cadastre-se</h3>
  
  <form action="acoes/cria-usuario.php" method="POST" class="needs-validation container" novalidate onSubmit="return validaCampo()">

    <div class="row g-12">

    <div class="col-sm-12">
      <label for="tipo" class="form-label">Selecione</label>
      <select class="form-control" id="tipo" name="tipo" required>
        <option value="proprietário">Proprietário</option>
        <option value="inquilino">Inquilino</option>
      </select>
    </div>

      <div class="col-sm-12">
        <label for="nome" class="form-label">Nome e sobrenome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" autofocus required>
        <div class="invalid-feedback">
          Digite seu nome e sobrenome.
        </div>
      </div>

      <div class="col-sm-12">
        <label for="ap" class="form-label">Numero do apartamento</label>
        <input type="text" class="form-control" id="ap" name="ap" placeholder="exemplo: 100" value="" autofocus required>
        <div class="invalid-feedback">
            Digite o numero do AP.
        </div>
      </div>



      <div class="col-12">
        <label for="email" class="form-label">Digite seu email</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        <div class="invalid-feedback">
            Digite seu email!
          </div>
        </div>
      </div>


      <div class="col-12">
        <label for="email" class="form-label">Digite novamente seu e-mail</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="confemail" name="confemail" placeholder="name@example.com" required>
        <div class="invalid-feedback">
            Confirme seu email.
          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="senha" class="form-label">Senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
        <div class="invalid-feedback">
            Crie uma senha.
          </div>
        </div>
      </div>


      <div class="col-12">
        <label for="confirmpass" class="form-label">Digite novamente sua senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="" required>
        <div class="invalid-feedback">
           Confirme sua senha.
          </div>
        </div>
      </div>
      </div>
      <br>
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
      Sign up
      </button>
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
  <script>
    function validaCampo(){
      var campo = document.getElementById('senha');
      var txt   = document.getElementById('senha').value;
      var n     = txt.length;
      var campofim = document.getElementById('passconfirm');
      var textconfirm = document.getElementById('passconfirm').value;
      var email = document.getElementById('email').value;
      var confemail = document.getElementById('confemail').value;
      if(n < 6) {
        alert("Sua senha tem " + n + " caracters,voce precisa de 6 ou mais");
        return false;
        campo.focus();
      } else if (txt != textconfirm){
        alert("as senhas precisam ser iguais");
        return false;
        campofim.focus();
        document.getElementById('passconfirm').value='';
      } else if( email != confemail) {
        alert("os emails precisam ser iguais");
        return false;

      }
        return true;
    }


  </script>
</body>
</html>