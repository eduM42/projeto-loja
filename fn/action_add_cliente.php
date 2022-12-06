<?php
   require_once 'connect.php';

   if(isset($_GET['btncadastrar'])){
      $email = filter_input(INPUT_GET,'txtemail');
      $senha = filter_input(INPUT_GET,'txtsenha');
      $nome = filter_input(INPUT_GET,'txtnome');
      $sobrenome = filter_input(INPUT_GET, 'txtsobrenome');
      $cpf = filter_input(INPUT_GET, 'txtcpf');
      $fone = filter_input(INPUT_GET, 'txtfone');
      $endereco = filter_input(INPUT_GET, 'txtendereco');
      $data = filter_input(INPUT_GET, 'txtdatanasc');
    //  $data= '2005-12-26';

      $sql = $conecta->prepare("INSERT into tab_clientes (cli_email, cli_senha, cli_nome, cli_sobrenome, cli_cpf, cli_fone, cli_end, cli_data_nasc) VALUES (:email, :senha, :nome,:sobrenome,:cpf,:fone,:end,:data)");
      $sql->bindValue(':email',$email);
      $sql->bindValue(':senha',$senha);
      $sql->bindValue(':nome',$nome);
      $sql->bindValue(':sobrenome',$sobrenome);
      $sql->bindValue(':fone', $fone);
      $sql->bindValue(':data', $data);
      $sql->bindValue(':cpf', $cpf);
      $sql->bindValue(':end', $endereco);
      $sql->execute();
      header('Location: confirm.html');
   }
   echo "$nome $sobrenome $data $fone, $cpf, $endereco";

?>
