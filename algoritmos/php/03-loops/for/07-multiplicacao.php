<?
/**
=begin
titulo: Multiplica��o
enunciado: Dado um in�cio e fim, mostrar a multiplica��o dos n�meros no intervalo.
exemplos:
    1 2: 1 x 2 = 2
    5 7: 5 x 6 x 7 = 210
    1 10: 1 x 2 x 3 x 4 x 5 x 6 x 7 x 8 x 9 x 10 = 3628800
dificuldade: 3
linguagem: php
solucao: Multiplicar em um for e exibir em outro. Concatena o sinal de x em todos menos no �ltimo.
categorias: [for, ternario]
=end
*/

// ENTRADA
$inicio = $argv[1];
$fim = $argv[2];

// LOGICA
$mult = 1;
for ($i = $inicio; $i <= $fim; $i++)
  $mult *= $i;

// SAIDA

for ($i = $inicio; $i <= $fim; $i++):
  echo "$i ";
  echo $i == $fim ? "= " : "x ";
endfor;

echo $mult;

?>