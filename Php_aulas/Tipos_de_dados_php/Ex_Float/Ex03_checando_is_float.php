<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex checando float</title>
</head>
<body>
    <?php
$a = 1.2;
$b = 2.3;
$c = 3.4;


echo "$a é um numero decimal<br>";
echo "$b é um numero decimal<br>";

if(is_float($c)){
    echo "$c é um numero decimal!<br>";
}
if(is_int($c)){
    echo "é um inteiro!<br>";
}
    ?>
</body>
</html>