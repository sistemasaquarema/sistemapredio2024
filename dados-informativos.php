<?php





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // chamar nossa conexao

  // pegar os dados postados e fazer o escape

  $targetDir = 'informativo/imagens'; // Substitua pelo caminho real da pasta
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

  $img_nome = basename($_FILES['imagem']['name']);
  $titulo = $_POST['titulo'];
  $texto  = $_POST['texto'];
  $id = $_POST['id'];

   // INSTRUÇÃO SQL
   
   /*$sql = "UPDATE informativos SET titulo = '$titulo', descricao = '$texto', imagem = '$img_nome' WHERE id = $id";*/
  // Move o arquivo para a pasta de destino
  if ($uploadOk) {
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $targetFile)) {
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