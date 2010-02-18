<?

/*@

@Titulo: Maior, Meio e Menor

@Enunciado: Dado tr�s n�mero, informar qual � o maior, o do meio e qual � o menor

@Objetivo: Testar condicional em sequ�ncia

@Entrada: Tr�s N�meros

@Sa�da:
327 > 148 > 56

@Dica: Utilizar a mesma solu��o para encontrar o maior e o menor,
depois encontrar quem � o meio comparando com os j� encontrados maior e menor

@Dificuldade: 3

@Categoria: if, elseif

@Aula: 2

@ordem 45

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

/* Solu��o Complexa
if ($n1 > $n2):
	$maior = $n1;
	$menor = $n2;
else:
	$maior = $n2;
	$menor = $n1;
endif;

if ($n3 > $maior):
	$meio = $maior;
	$maior = $n3;
elseif ($n3 < $menor):
	$meio = $menor;
	$menor = $n3;
else:
	$meio = $n3;
endif;
/*/

//* Solu��o Recomendada pela simplicidade
$maior = $n1; // primeiro descobre o maior
if ($n2 > $maior) $maior = $n2;
if ($n3 > $maior) $maior = $n3;

$menor = $n1; // depois descobre o menor, em dois passos separados
if ($n2 < $menor) $menor = $n2;
if ($n3 < $menor) $menor = $n3;

// Define o n1 como o do meio, e verifica o n2 e n3 se algum deles � o do meio.
$meio = $n1;
if ($n2 > $menor)
	if ($n2 < $maior)
		$meio = $n2;

if ($n3 > $menor)
	if ($n3 < $maior)
		$meio = $n3;

/* Operador boolean na condicional, sempre pode ser substitu�do por if aninhados
if ($n2 > $menor && $n2 < $maior) $meio = $n2;
if ($n3 > $menor && $n3 < $maior) $meio = $n3;
//*/

// .............................. SA�DA ..............................

echo "$maior > $meio > $menor";

?>