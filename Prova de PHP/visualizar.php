<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

$arquivo = fopen('locação.txt', 'r');

while (($linha = fgets($arquivo)) !== false) {
    $info = explode(',', $linha);

    echo "Nome do livro: " . $info[0] . "<br>";
    echo "Nome do autor(a): " . $info[1] . "<br>";
    echo "Responsável pela locação: " . $info[2] . "<br>";
    echo "<br>";
}

fclose($arquivo);
