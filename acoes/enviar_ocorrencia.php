<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';
        // pegar os dados postados e fazer o escape
        
        $titulo = $_POST['titulo'];
        $desc  = $_POST['descri'];
        $apartamento  = $_POST['apartamento'];
        $morador   =  $_POST['morador'];
        $data_hora_atual  =  $_POST['data_hora_atual'];
        $data_ocorrencia =  $_POST['data_ocorrencia'];
        $data_ocorrencia = implode("-",array_reverse(explode("/",$data_ocorrencia)));
        $data_hora_atual = implode("-",array_reverse(explode("/",$data_hora_atual)));
       
        // INSTRUÇÃO SQL
        $sql = "INSERT INTO ocorrencias (titulo, descri, apartamento, morador, data_hora_atual, data_ocorrencia) VALUES ('$titulo','$desc', '$apartamento', '$morador', '$data_hora_atual', '$data_ocorrencia')";
        
 
        $header = "From: Saquarema";

        mail('sistemasaquaremapg@gmail.com', 'AP - '.$apartamento. ' - Ocorrencia', 'O apartamento '.$apartamento.' teve uma ocorrência cadastrada: '. $desc.' no dia '.$data_ocorrencia.' ', $header);



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