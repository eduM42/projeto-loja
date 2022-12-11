<?php
    include_once 'cabecalho.php';
    require_once 'connect.php';

    $codigo=$_GET['id'];
    $exclui=$conecta->prepare('DELETE FROM tab_carrinho WHERE cli_id=:codigo');
    $exclui->bindValue(':codigo', $codigo);
    $exclui->execute();

    $exclui=$conecta->prepare('DELETE FROM tab_clientes WHERE cli_id=:codigo');
    $exclui->bindValue(':codigo', $codigo);
    $exclui->execute();
    header('Location: index.php');
   


    include_once 'rodape.php';
?>