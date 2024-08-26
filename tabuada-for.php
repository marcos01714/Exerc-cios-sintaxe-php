<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Exercício 12-Tabuada com for</h1>
    <?php
        $tabuada = 5;
        $multiplicador = 1;
        $resultado = 0;
        for ($multiplicador = 1; $multiplicador <= 10; $multiplicador ++) {
            $resultado = $tabuada * $multiplicador;
            echo "<h2>$tabuada x $multiplicador = $resultado</h2>";
        }
    ?>
</body>
</html>