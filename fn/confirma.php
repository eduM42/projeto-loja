<?php
    include_once 'connect.php';

    $usuario = $_GET['email'];
    $qnt = 1;

    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
    $consulta -> execute();
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
        $cli_id = $linha['cli_id'];
        echo $cli_id;
    }
    
    $sql = $conecta->prepare("DELETE FROM tab_carrinho WHERE='".$cli_id."'");
    $sql->execute();
    
    header('Location: index.php');
?>