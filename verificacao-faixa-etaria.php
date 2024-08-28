<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
   <h1>Exercício 5-Verficação de faixa etária</h1>
   <?php
        $idade = 73;
        if ($idade <= 12) {
            echo "<h2>Idade: $idade. Faixa etária: Criança.</h2>";
        }
        else if ($idade <= 17) {
            echo "<h2>Idade: $idade. Faixa etária: Adolescente.</h2>";
        }
        else if ($idade <= 64) {
            echo "<h2>Idade: $idade. Faixa etária: Adulto(a).</h2>";
        }
        else {
            echo "<h2>Idade: $idade. Faixa etária: Idoso(a)</h2>";
        }
   ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>