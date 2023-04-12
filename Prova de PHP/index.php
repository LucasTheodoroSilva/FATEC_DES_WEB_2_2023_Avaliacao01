<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Index</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['Login'])) {
        if (isset($_POST['acao'])) {
            $login = "fatec";
            $senha = "araras";

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if ($login == $loginForm && $senha == $senhaForm) {
                //Logado com sucesso!
                $_SESSION['login'] = $login;
                header('Location: home.php');
            } else {
                //Algum erro ocorreu
                echo 'Dados inválidos.';
            }
        }
    } else {
        if (!isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        include('home.php');
    }
    ?>
    <div class="div1">
        <form method="post">
            <h1>Entre no sistema</h1>
            <label for="uname"><b>Usuário:</b></label>
            <br>
            <input type="txt" name="login">
            <br><br>
            <label for="uname"><b>Senha:</b></label>
            <br>
            <input type="password" name="senha">
            <br><br>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </div>
</body>

</html>