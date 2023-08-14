<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos escalares (int, float, boolean, string)</h1>
    <?php 
    // 0x = hexadecimal, 0b = binario, 0 = Octal

    $sobrenome = "Silva"; //string
    $num = 0x1A;
    //echo "O valor da variavel é $num";
    $idade = 34; // int ou integer
    
    $peso = 85.5; // float ou double
    $casado = true; // bool ou boolean

    $v = 300;
    //var_dump(($v))

    $num = 3e2; // 3 x 10(2) potencia
    //echo "O valor é $num";
    $num = (float) 3e2;
    //echo "O valor é $num";
    //var_dump($num);

    //var_dump($casado)
    ?>
    <h2>Tipos primitivos compostos (array, object)</h2>
    <?php 
     $vet = [5, 5.2, "Maria", 3, false];
     class Pessoa {
        private string $nome;
     }
     $p = new Pessoa;
     var_dump($p);
    ?>
    <h3>Tipos primitivos especiais (null, resource, callabe, mixed)</h3>
</body>
</html>