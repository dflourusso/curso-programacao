<?
/**
=begin
titulo: Contador de In�cio ao Fim Apenas dos Divisores Inteiros
enunciado: "Exibir a contagem num�rica de in�cio at� fim informados na entrada,
  mas apenas dos n�meros que s�o divisores inteiros pela terceira entrada."
exemplos:
    0 20 5: 0 5 10 15 20
    1 100 9: 9 18 27 36 45 54 63 72 81 90 99
dificuldade: 1
linguagem: php
solucao: Fazer o m�dulo do contador pela terceira entrada e comparar com zero.
categorias: [for, if]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];
$divisor = $argv[3];

// SAIDA

for ($i = $inicio; $i <= $fim; $i++)
  if ($i % $divisor == 0) echo "$i ";

?>