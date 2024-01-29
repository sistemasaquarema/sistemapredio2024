<?php

    // iniciar uma nova sessão
    session_start();

    //chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        //pegar os dados postados e fazer o escape-
        $email= $_POST['email'];
        $senha= md5($_POST['senha']);

        //Instrução SQL
        
        $assunto = "Você redefiniu a senha no Sistema Saquarema";
        $mensagem = "Sua senha foi redefinida em Sistema Saquerema com sucesso";
        $header = "From: saquarema";

        mail($email, $assunto, $mensagem, $header);
        $sql= "UPDATE  usuarios SET senha = '$senha' WHERE email = '$email'";
        //Executar instrucao SQL e verificar sucesso
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Redefinido com sucesso!!";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');

        }
        else {
            $_SESSION['mensagem'] = "falhou! Favor contatar o Administrador";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');
        }

        //Fechar conexao
        mysqli_close($con);
    }


