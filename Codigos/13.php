<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Contador com Sessão</h2>

    <?php
    session_start();

    //Código aqui (incrementar contador)

    echo "<p>Você visitou esta página <b>" . $_SESSION['contador'] . "</b> vezes nesta sessão.</p>";
    ?>
</body>
</html>
