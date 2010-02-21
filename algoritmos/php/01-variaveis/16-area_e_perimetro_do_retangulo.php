<?
/**
=begin
titulo: �rea e Per�metro do Ret�ngulo
enunciado: "Recebe 2 n�meros correspondente a altura e largura do ret�ngulo e
  exibe a medida do per�metro e da �rea do ret�ngulo."
exemplos:
  5 6: |
    O retangulo 5X6cm,
    possui area de 30cm2 e
    perimetro de 22cm.
  10 20: |
    O retangulo 10X20cm,
    possui area de 200cm2 e
    perimetro de 60cm.

dificuldade: 1
linguagem: php
solucao: "O per�metro � a soma dos lados e a �rea � a altura vezes largura."
categorias: [aritmetica]
=end
*/
// ENTRADA

$altura = $argv[1];
$largura = $argv[2];

// LOGICA

$area = $altura * $largura;
$perimetro = 2 * $altura + 2 * $largura;

// SAIDA

echo "
O retangulo {$altura}X{$largura}cm,
possui area de {$area}cm2 e
perimetro de {$perimetro}cm.

";

?>