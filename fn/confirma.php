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
    
    $exclui=$conecta->prepare('DELETE FROM `tab_carrinho` WHERE `tab_carrinho`.`cli_id` = :codigo');
    $exclui->bindValue(':codigo', $cli_id);
    $exclui->execute();
    
    header('Location: fim_compra.php');
?>