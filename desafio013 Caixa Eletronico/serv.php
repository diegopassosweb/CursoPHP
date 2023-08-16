<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 13</title>
</head>
<body>
    <?php 
    $saque = 387;

    $resto = $saque;
    // de 100
    $tot100 = floor($resto / 100);
    $resto %= 100;
    // de 50
    $tot50 = floor($resto / 50);
    $resto %= 50;
    // de 10
    $tot10 = floor($resto / 10);
    $resto %= 10;
    // de 5
    $tot5 = floor($resto / 5);
    $resto %= 5;

    echo "Seu saque de R\$$saque vai resultar em: 
    <p>$tot100 notas de 100</p> 
    <p>$tot50 notas de R\$50</p> 
    <p>$tot10 de R\$10</p> 
    <p>$tot5 notas de R\$5</p>
    <p>Faltou sacar $resto reais </p>
    ";
    ?>
</body>
</html>