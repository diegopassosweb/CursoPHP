<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['num']?? 1;

    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num"
            value="<?=$numero ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>Analisando o numero $numero </p> temos";
            echo "<ul><li> A sua raiz quadrada é ". number_format($rq, 2, ",",".")."</li>";
            echo "<li>A sua raiz cubica é ". number_format($rc, 2, ",",".") ." </li></ul>";
        ?>
    </section>
</body>
</html>