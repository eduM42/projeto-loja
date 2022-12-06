<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_GET['id'];
    
    $exclui=$conecta->prepare('SELECT * FROM tab_clientes WHERE cli_id=:codigo');
    $exclui->bindValue(':codigo',$codigo);
    $exclui->execute();

    $resultado=$exclui->fetch(PDO::FETCH_ASSOC);
    echo "<div class='row'>";
        echo "<div class='col s12 m6 push-m3'>";
            echo "<h2>Excluindo clinte </h2>";
            echo "Nome = ".$resultado['cli_nome']."<br>";
            echo "Sobrenome = ".$resultado['cli_sobrenome']."<br>";
            echo "Telefone = ".$resultado['cli_fone']."<br>";
            echo "Data Nasc.= ".$resultado['cli_data_nasc']."<br>";
            echo "<a href='listagem_clientes.php' class='btn'>Listagem de clientes</a>&nbsp;";
            echo "<a href='action_exclui_cliente.php?id=$codigo' class='btn red'>Sim, excluir o cliente</a>";
        echo "</div>";
    echo "</div>";


    include_once 'rodape.php';
?>