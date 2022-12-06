<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgotten Password - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th{
            border: 2px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>Electrify</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <?php
                        //$login = $_COOKIE['login'];
                        //if(isset($login)){
                            //echo "<h2 style='color: var(--bs-orange);'>Olá, Eduardo</h2>";
                        //}else{
                            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Entrar</a></li>";
                        //}
                    ?>
                    <li class="nav-item"><a class="nav-link" href="signup.php">Cadastrar-se</a></li>
                    <li class="nav-item"><a class="nav-link" href="listagem_clientes.php">Lista de clientes</a></li>
                    <li class="nav-item"></li>
                </ul><a class="btn btn-primary shadow" role="button" href="carrinho.php">Carrinho de compras</a>
            </div>
        </div>
    </nav>