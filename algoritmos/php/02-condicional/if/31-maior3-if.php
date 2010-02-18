<?
/**
=begin
titulo: maior de tr�s
enunciado: Criar um programa que receba tr�s n�meros distintos e exiba qual o maior
exemplos:
    1 2 3: o maior entre 1, 2 e 3 eh o 3
    1 3 2: o maior entre 1, 3 e 2 eh o 3
    2 1 3: o maior entre 2, 1 e 3 eh o 3
    2 3 1: o maior entre 2, 3 e 1 eh o 3
    3 1 2: o maior entre 3, 1 e 2 eh o 3
    3 2 1: o maior entre 3, 2 e 1 eh o 3
dificuldade: 3
linguagem: php
solucao: compara todos os n�meros entre si. 
        Esta � a pior solu��o, pois a complexidade aumenta com a quantidade de n�meros.
categorias: [logica, if, else, elseif]
ordem: 3.1
=end
*/
// ENTRADA
$n1 = 1;
$n2 = 2;
$n3 = 3;

// L�GICA
if ($n1 > $n2 && $n1 > $n3)
    $maior = $n1;
elseif ($n2 > $n1 && $n2 > $n3)
    $maior = $n2;
else
    $maior = $n3;

// SA�DA
echo "o maior entre $n1, $n2 e $n3 eh o $maior";

?>