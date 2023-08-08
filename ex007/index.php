<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressoes Aritmeticas</title>
</head>
<body>
    <h1>Expressoes Aritmeticas</h1>

    <?php 
    $res = 50 / 2 + 3 ** 2;
    $r = abs(-2000);
    $r1 = base_convert(254, 10, 8);
    $r2 = base_convert(254, 10, 2);
    $r3 = base_convert(254, 10, 16);
    $r4 = ceil(255.3);
    $r5 = floor(255.3);
    $r6 = round(293.34);
    $r7 = intdiv(5,2);
    $r8 = min(5, 2); // max
    $r9 = pi();
    $r10 = pow(5, 2);
    $r11 = sqrt(81);
    echo "A resposta com valor absoluto é $r";
    echo "<br>O resultado de 254 para binario é $r2";
    echo "<br>O resultado de 254 para hexadecimal é $r3";
    echo "<br>O resultado de 254 da base 8 é $r1";
    echo "<br>O resultado é $res";
    echo "<br>255.3 arredondando para cima com ceil() fica $r4";
    echo "<br>255.3 arredondando para baixo com floor() fica $r5";
    echo "<br>Arredondando 293.34 com round() fica $r6";
    echo "<br>A divisao inteira entre 5 e 2 é $r7";
    echo "<br>O menor valor entre 5 e 2 é $r8";
    echo "<br>O valor de pi é $r9";
    echo "<br>A potencia de 5 e 2 é $r10";
    echo "<br>A raiz quadrada de 81 é $r11";
    ?>
</body>
</html>