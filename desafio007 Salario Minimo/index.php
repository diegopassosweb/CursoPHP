<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $min = 1_380.60;
    $salario = $_GET['sal'] ?? $min;

    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="sal">Salario (R$)</label>
        <input type="number" name="sal" id="sal"
        value="<?=$salario?>" step="0.01">
        
        <p>Considerando o salario minimo de R$<?=number_format($min, 2, ",", ".")?></p>
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $tot = intdiv($salario, $min);
        $dif = $salario % $min;

        echo "<p>Quem ganha um salario de R\$". number_format($salario, 2, ",", ".")." Ganha $tot salarios minimos + R\$ ". number_format($dif, 2, ",", ".")." </p>"
        ?>
    </section>
</body>
</html>