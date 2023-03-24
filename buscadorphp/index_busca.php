<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="/img/favicon/android-icon-192x192.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/img/favicon/favicon-32x32.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="/img/favicon/favicon-96x96.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/img/favicon/favicon-16x16.png"
        >
        <link rel="manifest" href="/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/style.css">
        


        <title>Mago dos Games :: Página Principal</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <b>Mago dos Games</b>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/index.html">Principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/contato.html">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/cadastrar_produto.html">Cadastrar Produto</a>
                            </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/cadastro.html" class="nav-link text-white">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/login.html" class="nav-link text-white">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0" title="5 produto(s) no carrinho">
                                        <small>5</small>
                                    </span>
                                    <a href="/carrinho.html" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>                        
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="flex-fill">
            <div class="container"></div>
        <h2 class="text-center-hv">Pesquisa de Consoles</h2>
        <br>
        <form action="busca.php" method="GET">
        <div class="button-center-hv">   
        <br>
        <div class="box-search">
        <input class="form-control" type="text" name="modelo_console" placeholder="Insira o nome do console">
        </div>
        <button class= "btn btn-primary" style="width:100px;">Buscar</button>
        </div>
        <br>

        </form>
        <div>
                <h2 class="text-center-hv">Lista de Consoles</h2>
            </div>
                <style>
                    .table{
                        border-radius: 15px 15px 0 0;
                    }
                    .box-search{
                        display:flex;
                        justify-content: center;
                        gap: .1%;

                    }

                    .text-center-hv {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .button-center-hv{
                        
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        
                       
                    }

                    .table-center-hv{

                        display: flex;
                        align-items: center;
                        justify-content: center;

                    }


                </style>
                <br>
                <div class="button-center-hv">
                <a class="btn btn-primary" class="button-center-hv" href="/Alisson/mago_dos_games/php/create.php" role="button" >Novo Console</a>
                </div>
                
                <br>
                <br>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vendedor</th>
                            <th>Fabricante</th>
                            <th>Modelo</th>
                            <th>preco</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Data de Modificação</th>
                    
                        </tr>
                        
                    </thead>
                    <tbody>
                       
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "myshop";

                        $connection = new mysqli($servername, $username, $password, $database);

                        if($connection->connect_error) {
                            die("Connection failed: ". $connection->connect_error);
                        }

                        $sql = "SELECT * FROM consoles";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Campo Inválido:" . $connection->error);
                        }

                        while($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                            <td>$row[id]</td>
                            <td>$row[vendedor]</td>
                            <td>$row[fabricante]</td>
                            <td>$row[modelo]</td>
                            <td>$row[preco]</td>
                            <td>$row[email]</td>
                            <td>$row[telefone]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/Alisson/mago_dos_games/php/edit.php?id=$row[id]'>Editar</a>
                                
                                <a class='btn btn-danger btn-sm' href='/Alisson/mago_dos_games/php/delete.php?id=$row[id]'>Apagar</a>

                            </td>
                        </tr>
                            
                            ";
                        }
                        ?>



                    </tbody>
                </table>
                </div>
            </div>
        </main>

                <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2023 - Mago dos Games Ltda ME
                        <br>
                        Rua Benjamin Knobel, 33, Marília/SP
                        <br>
                        CPNJ 99.999.999/0001-99
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/privacidade.html" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="/termos.html" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="/quemsomos.html" class="text-decoration-none text-dark">
                            Quem Somos
                        </a><br>
                        <a href="/trocas.html" class="text-decoration-none text-dark">
                            Trocas e Devoluções
                        </a>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/contato.html" class="text-decoration-none text-dark">
                            Contato pelo Site
                        </a><br>
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                            email@dominio.com
                        </a>
                        <br>
                        E-mail:
                        <a href="mailto:magodosgames@gmail.com" class="text-decoration-none text-dark">
                            magodosgames@gmail.com
                        </a>
                        <br>
                        Telefone:
                        <a href="phone:14998069022" class="text-decoration-none text-dark">
                            (14) 99806-9022
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>