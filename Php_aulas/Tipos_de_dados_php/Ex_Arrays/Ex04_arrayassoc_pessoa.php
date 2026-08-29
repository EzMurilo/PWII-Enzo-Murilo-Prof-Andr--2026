<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo pessoa</title>
</head>
<body>
    <?php
     
     $caracteristicas = ['nome' => 'Murilo', 'anos' => 20];

     if($caracteristicas['anos'] >= 18){
        echo "individuo maior de idade";
     }
     else{
        echo "individuo menor de idade";
     }
    ?>
</body>
</html>