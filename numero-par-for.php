<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 14-Número par com for</h1>
    <?php
        $numero = 0;
        for ($numero = 1; $numero = 50; $numero ++) {
            if ($numero % 2 = 0) {
                echo "<h2>O número $numero é par.</h2>"
            }
            else {
                echo "<h2>O número $numero é ímpar.</h2>"
            }
        }
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>