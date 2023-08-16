<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 1</title>
</head>
<body>
    <?php 
        $total = 2_000_000;
        $sobra = $total;
        // semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        // total segundos
        $segundo = $sobra;
        echo "$total segundos equivalem a $semana semanas, $dia dias $hora horas, $minuto minutos, $segundo segundos";
    ?>
</body>
</html>