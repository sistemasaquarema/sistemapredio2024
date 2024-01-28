<?php

    $host     = "127.0.0.1";
    $user     = "u605801231_saquarema";
    $password = "Seven@13";
    $dbname   = "u605801231_sistemasaquare";

    // CONEXAO
    @$con = mysqli_connect($host, $user, $password, $dbname);

    // TESTAR CONEXAO
    if(mysqli_connect_error()) {
        echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
        exit;
    } else {
        // echo "<p>Conexão realizada com sucesso!</p>";
    }

    