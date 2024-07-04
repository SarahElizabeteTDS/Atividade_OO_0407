<?php
function calculaMedia($n1, $n2, $peso1=50, $peso2=50) 
{
    $val1 = $n1 * $peso1;
    $val2 = $n2 * $peso2;
    return ($val1 + $val2) / 100;
}

//Leitura das notas
$nota1 = readline("Informe a nota 1: ");
$nota2 = readline("Informe a nota 2: ");

//Cálculo da média
$media = calculaMedia($nota1, $nota2);

//Imprime o resultado do aluno e a sua média
if($media >= 9)
    echo "Aprov. com Mérito - Média: " . $media . "\n";
else if($media < 9 && $media >= 6)
    echo "Aprovado - Média: " . $media . "\n";
else
    echo "Reprovado - Média: " . $media . "\n";

//LETRA A

//inicializacao
//$nota1 = 10
//$nota2 = 4
//funcao 
//$val1 = 500
//$val2 = 200
//return 700/100
//return 7
//A)Aprovado - Média: 7

//LETRA B

//inicializacao
//$nota1 = 7
//$nota2 = 3
//funcao 
//$val1 = 350
//$val2 =	150
//return 500/100
//return 5
//B)Reprovado - Média: 5
