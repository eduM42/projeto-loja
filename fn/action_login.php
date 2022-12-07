<?php
    session_start();

    include_once 'connect.php';

    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];
    
    $sql = $conecta->query("select * from tab_clientes WHERE cli_email = '".$usuario."' and cli_senha = '".$senha."'");
    foreach($sql as $linha){
      $db_usuario = $linha['cli_email'];
      $db_senha = $linha['cli_senha'];
    }

    if ($usuario == NULL || $senha == NULL || $usuario != $db_usuario || $senha != $db_senha) {
        echo "ACESSO NEGADO";
        header("Location: login.php");
    }else if($usuario == $db_usuario && $senha == $db_senha){
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    }else{
      echo "ERRO";
    }

?>