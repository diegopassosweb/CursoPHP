<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = 1978;
    $ano = $atual;

    $idade = $ano - $nasc;
    echo "Quem nasceu em $nasc vai ter $idade anos em $ano";
    ?>
</body>
</html>