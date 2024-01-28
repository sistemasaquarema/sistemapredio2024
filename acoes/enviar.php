<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';
        // pegar os dados postados e fazer o escape
        $rg  = $_POST['rg'];
        $apartamento = $_POST['apartamento'];
        $inquilinos   =  $_POST['inquilinos'];
        $data_hora_atual  =  $_POST['data_hora_atual'];
        $data_inicio_aluguel =  $_POST['data_inicio_aluguel'];
        $data_fim_aluguel   = $_POST['data_fim_aluguel'];
        $data_inicio_aluguel = implode("-",array_reverse(explode("/",$data_inicio_aluguel)));
        $data_fim_aluguel = implode("-",array_reverse(explode("/",$data_fim_aluguel)));
        $data_hora_atual = implode("-",array_reverse(explode("/",$data_hora_atual)));
        $tipo_aluguel   =  $_POST['tipo_aluguel'];
        // INSTRUÇÃO SQL
        $sql = "INSERT INTO aluguel (rg, apartamento, inquilinos, data_hora_atual, data_inicio_aluguel, data_fim_aluguel, tipo_aluguel) VALUES ('$rg', '$apartamento', '$inquilinos', '$data_hora_atual', '$data_inicio_aluguel', '$data_fim_aluguel', '$tipo_aluguel')";
        
 
        $header = "From: Saquarema";

        mail('sistemasaquaremapg@gmail.com', 'AP - '.$apartamento. ' - Aluguel', 'O apartamento '.$apartamento.' foi alugado do dia '. $data_inicio_aluguel.' até o dia '.$data_fim_aluguel.' ', $header);



        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Envio realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../painel.php');
        } else {
            $_SESSION['mensagem'] = "Não foi ".$data_inicio_aluguel. ' '. $rg. " possível enviar";
            $_SESSION['status']   = "danger";
            header('Location: ../painel.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);