<?

/*@

@Titulo: M�dia Aritm�tica do Boletim Escolar

@Enunciado: Dado as notas dos 4 bimestres, e os 4 pesos
calcular a m�dia ponderada anual do aluno.

@Objetivo: Criar uma situa��o real,
misturando manipula��o de string, vari�veis, float e aritim�tica

@Entrada: 4 Notas de 0 � 10 e 3 pesos

@Sa�da:
Notas dos Bimestres
====================
1 Bimestre: 1 Peso 1
2 Bimestre: 2 Peso 2
3 Bimestre: 5 Peso 3
4 Bimestre: 10 Peso 4
--------------------
M�dia Anual: 6

@Dica: F�rmula da m�dia ponderada: "(a * p1 + b * p2 + c * p3 + d * p4) /(p1 + p2 + p3 + p4)

@Dificuldade: 1

@Categoria: Operadores B�sicos, Aritim�tica, float

@Aula: 1

@ordem: 50

@*/

// .............................. ENTRADA ..............................

$b1 = 7.2;
$b2 = 6.3;
$b3 = 5.1;
$b4 = 4.6;

$p1 = 1;
$p2 = 2;
$p3 = 3;
$p4 = 4;

/*/ Descomentar para testar entrada de dados pelo DOS
$b1 = $argv[1];
$p1 = $argv[2];

$b2 = $argv[3];
$p2 = $argv[4];

$b3 = $argv[5];
$p3 = $argv[6];

$b4 = $argv[7];
$p4 = $argv[8];
//*/

// .............................. L�GICA ..............................

$parcial1 = $b1 * $p1;
$parcial2 = $b2 * $p2;
$parcial3 = $b3 * $p3;
$parcial4 = $b4 * $p4;
$soma = $parcial1 + $parcial2 + $parcial3 + $parcial4;
$pesos = $p1 + $p2 + $p3 + $p4;
$media = $soma / $pesos;

setlocale(LC_NUMERIC, "ptb");

// .............................. SA�DA ..............................

echo "
Notas dos Bimestres
====================
1 Bimestre: $b1 Peso $p1, Nota Parcial: $parcial1
2 Bimestre: $b2 Peso $p2, Nota Parcial: $parcial2
3 Bimestre: $b3 Peso $p3, Nota Parcial: $parcial3
4 Bimestre: $b4 Peso $p4, Nota Parcial: $parcial4
--------------------
M�dia Anual: $media
";

?>