<?php require_once 'connect.php'; require_once 'cabecalho.php' ?>
    <header class="pt-5">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold mb-5">&nbsp;<span class="underline">Seu carrinho:</span>&nbsp;</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"></div>
                </div>
            </div>
        </div>
    </header>
    <section></section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <h3 class="display-6 fw-bold pb-md-4">Produtos&nbsp;<span class="underline">comprados:</span></h3>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 col-xl-12 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <section class="py-4 py-xl-5">
                            <div class="container">
                                <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                        <?php
                                            $usuario = $_COOKIE['email'];

                                            $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
                                            $consulta -> execute();
                                            while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
                                                $cli_id = $linha['cli_id'];
                                            }
                                            $consulta = $conecta -> prepare("SELECT * FROM tab_carrinho WHERE cli_id = '".$cli_id."'");
                                            $consulta -> execute();
                                            while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
                                                $prod_id = $linha['prod_id'];
                                            }

                                            $consulta = $conecta -> prepare("SELECT * FROM tab_produtos WHERE prod_id = '".$prod_id."'");
                                            $consulta -> execute();
                                            while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
                                                $prod_nome = $linha['prod_nome'];
                                                $prod_desc = $linha['prod_desc'];
                                                $prod_img = $linha['prod_img'];
                                            }

                                            if($prod_desc != NULL){
                                                echo "<div class='text-white p-4 p-md-5'>
                                                        <h2 class='fw-bold text-white mb-3'>$prod_nome</h2>
                                                        <p class='mb-4'>$prod_desc</p>
                                                        <h1 style='color: rgb(0,200,0);'>R$ valor</h1>
                                                        <div class='my-3'><a class='btn btn-secondary btn-lg me-2' role='button' href='/confirma.php'>CONFIRMAR COMPRA</a></div>
                                                    </div>
                                                </div>
                                                <div class='col-md-6 order-first order-md-last' style='min-height: 250px;'><img class='w-100 h-100 fit-cover' src='assets/img/$prod_img'></div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section></section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-primary border rounded border-0 border-primary overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">Não possuímos todos os produtos, mas temos a melhor experiência</h2>
                            <p class="mb-4">Apesar de não oferecermos um catálogo mais extenso, provemos um serviço de qualidade inigualável. Caso queira algum produto específico, aguarde para que nós possamos adicionar ao nosso repertório.</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-contain pt-5 pt-md-0" src="illustrations/web-development.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5"></section>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-3 col-lg-8">
                    <div class="fw-bold d-flex align-items-center mb-2"><span>Electrify</span></div>
                    <p class="text-muted">Projeto da loja integrada ao banco de dados MariaDB</p>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Eduardo Mira Ozório - GU302685X</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>

<?php
    require_once 'connect.php';
    echo "Conectado!";
     $usuario = $_COOKIE['email'];

     $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
     $consulta -> execute();
     while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
         $cli_id = $linha['cli_id'];
     }
        echo "<br>ID do cliente:".$cli_id;
     $consulta = $conecta -> prepare("SELECT * FROM tab_carrinho WHERE cli_id = '".$cli_id."'");
     $consulta -> execute();
     while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
         $prod_id = $linha['prod_id'];
     }
     echo "<br>ID do produto:".$prod_id;

     $consulta = $conecta -> prepare("SELECT * FROM tab_produtos WHERE prod_id = '".$prod_id."'");
     $consulta -> execute();
     while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
         $prod_nome = $linha['prod_nome'];
         $prod_desc = $linha['prod_desc'];
         $prod_img = $linha['prod_img'];
     }
     echo "<br>Nome do produto:".$prod_nome;

     if($prod_desc != NULL){
        echo "<div class='text-white p-4 p-md-5'>
                <h2 class='fw-bold text-white mb-3'>$prod_nome</h2>
                <p class='mb-4'>$prod_desc</p>
                <h1 style='color: rgb(0,200,0);'>R$ valor</h1>
                <div class='my-3'><a class='btn btn-secondary btn-lg me-2' role='button' href='/confirma.php'>CONFIRMAR COMPRA</a></div>
            </div>
        </div>
        <div class='col-md-6 order-first order-md-last' style='min-height: 250px;'><img class='w-100 h-100 fit-cover' src='assets/img/$prod_img'></div>";
    }
?>