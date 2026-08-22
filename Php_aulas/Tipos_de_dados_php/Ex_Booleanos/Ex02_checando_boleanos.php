<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECAGEM DE Booleanos em PHP</title>
</head>
<body>
    <?php
    /*Checando se é booleano
    Em PHP, existem duas abordagens principais para verificar se um valor é um booleano (true ou false),dependendo se você deseja verificar o tipo primitivo ou
    se aceita strings/numeros que representam booleanos (como "True", "1", 0).

    1.Checagem estrita de tipo (is_bool)
    A função nativa is _bool() verifica se a variavel é estritamente do tipo booleano (true ou false).

    2.Checagem flexivel de formato(filter_var)
    Se você recebe dados vindos de formularios HTML, requisições HTTP OU APIS,
    o valor pode vir como string("true", "false", "1", "0"). Nesses casos, o is_bool()
    retornara false.
    Para validar e converter esses casos, use filter_var() com a flag
    FILTER_VALIDATE_BOOLEAN.

    <?php

    $entrada1 = "true";
    $entrada2 = "1";
    $entrada3 = "Texto _qualquer";
    
// O parâmetro FILTER_NULL_ON_FAILURE faz a função retornar NULL se nao for um booleano

$resultado1 = filter_var($entrada1, FILTER_VALIDADE_BOOLEAN, FILTER_NULL_ON_FAILURE)
$resultado2 = filter_var($entrada1, FILTER_VALIDADE_BOOLEAN, FILTER_NULL_ON_FAILURE)
$resultado3 = filter_var($entrada1, FILTER_VALIDADE_BOOLEAN, FILTER_NULL_ON_FAILURE)

var_dump($resultado1); // bool(true)
var_dump($resultado2); // bool(true)
var_dump($resultado3); // NULL(não é considerado booleano)

    ?>

     */

    $status = true;
    $ativo = false;
    $texto = "True";
    $numero = 1;

    //Retorna True (é booleano)

    var_dump(is_bool($status));
    var_dump(is_bool($ativo));

    //Retorna False (Não são booleanos primitivos)

    var_dump(is_bool($texto));
    var_dump(is_bool($numero));
    ?>
</body>
</html>