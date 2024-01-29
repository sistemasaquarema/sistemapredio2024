<?php

// iniciar uma nova sessão
session_start();

// chamar nossa conexao
require_once 'conexao.php';
    // pegar os dados postados e fazer o escape


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $targetDir = '../informativo/imagens/'; // Substitua pelo caminho real da pasta
  $targetFile = $targetDir . basename($_FILES['imagem']['name']);
  $uploadOk = true;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Verifica se o arquivo é uma imagem
  if(isset($_POST['bt_upimg'])) {
    $check = getimagesize($_FILES['imagem']['tmp_name']);
    if($check === false) {
      $_SESSION['mensagem'] = "O arquivo não é uma imagem.";
      $_SESSION['status']   = "danger";
      header('Location: ../painel_adm.php');
      $uploadOk = false;
    }
  }

  // Verifica se o arquivo já existe
  if (file_exists($targetFile)) {
    $_SESSION['mensagem'] = "Já existe um arquivo com esse nome.";
    $_SESSION['status']   = "danger";
    header('Location: ../painel_adm.php');
    $uploadOk = false;
  }

  // Limita o tamanho do arquivo
  if ($_FILES['imagem']['size'] > 500000) {
    $_SESSION['mensagem'] = "O tamanho do arquivo é muito grande.";
    $_SESSION['status']   = "danger";
    header('Location: ../painel_adm.php');
    $uploadOk = false;
  }

  // Verifica os formatos de arquivo permitidos
  $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
  if (!in_array($imageFileType, $allowedExtensions)) {
    $_SESSION['mensagem'] = "Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $_SESSION['status']   = "danger";
    header('Location: ../painel_adm.php');
    $uploadOk = false;
  }

  $img_nome = basename($_FILES['imagem']['name']);
  $titulo = $_POST['titulo'];
  $texto  = $_POST['texto'];
  $id = $_POST['id'];

   // INSTRUÇÃO SQL
   
   $sql = "UPDATE informativos SET titulo = '$titulo', descricao = '$texto', imagem = '$img_nome' WHERE id = $id";
  // Move o arquivo para a pasta de destino
  if ($uploadOk) {
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $targetFile) && mysqli_query($con, $sql)) {
      $_SESSION['mensagem'] = "Envio realizado com sucesso!";
      $_SESSION['status']   = "success";
      header('Location: ../painel_adm.php');
    } else {
      $_SESSION['mensagem'] = "Não foi possível enviar";
      $_SESSION['status']   = "danger";
      header('Location: ../painel_adm.php');
    }
  }

   // FECHAR CONEXAO
  mysqli_close($con);
}
?>