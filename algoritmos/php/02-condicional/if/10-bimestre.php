<?

/*@

@Titulo: Aprovado/Reprovado

@Enunciado: Dado as notas dos 4 bimestres,
calcular a m�dia anual do aluno e dizer se ele est� aprovado ou reprovado.

@Objetivo: Utilizar o operador tern�rio
isolando l�gica da sa�da

@Entrada: 4 Notas de 0 � 10

@Sa�da:
Notas dos Bimestres
====================
1 Bimestre: 7.2
2 Bimestre: 6.3
3 Bimestre: 5.1
4 Bimestre: 4.6
--------------------
M�dia Anual: 5.8 = Aluno Reprovado!

@Dica: F�rmula da m�dia: "(a + b + c + d) / 4".
Armazenar a string APROVADO/REPROVADO utilizando o operador tern�rio

@Dificuldade: 1

@Categoria: Operador Tern�rio

@Aula: 2

@ordem 30

@*/

// .............................. INICIALIZA��O ..............................

$b1 = 7.2;
$b2 = 6.3;
$b3 = 5.1;
$b4 = 4.6;

// .............................. ENTRADA ..............................

/*/ Descomentar para testar entrada de dados pelo DOS
$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];
//*/

// .............................. PROCESSAMENTO ..............................

// PROCESSAMENTO
$media = ($b1 + $b2 + $b3 + $b4) / 4;
$aprovado = $media >= 60;

// .............................. SA�DA ..............................

echo "
Notas dos Bimestres
====================
1 Bimestre: $b1
2 Bimestre: $b2
3 Bimestre: $b3
4 Bimestre: $b4
--------------------
M�dia Anual: $media
";

echo $aprovado "APROVADO" : "REPROVADO";

?>