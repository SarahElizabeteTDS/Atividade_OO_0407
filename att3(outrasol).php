<?php

$turmas = array();

//ler as turmas
for ($i=0; $i < 4; $i++) 
{ 
    $turma = array();
    $turma["curso"] = readline("Informe o curso da turma: " . $i . "\n");
    $turma["ano"] = readline("Informe ano da turma: " . $i . "\n");
    $turma["alunos"] = readline("Informe a quantidade de alunos da turma: " . $i . "\n");

    array_push($turmas, $turma); //cria a matriz
}

//percorre a lista
foreach($turmas as $turma)
{
    $totalAlunos += $turma["alunos"];
}

//imprime a saida
print "A quantidade de alunos de todas as turmas somada é: " . $totalAlunos . "\n";
