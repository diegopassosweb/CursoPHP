<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 01</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- <?php 
    $num = 15;

    //$ant = $num - 1;
    //$suc = $num + 1;

    echo "<br>O antecessor de $num é ". ($num -1) ." ";
    echo "<br>O sucessor de $num é ". ($num + 1) ." ";
    ?> -->

    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $n = $_REQUEST["num"] ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O numero escolhido foi $n";
            echo "<br>O seu antecessor é $a";
            echo "<br>O seu sucessor é $s";
            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='index.html'">Voltar</button> -->
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>