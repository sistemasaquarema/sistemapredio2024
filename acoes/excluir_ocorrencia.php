<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';

        // pegar os dados postados e fazer o escape
        $id = $_POST['id'];

        // INSTRUÇÃO SQL
        $sql = "DELETE FROM ocorrencias WHERE id = '$id'";

        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Deletado realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../painel.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível deletar ";
            $_SESSION['status']   = "danger";
            header('Location: ../painel.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    