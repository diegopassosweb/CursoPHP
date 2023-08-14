<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $sal = 8160;
    $min = 1000;

    $tot = intdiv($sal, $min);
    $dif = $sal % $min;

    echo "Quem ganha $sal por mes, ganha um total de $tot salarios minimos + $dif"
?>
</body>
</html>