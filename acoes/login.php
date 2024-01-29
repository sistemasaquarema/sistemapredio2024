<?php
    session_start();            // iniciar sessao
    require_once 'conexao.php'; // chamar conexao

if(isset($_POST['bt_entrar'])) {
    // pegar os dados postados e fazer o escape
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

    // CONSULTAR NO BANCO DE DADOS
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';";
    
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);
    if(mysqli_affected_rows($con) > 0) {
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem']  = "Login realizado!";
        $_SESSION['status']    = "Sucesso!";
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['email']     = $dados['email'];
        $_SESSION['apartamento']     = $dados['ap'];
        header('Location: ../painel.php');// REDIRECIONAR PARA O PAINEL SPN
       
    } else {
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Erro no login! Email ou senha invalido!";
        $_SESSION['status'] = "danger";
        header('Location: ../index.php'); // REDIRECIONAR PARA O INDEX
    }
    mysqli_close($con); // fechar conexao
}
