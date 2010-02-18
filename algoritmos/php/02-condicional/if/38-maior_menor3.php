<?

/*@

@Titulo: Maior e Menor de Tr�s

@Enunciado: Dado tr�s n�mero, informar qual � o maior e qual � o menor

@Objetivo: Testar condicional em sequ�ncia

@Entrada: Tr�s N�meros

@Sa�da:
Maior: 327
Menor: 148
Entre: 148, 327 e 56

@Dica: Resolver em duas etapas, encontrar primeiro o maior, depois o menor, utilizando a mesma solu��o

@Dificuldade: 2

@Categoria: if m�ltiplos

@Aula: 2

@ordem 40

@*/

// .............................. INICIALIZA��O ..............................

$n1 = 148;
$n2 = 327;
$n3 = 56;

// .............................. ENTRADA ..............................

/*
$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];
//*/

// .............................. PROCESSAMENTO ..............................

/* Solu��o com L�gica Complexa
if ($n1 > $n2):
	$maior = $n1;
	$menor = $n2;
else:
	$maior = $n2;
	$menor = $n1;
endif;

if ($n3 > $maior) $maior = $n3;
if ($n3 < $menor) $menor = $n3;
/*/

//* Solu��o Recomendada pela simplicidade
$maior = $n1; // primeiro descobre o maior
if ($n2 > $maior) $maior = $n2;
if ($n3 > $maior) $maior = $n3;

$menor = $n1; // depois descobre o menor, em dois passos separados
if ($n2 < $menor) $menor = $n2;
if ($n3 < $menor) $menor = $n3;
//*/

// .............................. SA�DA ..............................

echo "
Maior: $maior
Menor: $menor
Entre: $n1, $n2 e $n3
";

?>