<?
/**
=begin
titulo: Pal�ndrome
enunciado: "Pal�ndrome � uma palavra ou n�mero que � igual se lido de traz pra frente.
  Receber uma entrada e apenas dizer se � pal�ndrome ou n�o."
exemplos:
    101: SIM
    2002: SIM
    A: SIM
    ABC: NAO
    ANA: SIM
    RADAR: SIM
dificuldade: 1
linguagem: php
solucao: "Utilizar a fun��o strrev para inverter uma string e comparar com ela mesma.
  Aplicar a fun��o trim na entrada, para remover os espa�os no come�o e no fim da entrada."
categorias: [api, ternario]
=end
*/

// ENTRADA

$palavra = trim($argv[1]);

// LOGICA

$palindrome = $palavra == strrev($palavra);

// SAIDA

echo $palindrome ? "SIM" : "NAO";

?>