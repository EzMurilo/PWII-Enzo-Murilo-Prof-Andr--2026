<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo em linguagem php</title>
</head>
<body>
    <?php
    /*ARRAY ASSOCIATIVO EM LINGUAGEM PHP
    O array associatiuvo é basicamente um array, porém com chave  e valor;
    A estrutura base é a mesma mas ele pode ser construido dessa maneira:
    $arr = ['nome' => 'JULIO LEMBO', idade => 29]
    Chave entre aspas, seta para apontar o valor e valor;
     */

    $arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

    echo $arr['nome'];
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo $arr['patas'];

    $arrAssoc = ['chave' => 'valor', 'bool' => true];

    echo "<br>";
    print_r($arrAssoc);


    ?>
</body>
</html>