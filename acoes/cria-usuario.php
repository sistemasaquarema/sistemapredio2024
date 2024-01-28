<?php

    // iniciar uma nova sessão
    session_start();

    //chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        //pegar os dados postados e fazer o escape-
        $nome= mysqli_real_escape_string($con, $_POST['nome']);
        $ap= mysqli_real_escape_string($con, $_POST['ap']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $senha= md5(mysqli_real_escape_string($con, $_POST['senha']));

        //Instrução SQL
        $sql= "INSERT INTO usuarios (nome, ap, email, senha) VALUES ('$nome', '$ap', '$email', '$senha')";
        $idusuario= mysqli_real_escape_string($con, $_POST['idusuario']);
        $assunto = "Cadastro no Sistema Saquarema";
        $mensagem = "Parabens! voce se registrou no sistema saquarema!! Aproveite nossas funções exclusivas ";
        $header = "From: saquarema";

        mail($email, $assunto, $mensagem, $header);

        //Executar instrucao SQL e verificar sucesso
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!!";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');

        }
        else {
            $_SESSION['mensagem'] = "O cadastro falhou! Favor contatar o Administrador";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');
        }

        //Fechar conexao
        mysqli_close($con);
    }


