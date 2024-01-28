<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        // pegar os dados postados e fazer o escape
        $assunto  = mysqli_real_escape_string($con, $_POST['assunto']);
        $sugestao = mysqli_real_escape_string($con, $_POST['sugestao']);
        $email   = mysqli_real_escape_string($con, $_SESSION['email']);

        // INSTRUÇÃO SQL
        $sql = "INSERT INTO sugestao (assunto, sugestao, email) VALUES ('$assunto', '$sugestao', '$email')";
        
 
        $header = "From: Saquarema";

        mail('sistemasaquaremapg@gmail.com', $assunto.' - SUGESTAO/RECLAMACAO', $sugestao, $header);



        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Envio realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../painel.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível enviar";
            $_SESSION['status']   = "danger";
            header('Location: ../painel.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }