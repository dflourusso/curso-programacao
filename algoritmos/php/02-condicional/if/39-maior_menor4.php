<?

/*@

@Titulo: Maior e Menor Entre Quatro

@Enunciado: Dado quatro n�mero, informar qual � o maior e qual � o menor

@Objetivo: Testar condicional em sequ�ncia

@Entrada: Quatro N�meros

@Sa�da:
Maior: 327
Menor: 148
Entre: 148, 327, 34 e 56

@Dica: Resolver em duas etapas, encontrar primeiro o maior, depois o menor, utilizando a mesma solu��o

@Dificuldade: 2

@Categoria: if m�ltiplos

@Aula: 2

@ordem 41

@*/

// .............................. INICIALIZA��O ..............................

$n1 = 148;
$n2 = 327;
$n3 = 34;
$n4 = 56;

// .............................. ENTRADA ..............................

/*
$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];
$n4 = $argv[4];
//*/

// .............................. PROCESSAMENTO ..............................

/*
if ($n1 > $n2):
	$maior = $n1;
	$menor = $n2;
else:
	$maior = $n2;
	$menor = $n1;
endif;

if ($n3 > $maior) $maior = $n3;
if ($n3 < $menor) $menor = $n3;
//*/

//* Solu��o Recomendada pela simplicidade
$maior = $n1; // primeiro descobre o maior
if ($n2 > $maior) $maior = $n2;
if ($n3 > $maior) $maior = $n3;
if ($n4 > $maior) $maior = $n4;

$menor = $n1; // depois descobre o menor, em dois passos separados
if ($n2 < $menor) $menor = $n2;
if ($n3 < $menor) $menor = $n3;
if ($n4 < $menor) $menor = $n4;
//*/

// .............................. SA�DA ..............................

echo "
Maior: $maior
Menor: $menor
Entre: $n1, $n2, $n3 e $n4
";

?>