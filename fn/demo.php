
<?php

// FAZ ALGO CONFORME A PERMISSÃO DO USUÁRIO
    $usuario = $_COOKIE['email'];

    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
    $consulta -> execute();
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
        $cli_perm = $linha['cli_permissao'];
    }
    if($cli_perm == 1){
        // CÓDIGO ADMINISTRADOR
    }else if($cli_perm == 0){
        // CÓDIGO USUÁRIO NORMAL
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// CÓDIGO PARA ACTION LOGIN
    if ($usuario == NULL || $senha == NULL || $usuario != $db_usuario || $senha != $db_senha) {
        echo "ACESSO NEGADO";
        $_SESSION['fail'] == TRUE; // MARCA COMO LOGIN FALHADO
        header("Location: inicial.php"); // REDIRECIONA DE VOLTA A PÁGINA DE LOGIN
    }else if($usuario == $db_usuario && $senha == $db_senha){
        setcookie('login', TRUE, time()+3600); // CRIA UM COOKIE PARA REGISTRAR SE O LOGIN FOI FEITO OU NÃO
        setcookie('usuario', $nome, time()+3600); // CRIA UM COOKIE QUE REGISTRA O NOME DO USUÁRIO
        setcookie('email', $usuario, time()+3600); // CRIA UM COOKIE QUE REGISTRA O EMAIL DO USUÁRIO
        header("Location: loja.php"); // REDIRECIONA PARA A LOJA
    }else{
    echo "ERRO";
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>