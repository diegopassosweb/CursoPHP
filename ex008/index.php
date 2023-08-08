<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <?php 
    $r = "2" + "2";
    $r1 = 2 . 2; // O ponto é concatenação
    $r2 = 5 ** 2;
    $r3 = 50 / 2 + 3 ** 2;
    echo var_dump($r);
    echo '<br>',var_dump($r1);
    echo "<br> 5 ** 2 =  $r2";
    echo "<br> o resultado é $r3";
    ?>
</body>
</html>