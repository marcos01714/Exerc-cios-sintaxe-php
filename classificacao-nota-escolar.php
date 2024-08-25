<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7-Classificação de nota escolar</h1>
    <?php
        $nota = 99;
        if ($nota <= 100) {
            echo "<h2>Nota: $nota. Classificação: A.";
        }
        else if ($nota < 90) {
            echo "<h2>Nota: $nota. Classificação: B.";
        }
        else if ($nota < 80) {
            echo "<h2>Nota: $nota. Classificação: C.";
        }
        else if ($nota < 70) {
            echo "<h2>Nota: $nota. Classificação: D.";
        }
        else if ($nota < 60) {
            echo "<h2>Nota: $nota. Classificação: F.";
        }
        else if ($nota < 0 || $nota > 100) {
            echo "<h2>Insira apenas valores entre 0 e 100!";
        }
    ?>
</body>
</html>