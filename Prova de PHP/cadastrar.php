<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['cadastrar'])) {
    $livro = $_POST['livro'];
    $autor = $_POST['autor'];
    $responsavel = $_POST['responsavel'];

    $arquivo = fopen('locação.txt', 'a');

    fwrite($arquivo, $livro . ',' . $autor . ',' . $responsavel . PHP_EOL);

    fclose($arquivo);

    header('Location: home.php');
    exit;
}
?>
