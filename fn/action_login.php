<?php
$login = $_GET['login'];
$entrar = $_GET['entrar'];
$senha = md5($_GET['password']);
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM tab_clientes WHERE cli_email =
    '$login' AND cli_senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("login",$login, time() + 3600);
        header("Location:index.php");
      }
  }
?>