<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AULA 5 - Manipulação de STRINGS</h1>
    <?php 
    const ESTADO = "RJ";
    const CANAL = "Curso em Video";

    $nome = "Gustavo";
    $sobrenome = "Guanabara";
    echo " Ola $nome $sobrenome \u{1F297} ";
    echo " <br> Moro no ".ESTADO, "\u{1F297} ";
    echo " <br> Assistindo o canal ".CANAL;
    echo "<br>Estamos no ano de " .date("Y")
    ?>

    <?php 
    $curso = "PHP";
    $ano = date('Y');
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "<br> $nom \"Minotauro\" $snom";
    ?>
</body>
</html>