<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_GET['id'];

    $exclui=$conecta->prepare('DELETE FROM tab_clientes WHERE cli_id=:codigo');
    $exclui->bindValue(':codigo', $codigo);
    $exclui->execute();
    header('Location: listagem_clientes.php');
   


    include_once 'rodape.php';
?>