<?
/**
=begin
titulo: Resultados por P�gina
enunciado: "Receba de entrada um n�mero representando a
  quantidade de resultados retornados em um busca e
  quantos resultados deseja exibir por p�gina e 
  exiba quantas p�ginas ser�o necess�rias."
exemplos:
  120 9: 120 resultados exibidos em 14 paginas
  49 20: 49 resultados exibidos em 3 paginas
  40 20: 40 resultados exibidos em 2 paginas
  29 20: 29 resultados exibidos em 2 paginas
  41 20: 41 resultados exibidos em 3 paginas
dificuldade: 1
linguagem: php
solucao: Utilizar a fun��o ceil($numero) para arredondar para cima.
categorias: [api,aritmetica]
=end
*/

// ENTRADA

$resultados = $argv[1];
$por_pagina = $argv[2];

// LOGICA

$paginas = ceil($resultados / $por_pagina);

// .............................. SA�DA ..............................

echo "
$resultados resultados exibidos em $paginas paginas

";

?>