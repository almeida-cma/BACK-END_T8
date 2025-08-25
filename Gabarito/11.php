<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Digite seu nome:</h2>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="submit" value="Salvar">
    </form>

    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        setcookie("nome", $nome, time()+30); // cookie dura 30 segundos
        echo "<p>Nome salvo no cookie: <b>$nome</b></p>";
    }

    if (isset($_COOKIE['nome'])) {
        echo "<p>Bem-vindo novamente, <b>" . $_COOKIE['nome'] . "</b>!</p>";
    }
    ?>
</body>
</html>
