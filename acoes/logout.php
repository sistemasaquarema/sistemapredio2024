<?php
    session_start();                // iniciar sessao
    session_unset();                // apagar variaveis de sessao
    session_destroy();              // destruir sessao
    header('Location: ../index.php');  // redirecionar para o index
