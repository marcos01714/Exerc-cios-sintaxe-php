<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 9-Verifica o tamanho da senha</h1>
    <?php 
        $senha = "marco";
        $quantidadeCaracteres = strlen($senha);
        if ($quantidadeCaracteres < 6) {
            echo "<h2>Comprimento mínimo de 6 caracteres não foi atingido, digite outra senha.</h2>";
        }
        else {
            echo "<h2>Comprimento mínimo de 6 caracteres atingido, senha segura.</h2>";
        }
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>