<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6-Verifica se um número é positivo, negativo ou zero</h1>
    <?php
        $numero = 96;
        if ($numero == 0) {
            echo "<h2>Número digitado: $numero. Classificação: Zero.</h2>";
        }
        else if ($numero == 95) {
            echo "<h2>Número digitado: $numero. Classificação: Positivo. KATCHAU ;)</h2>";
        }
        else if ($numero > 0){
            echo "<h2>Número digitado: $numero. Classificação: Positivo.</h2>";
        }
        else {
            echo "<h2>Número digitado: $numero. Classificação: Negativo.</h2>";
        }
    ?>
</body>
</html>