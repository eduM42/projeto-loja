<?php
    include_once 'connect.php';

    $usuario = $_GET['email'];
    $produto = $_GET['prod'];
    $qnt = 1;

    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
    $consulta -> execute();
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
        $cli_id = $linha['cli_id'];
        echo $cli_id;
    }
    
    $sql = $conecta->prepare("INSERT into tab_carrinho (cli_id, prod_id, cart_qnt) VALUES (:cli_id, :prod_id, :cart_qnt)");
    $sql->bindValue(':cli_id',$cli_id);
    $sql->bindValue(':prod_id',$produto);
    $sql->bindValue(':cart_qnt',$qnt);
    $sql->execute();
    
    header('Location: index.php');
?>