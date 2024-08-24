<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2-Calculadora de idade</h1>
    <?php
        $anoNascimento = 1997; //Ano de nascimento da pessoa
        $anoAtual = 2024; //Ano atual
        $idade = $anoAtual - $anoNascimento;
        echo "<h2>Idade da pessoa: $idade</h2>";
    ?>
</body>
</html>