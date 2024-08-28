<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 8-Verifica se um ano é bissexto</h1>
    <?php
        $ano = 2024;
        if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
            echo "<h2>O ano de $ano é bissexto.</h2>";
        }
        else {
            echo "<h2>O ano de $ano não é bissexto.</h2>";
        }
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>