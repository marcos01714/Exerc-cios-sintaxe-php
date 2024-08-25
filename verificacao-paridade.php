<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4-Verificação de paridade</h1>
   <?php
        $numero = 36;
        if ($numero % 2 == 0) {
            echo "<h2>O número $numero é par.</h2>";
        }
        else {
            echo "<h2>O número $numero é ímpar.</h2>";
        }
   ?>
</body>
</html>