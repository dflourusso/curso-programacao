<?
/**
=begin
titulo: maior de dois ou iguais
enunciado: Criar um programa que receba dois n�meros e exiba qual o maior ou diga que s�o iguais
exemplos:
  23 34: o maior entre 23 e 34 � o 34
  34 23: o maior entre 34 e 23 � o 34
  34 34: os n�meros s�o iguais
dificuldade: 2
linguagem: php
solucao: utilizando operador ternario
categorias: [logica, if, else, ternario]
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
$iguais = $n1 == $n2;
$maior = $n1 > $n2 ? $n1 : $n2;

// SAIDA
if ($iguais)
	echo "os numeros sao iguais";
else
	echo "o maior entre $n1 e $n2 eh o $maior";

// usando operador tern�rio
echo $iguais ? "os numeros sao iguais"
			 : "o maior entre $n1 e $n2 eh o $maior";
?>