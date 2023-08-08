<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas</h1>
        <?php 
        $cot = 5.17;

        $real = $_GET["din"] ?? 0;

        $dolar = $real / $cot;

        //echo "<br> Formataçao padrao => Seus R\$ " . number_format($real, 2, ",", ".") . " reais equivalem a US\$ " . number_format($dolar, 2, ",", ".") . " dolares ";

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>