<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP por dentro</title>
</head>
<body>
    <h1>
        PHP por dentro
    </h1>
    <?php 
        $nome = "Gustavo";
        echo "<p>Eu me chamo $nome!</p>"
    ?>
    
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // GMT -3
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>