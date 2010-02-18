<?
/**
=begin
titulo: maior e menor de dois
enunciado: Criar um programa que receba dois n�meros distintos e exiba qual o maior e o menor
exemplos:
    23 34: 34 > 23
    34 23: 34 > 23
    34 34: os n�meros s�o iguais
dificuldade: 2
linguagem: php
solucao: utilizando if e else
categorias: [logica, if, else]
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
$iguais = $n1 == $n2;

if ($n1 > $n2):
    $maior = $n1;
    $menor = $n2;
else:
    $maior = $n2;
    $menor = $n1;
endif;

// SAIDA
if ($iguais)
    echo "os n�meros s�o iguais";
else
    echo "$maior > $menor"
?>