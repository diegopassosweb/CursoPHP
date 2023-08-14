<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 009</title>
</head>
<body>
    <?php 
    $v1 = 2;
    $p1 = 3;
    $v2 = 27;
    $p2 = 2;


    $ma = ($v1 + $v2) / 2;
    $mp = ($v1 * $p1 + $v2 * $p2)/($p1 + $p2);

    echo "<p>A media aritmetica entre $v1 e $v2 é igual a $ma</p>";
    echo "<p>A media ponderada entre $v1 com peso $p1 e $v2 com peso $p2 é igual a $mp </p>";
    ?>
</body>
</html>