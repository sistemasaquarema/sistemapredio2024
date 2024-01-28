<?php
    session_start();            // iniciar sessao
    require_once 'conexao.php'; // chamar conexao


    // pegar os dados postados e fazer o escape
    $email = $_SESSION['email'];
    var_dump($email) ;
    // CONSULTAR NO BANCO DE DADOS
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND adm = 1;";
    
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);
    if(mysqli_affected_rows($con) > 0) {
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
        header('Location: ../painel_adm.php');// REDIRECIONAR PARA O PAINEL SPN
       
    } else {
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Usuario não é Administrador";
        $_SESSION['status'] = "danger";
        header('Location: ../index.php'); // REDIRECIONAR PARA O INDEX
    }
    mysqli_close($con); // fechar conexao

