<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 13-Fatorial com for</h1>
    <?php
        $fatorial = 5;
        $resultado = 1;
        $controle = 0;
        for ($controle = 2; $controle <= $fatorial; $controle ++) {
            $resultado *= $controle;
        }
        echo "<h2>O fatorial do número $fatorial é: $resultado.</h2>"
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>