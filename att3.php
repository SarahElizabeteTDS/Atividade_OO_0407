<?php

//inicializacao das variaveis
$turma1 = array();
$turma2 = array();
$turma3 = array();
$turma4 = array();

$turmas = array();

$totalAlunos = 0;

//valores
$turma1["curso"] = readline("Informe o curso da turma: ");
$turma1["ano"] = readline("Informe ano da turma: ");
$turma1["alunos"] = readline("Informe a quantidade de alunos da turma: ");

$turma2["curso"] = readline("Informe o curso da turma: ");
$turma2["ano"] = readline("Informe ano da turma: ");
$turma2["alunos"] = readline("Informe a quantidade de alunos da turma: ");

$turma3["curso"] = readline("Informe o curso da turma: ");
$turma3["ano"] = readline("Informe ano da turma: ");
$turma3["alunos"] = readline("Informe a quantidade de alunos da turma: ");

$turma4["curso"] = readline("Informe o curso da turma: ");
$turma4["ano"] = readline("Informe ano da turma: ");
$turma4["alunos"] = readline("Informe a quantidade de alunos da turma: ");

//criar uma matriz com todas as turmas
$turmas = array($turma1, $turma2, $turma3, $turma4);

//percorrer a lista
foreach($turmas as $turma)
{
    $totalAlunos += $turma["alunos"];
}

print "A quantidade de alunos de todas as turmas somada é: " . $totalAlunos . "\n";
