<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
    
    <?php 
    $min = 0;
    $max = 100;

    $num = mt_rand($min, $max);
    // rand() antigo
    // mt_rand()
    // random_int() gera numeros aleatorios criptograficamente seguros
    echo "<br>Gerando um numero aleatorio entre $min e $max...";
    echo "<br>O numero gerado foi $num";
    ?>
    <button onclick="javascript:document.location.reload()">Atualizar</button>
    </main>
</body>
</html>