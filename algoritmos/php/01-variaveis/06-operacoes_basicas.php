<?
/**
=begin
titulo: Opera��es B�sicas
enunciado: Soma, subtra��o, multiplica��o e divis�o de dois n�meros de entrada.
exemplos:
  64 4: |  
    64 + 4 = 68
    64 - 4 = 60
    64 x 4 = 256
    64 / 4 = 16
  32 8: |
    32 + 8 = 40
    32 - 8 = 24
    32 x 8 = 256
    32 / 8 = 4

dificuldade: 1
linguagem: php
solucao: Criar uma vari�vel para guardar o resultado de cada opera��o
categorias: [saida, aritimetica]
=end
*/

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$soma = $n1 + $n2;
$sub  = $n1 - $n2;
$mult = $n1 * $n2;
$div  = $n1 / $n2;

// SAIDA

echo "
$n1 + $n2 = $soma
$n1 - $n2 = $sub
$n1 x $n2 = $mult
$n1 / $n2 = $div

";

?>