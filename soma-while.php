<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 11-Soma com while</h1>
    <?php
        $soma = 0;
        $numero = 1;
        while ($numero <= 100) {
            $soma += $numero;
            $numero ++;
        }
        echo "<h2>A soma dos números de 1 a 100 é igual a: $soma.</h2>";
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>