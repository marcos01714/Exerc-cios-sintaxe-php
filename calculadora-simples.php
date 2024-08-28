<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Exercício 1-Calculadora simples</h1>
    <?php
        $numero1 = 4; //Declaração dp primeiro número.
        $numero2 = 6; //Declaração do segundo número.
        $operacao = 'divisão'; //Declaração de qual operação matemática será utilizada.

        if ($operacao == 'soma') { //Condição para caso de soma.
            $resultado = $numero1 + $numero2;
            echo "<h2>Operação escolhida: Soma.</h2>";
            echo "<h3>O resultado da soma é: $resultado</h3>"; //Os dois echo's mostram a operação escolhida e o resultado da operação, isso vale para as outras condições.
        }

        else if ($operacao == 'subtração') { //Condição para caso de subtração.
            $resultado = $numero1 - $numero2;
            echo "<h2>Operação escolhida: Subtração.</h2>";
            echo "<h3>O resultado da subtração é: $resultado</h3>";
        }

        else if ($operacao == 'multiplicação') { //Condição para caso de multiplicação.
            $resultado = $numero1 * $numero2;
            echo "<h2>Operação escolhida: Multiplicação.</h2>";
            echo "<h3>O resultado da multiplicação é: $resultado</h3>";
        }

        else { //Condição para caso de divisão.
            $resultado = $numero1 / $numero2;
            echo "<h2>Operação escolhida: Divisão.</h2>";
            echo "<h3>O resultado da divisão é: $resultado</h3>";
        }
    ?>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>