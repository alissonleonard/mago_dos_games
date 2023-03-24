<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$vendedor = "";
$fabricante = "";
$modelo = "";
$preco = "";
$email = "";
$telefone = "";

$errorMessage = "";
$sucessMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET mostra os dados do consoles
    
    if (!isset($_GET["id"])) {
        header("location: /Alisson/mago_dos_games/index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM consoles WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /Alisson/mago_dos_games/index.php");
        exit;
    }

    $vendedor = $row["vendedor"];
    $fabricante = $row["fabricante"];
    $modelo = $row["modelo"];
    $preco = $row["preco"];
    $email = $row["email"];
    $telefone = $row["telefone"];
    
}
else {
    //Faz Update dos dados do consoles 
    
    $id = $_POST["id"];
   $vendedor = $_POST["vendedor"];
   $fabricante = $_POST["fabricante"];
   $modelo = $_POST["modelo"];
   $preco = $_POST["preco"];
   $email = $_POST["email"];
   $telefone = $_POST["telefone"];

        do {
            if (empty($id) || empty($vendedor) || empty($fabricante)  || empty($modelo)  || empty($preco)  || empty($email)  || empty($telefone)) {
                $errorMessage = "Todos os campos são obrigatórios";
                break;
            }

            $sql = "UPDATE consoles " . 
            "SET vendedor = '$vendedor', fabricante = '$fabricante', modelo = '$modelo', preco = '$preco', email = '$email', telefone = '$telefone' " . 
            "WHERE id = $id";

            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Campo Inválido: " . $connection->error;
                break;
            }

            $successMessage = "Console atualizado com sucesso!";

            header("location: /Alisson/mago_dos_games/index.php");
            exit;
            
    } while (false);
    
}
?>
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
        <title>Create</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
                                        <i class="bi-cart" style="font-size:24px;line-height:24px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="flex-fill">
            <div class="container">
                <h2>Cadastrar Vendedor</h2>
                <?php
                if (!empty($errorMessage) ) {
                    echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><button>
                    </div>
                    ";

                }
                ?>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Vendedor</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="vendedor" value="<?php echo $vendedor; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Fabricante</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="fabricante" value="<?php echo $fabricante; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Modelo</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="modelo" value="<?php echo $modelo; ?>">
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Preço</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="preco" value="<?php echo $preco; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Telefone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="telefone" value="<?php echo $telefone; ?>">
                        </div>
                    </div>


                    <?php
                    if (!empty($sucessMessage)) {
                        echo "
                        <div class='row, mb-3>
                        <div class= 'offset-sm-3 col-sm-6'>
                        <div class='alert alert-suecess alert dismissible fade show' role='alert'>
                        <strong>$sucessMessage</strong>
                        <button type='button' class='btn-close ' data-bs-dismiss='alert' aria-label>
                        </div>
                        </div>
                        </div>
                        ";
                      
                    }
                    ?>

                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="/Alisson/mago_dos_games/index.php" role="button">Cancel</a>

                        </div>
                    </div>


                </div>
                </div>

                </div>
                </form>
                   
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
                                </a>
                                <br>
                                <a href="/termos.html" class="text-decoration-none text-dark">
                                    Termos de Uso
                                </a>
                                <br>
                                <a href="/quemsomos.html" class="text-decoration-none text-dark">
                                    Quem Somos
                                </a>
                                <br>
                                <a href="/trocas.html" class="text-decoration-none text-dark">
                                    Trocas e Devoluções
                                </a>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="/contato.html" class="text-decoration-none text-dark">
                                    Contato pelo Site
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
