<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand">Exercício 14</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="calculadora-simples.php">Exercício 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calculadora-idade.php">Exercício 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="conversor-temperatura.php">Exercício 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verificacao-paridade.php">Exercício 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verificacao-faixa-etaria.php">Exercício 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verificacao-positivo-negativo-zero.php">Exercício 6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classificacao-nota-escolar.php">Exercício 7</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verificacao-ano-bissexto.php">Exercício 8</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verificacao-tamanho-senha.php">Exercício 9</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mais exercícios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contador-while.php">Exercício 10</a></li>
                        <li><a class="dropdown-item" href="soma-while.php">Exercício 11</a></li>
                        <li><a class="dropdown-item" href="tabuada-for.php">Exercício 12</a></li>
                        <li><a class="dropdown-item" href="fatorial-for.php">Exercício 13</a></li>
                        <li><a class="dropdown-item" href="numero-par-for.php">Exercício 14</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    <h1>Exercício 14-Número par com for</h1>
    <?php
        $numero = 0;
        for ($numero = 1; $numero = 50; $numero ++) {
            if ($numero % 2 = 0) {
                echo "<h4>O número $numero é par.</h4>"
            }
            else {
                echo "<h4>O número $numero é ímpar.</h4>"
            }
        }
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>