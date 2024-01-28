<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $targetDir = 'Informativos/Imagens'; // Substitua pelo caminho real da pasta
  $targetFile = $targetDir . basename($_FILES['imagem']['name']);
  $uploadOk = true;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Verifica se o arquivo é uma imagem
  if(isset($_POST['bt_upimg'])) {
    $check = getimagesize($_FILES['imagem']['tmp_name']);
    if($check === false) {
      echo 'O arquivo não é uma imagem.';
      $uploadOk = false;
    }
  }

  // Verifica se o arquivo já existe
  if (file_exists($targetFile)) {
    echo 'Já existe um arquivo com esse nome.';
    $uploadOk = false;
  }

  // Limita o tamanho do arquivo
  if ($_FILES['imagem']['size'] > 500000) {
    echo 'O tamanho do arquivo é muito grande.';
    $uploadOk = false;
  }

  // Verifica os formatos de arquivo permitidos
  $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
  if (!in_array($imageFileType, $allowedExtensions)) {
    echo 'Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.';
    $uploadOk = false;
  }

  // Move o arquivo para a pasta de destino
  if ($uploadOk) {
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $targetFile)) {
      echo 'O arquivo foi enviado com sucesso.';
    } else {
      echo 'Ocorreu um erro ao enviar o arquivo.';
    }
  }

  if (isset($_POST['bt_upimg'])) {
    // Processa os campos de entrada de texto
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
}

  
}
?>