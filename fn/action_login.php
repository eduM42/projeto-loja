<?php
    session_start();

    include_once 'connect.php';

    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];
    $nome = "";
    
    $sql = $conecta->query("select * from tab_clientes WHERE cli_email = '".$usuario."' and cli_senha = '".$senha."'");
    
    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
    $consulta -> execute();
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
      $nome = $linha['cli_nome'];
    }
    foreach($sql as $linha){
      $db_usuario = $linha['cli_email'];
      $db_senha = $linha['cli_senha'];
    }

    if ($usuario == NULL || $senha == NULL || $usuario != $db_usuario || $senha != $db_senha) {
        echo "ACESSO NEGADO";
        header("Location: login.php");
        unset($_COOKIE['login']);
    }else if($usuario == $db_usuario && $senha == $db_senha){
        setcookie('login', TRUE, time()+3600);
        setcookie('usuario', $nome, time()+3600);
        header("Location: index.php");
    }else{
      echo "ERRO";
    }
?>