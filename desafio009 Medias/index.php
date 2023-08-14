<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? '';
        $peso1 = $_GET['p1'] ?? '';
        $valor2 = $_GET['v2'] ?? '';
        $peso2 = $_GET['p2'] ?? '';
    ?>
    <main>
        <h1>Medias Aritmeticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1o Valor</label>
            <input type="number" name="v1" id="v1" require value="<?=$valor1?>">
            <label for="p1">1o Peso</label>
            <input type="number" name="p1" id="p1" min="1" require value="<?=$peso1?>">
            
            <label for="v2">2o Valor</label>
            <input type="number" name="v2" id="v2" require value="<?=$valor2?>">
            <label for="p2">2o Peso</label>
            <input type="number" name="p2" id="p2" min="1" require value="<?=$peso2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        $ma = ($valor1 + $valor2) / 2;
        $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Calculo Medias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>
        <ul>
            <li>A Media Aritmetica Simples entre os valors é igual a <?=number_format($ma, 2, ",",".")?></li>
            <li>A Media Aritmetica Ponderada com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp, 2, ",",".")?></li>
        </ul>
    </section>
</body>
</html>