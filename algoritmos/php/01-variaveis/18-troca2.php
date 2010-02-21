<?
/**
=begin
titulo: Trocar 2 n�meros
enunciado: Troca o conte�do entre duas vari�veis
exemplos:
  11 22: 22 11
  22 11: 11 22

dificuldade: 1
linguagem: php
solucao: Utilizar uma vari�vel tempor�ria
categorias: [logica]
=end
*/

// ENTRADA

$a = $argv[1];
$b = $argv[2];

// LOGICA

// utilizar uma vari�vel tempor�ria para fazer a troca
$temp = $a;
$a = $b;
$b = $temp;

// SAIDA

echo "
$a $b

"

?>