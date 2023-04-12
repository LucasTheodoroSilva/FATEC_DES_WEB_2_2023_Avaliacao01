<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    session_start();
    echo '<h2>Bem vindo ' . $_SESSION['login'] . '!</h2>';
    ?>
    <h2>Cadastrar registro</h2>
    <form method="post" action="cadastrar.php">
        <label for="campo1">Nome do livro:</label>
        <input type="text" name="livro" id="livro">
        <br><br>
        <label for="campo2">Nome do autor(a):</label>
        <input type="text" name="autor" id="autor">
        <br><br>
        <label for="campo3">Responsável pela locação:</label>
        <input type="text" name="responsavel" id="responsavel">
        <br><br>
        <input type="submit" name="cadastrar" value="Registrar">
    </form>

    <br>
    <a href="visualizar.php">Visualizar registros</a>
    <br>
    <a href="logout.php">Encerrar sessão</a>
</body>

</html>