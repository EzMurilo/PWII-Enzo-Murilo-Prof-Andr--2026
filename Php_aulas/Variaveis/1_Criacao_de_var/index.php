<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de variaveis em linguagem PHP</title>
</head>
<body>
    <?php
    /*Sobre variaveis em PHP
    São a forma que temos para declarar um valor e salva-lo na memoria;
    Uma variavel em PHP tem o $ na frente do seu nome;
    Ex: $nome = "seu nome";
    Podemos salvar qualquer tipo de dado;
    Podemos alterar o valor de uma variavel no decorrer do programa;
    POdemos impreimir o valor de uma variavel com echo;
     */

     $nome = "Enzo"; //String
     $idade = 16; //inteiro
     $altura = 1.82; //Float
     $ativo = true; //boolean
     $categorias = ["PHP", "java", "MYSQL"]; //Array

     /*Regras para Nome de variáveis
     Simbolo Obrigatorio: Devem sempre começar com $.
     Primeiro Caractere: Após o $, deve-se iniciar com uma letra ou um sublinhado (_). Nunca com um número.
     Caracteres Permitidos: Apenas (a-z, A-Z), números (0-9) e 
     sublinhados (_).
     Case-sensitive: Nomes de variáveis diferenciam maiúsculos de minúsculos ($valor e $VALOR são duas variáveis distintas).
    */

    // NOMES VÁLIDOS
    $_codigo = 101;
    $nomeCompleto = "Maria da Silva";
    $nota1 = 9.5;

    //Nomes inválidos
    //$1numero = 10; //ERRO; começa com numero
    //$user-name = "A"; //ERRO: contém hífen
     
    ?>
</body>
</html>