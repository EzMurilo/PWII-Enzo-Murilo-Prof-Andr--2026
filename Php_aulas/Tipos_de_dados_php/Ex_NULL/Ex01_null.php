<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NULL - EM LINGUAGEM PHP</title>
</head>
<body>
<?php
/* NULL
Em PHP, null (ou NULL, pois a palavra-chave é case-insentive)
representa a ausencia de valor de uma variável.
É o único valor possível do tipo de dado primitivo chamado null.
*/

$nome;
var_dump($nome); //resultado: NULL

$status = "ativo";
unset($status);
var_dump($status); //resultado null

$idade = null;

$status = "ativo";
unset($status);
var_dump($status); // Resultado: Null



/*Como checar se uma variável é NULL?
Existem duas formas principais de verificar null:
is_null: Retorna true se a variável for null.
Comparação estrita(== null):Verifica se a variável tem valor null
é a do tipo null.
*/

echo NULL;
$nome = NULL;

if(is_null($nome)){

}

$nome = "Carolina";
if(is_null($nome)){
    echo "O valor é nulo";
}

$nome;
var_dump($nome); //Resultado :Null
$taxa = null;
if(is_null($taxa)){
echo "Taxa não foi informada";
}

if($taxa === null){
    echo "Mesma verificação usando comparação estrita";

}

?>

</body>
</html>