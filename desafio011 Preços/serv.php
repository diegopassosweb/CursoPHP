<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 11</title>
</head>
<body>
    <?php 
    $preco = 1_800;
    $porc = 6;
    $form = ($preco * $porc) / 100;
    // (valor x 50% ) / 100
    $novo = $preco + $form;
    echo "$porc% de $preco é igual a $form e produto vai custar $novo";
    ?>
</body>
</html>