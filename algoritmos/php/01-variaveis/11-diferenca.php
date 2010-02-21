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
solucao: Subtrair os n�meros e aplicar a fun��o abs($numero) para retornar o valor positivo
categorias: [api]
=end
*/

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$diferenca = abs($n1 - $n2);

// SAIDA

echo "
A diferenca entre $n1 e $n2 = $diferenca

";

?>