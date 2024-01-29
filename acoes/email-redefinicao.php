<?php

    // iniciar uma nova sessão
    session_start();

    //chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        //pegar os dados postados e fazer o escape-
        $email= mysqli_real_escape_string($con, $_POST['email']);


        //Instrução SQL
        $sql= "SELECT nome FROM usuarios where email = '$email' ";


        $link = "https://www.sistemasaquerema.site/redefina-sua-senha.php?email=$email";

        //Executar instrucao SQL e verificar sucesso
        if(mysqli_query($con, $sql)) {
            $assunto = "Redefinir Senha do Saquarema";
            $mensagem = "Redefina sua senha em: " . $link;
            $header = "From: saquarema";
            mail($email, $assunto, $mensagem, $header);

            $_SESSION['mensagem'] = "Email para redifinição enviado!";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');

        }
        else {
            $_SESSION['mensagem'] = "Email não existe.";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');
        }

        //Fechar conexao
        mysqli_close($con);
    }


