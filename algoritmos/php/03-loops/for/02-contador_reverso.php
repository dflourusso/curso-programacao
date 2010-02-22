<?
/**
=begin
titulo: Contador de Fim ao In�cio
enunciado: Exibir a contagem num�rica de fim at� o in�cio informados na entrada.
exemplos:
    1 10: 10 9 8 7 6 5 4 3 2 1
dificuldade: 1
linguagem: php
solucao: Inicializar o for com $fim e comparar o contador com $inicio enquanto decrementa $i--
categorias: [for]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];

// SAIDA

for ($i = $fim; $i >= $inicio; $i--)
  echo "$i ";

?>