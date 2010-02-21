<?
/**
=begin
titulo: Diferen�a entre 2 n�meros
enunciado: Receber 2 n�meros e exibir a diferen�a entre eles.
exemplos:
    4 9: A diferenca entre 4 e 9 = 5
    9 4: A diferenca entre 9 e 4 = 5
    3 3: A diferenca entre 3 e 3 = 0
dificuldade: 1
linguagem: php
solucao: utilizando operador ternario
categorias: [if, ternario]
=end
*/

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

if ($n1 > $n2)
	$diferenca = $n1 - $n2;
else
	$diferenca = $n2 - $n1;
  
// utilizando operador tern�rio
// $diferenca = $n1 > $n2 ? $n1 - $n2 : $n2 - $n1;

// SAIDA

echo "
A diferenca entre $n1 e $n2 = $diferenca

";

?>