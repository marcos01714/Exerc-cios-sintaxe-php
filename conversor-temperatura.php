<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 3-Conversor de temperatura</h1>
    <?php
        $temperaturaCelsius = 33;
        $temperaturaFarenheit = ($temperaturaCelsius * 9/5) + 32;
        echo "<h2>A temperatura é de: $temperaturaFarenheit °F";
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>