<?php
if (!isset($_GET['modelo_console'])) {
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['modelo_console'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=myshop', 'root', '');

$sth = $dbh->prepare('SELECT * FROM consoles WHERE modelo LIKE :modelo');
$sth->bindParam(':modelo', $nome, PDO::PARAM_STR);
$sth->execute();

$resultado = $sth->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultado);
exit;
?>
