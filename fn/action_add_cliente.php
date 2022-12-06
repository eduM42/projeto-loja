<?php
   require_once 'conexao.php';

   if(isset($_POST['btncadastrar'])){
      $nome = filter_input(INPUT_POST,'txtnome');
      $sobrenome = filter_input(INPUT_POST, 'txtsobrenome');
      $cpf = filter_input(INPUT_POST, 'txtcpf');
      $fone = filter_input(INPUT_POST, 'txtfone');
      $endereco = filter_input(INPUT_POST, 'txtendereco');
      $data = filter_input(INPUT_POST, 'txtdatanasc');
    //  $data= '2005-12-26';

      $sql = $conecta->prepare("INSERT into tab_clientes (cli_nome, cli_sobrenome, cli_cpf, cli_fone, cli_end, cli_data_nasc) VALUES (:nome,:sobrenome,:cpf,:fone,:end,:data)");
      $sql->bindValue(':nome',$nome);
      $sql->bindValue(':sobrenome',$sobrenome);
      $sql->bindValue(':fone', $fone);
      $sql->bindValue(':data', $data);
      $sql->bindValue(':cpf', $cpf);
      $sql->bindValue(':end', $endereco);
      $sql->execute();
      header('Location: index.html');
   }
   echo "$nome $sobrenome $data $fone";

?>
